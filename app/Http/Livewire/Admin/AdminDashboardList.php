<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardList extends Component
{
    public $birthdaysUpcoming;

    public $activeUsers;
    public $almostFinishedUsers;
    public $inActiveUsers;
    public $allUsers;

    public $lastMonthPaymentsSum;
    public $lastYearPaymentsSum;

    public function render()
    {
        $this->birthdaysUpcoming =
            DB::select(
                'SELECT  *
                FROM    users
                WHERE   DATE_ADD(birth_date,
                        INTERVAL YEAR(CURDATE())-YEAR(birth_date)
                        + IF(DAYOFYEAR(CURDATE()) >= DAYOFYEAR(birth_date),1,0) YEAR)
                BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
                ORDER BY birth_date
                ');

        $this->activeUsers = DB::table('users')
            ->join('subscriptions', 'subscriptions.users_id', '=', 'users.id')
            ->where('subscriptions.expiration_date', '>', Carbon::now()->toDateTimeString())
            ->get();

        $this->almostFinishedUsers = DB::table('users')
            ->join('subscriptions', 'subscriptions.users_id', '=', 'users.id')
            ->whereRaw('dateDiff(subscriptions.expiration_date, now()) > ?', [-7])
            ->get();

        $this->inActiveUsers = DB::table('users')
            ->join('subscriptions', 'subscriptions.users_id', '=', 'users.id')
            ->where('subscriptions.expiration_date', '<', Carbon::now()->toDateTimeString())
            ->get();

        $this->allUsers = DB::table('users')
            ->get();

        $this->lastMonthPaymentsSum = DB::table('subscriptions')
            ->selectRaw('sum(payment) as lastMonthPaymentsSum')
            ->whereYear('created_at', '=', Carbon::now()->format('Y'))
            ->whereMonth('created_at', '=', Carbon::now()->format('m'))
            ->pluck('lastMonthPaymentsSum');

            if ($this->lastMonthPaymentsSum[0] == null) $this->lastMonthPaymentsSum = 0; else $this->lastMonthPaymentsSum = $this->lastMonthPaymentsSum[0];

        $this->lastYearPaymentsSum = DB::table('subscriptions')
            ->selectRaw('sum(payment) as lastYearPaymentsSum')
            ->whereYear('created_at', '=', Carbon::now()->format('Y'))
            ->pluck('lastYearPaymentsSum');

            if ($this->lastYearPaymentsSum[0] == null) $this->lastYearPaymentsSum = 0; else $this->lastYearPaymentsSum = $this->lastYearPaymentsSum[0];

        // dd($this->lastMonthPaymentsSum);

        return view('livewire.admin.admin-dashboard-list');
    }
}
