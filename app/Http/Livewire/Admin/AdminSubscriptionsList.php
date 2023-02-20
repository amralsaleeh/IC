<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\CouponModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminSubscriptionsList extends Component
{
    public $couponInfo=[];

    public $subscriptions=[];
    public $payments=[];
    public $monthlyStatics = 1;

    public $bestCountries;
    public $bestBuyers;

    // Render
    public function render()
    {
        return view('livewire.admin.admin-subscriptions-list');
    }

    // Monthly statics
    // public function showMonthlyStatics()
    // {
    //     $this->monthlyStatics = 1;

    //     $this->payments = DB::table('subscriptions')->groupBy('month(created_at)')
    //             ->selectRaw('sum(payment) as sum, month(created_at)')
    //             ->pluck('sum','month(created_at)');

    //     $this->subscriptions = DB::table('subscriptions')->groupBy('month(created_at)')
    //             ->selectRaw('count(*) as count, month(created_at)')
    //             ->pluck('count','month(created_at)');
    // }

    // Yearly statics
    // public function showYearlyStatics()
    // {
    //     $this->monthlyStatics = 0;

    //     $this->payments = DB::table('subscriptions')->groupBy('year(created_at)')
    //             ->selectRaw('sum(payment) as sum, year(created_at)')
    //             ->pluck('sum','year(created_at)');

    //     $this->subscriptions = DB::table('subscriptions')->groupBy('year(created_at)')
    //             ->selectRaw('count(*) as count, year(created_at)')
    //             ->pluck('count','year(created_at)');
    // }

    // Charts data
    public function mount()
    {
        if($this->monthlyStatics == 1){
            $this->payments = DB::table('subscriptions')->whereYear('created_at', Carbon::now()->format('Y'))->groupBy('month(created_at)')
                ->selectRaw('sum(payment) as sum, month(created_at)')
                ->pluck('sum','month(created_at)');

            $this->subscriptions = DB::table('subscriptions')->whereYear('created_at', Carbon::now()->format('Y'))->groupBy('month(created_at)')
                ->selectRaw('count(*) as count, month(created_at)')
                ->pluck('count','month(created_at)');
        }
        // else{
        //     $this->payments = DB::table('subscriptions')->groupBy('year(created_at)')
        //         ->selectRaw('sum(payment) as sum, year(created_at)')
        //         ->pluck('sum','year(created_at)');

        //     $this->subscriptions = DB::table('subscriptions')->groupBy('year(created_at)')
        //         ->selectRaw('count(*) as count, year(created_at)')
        //         ->pluck('count','year(created_at)');
        // }

        $this->bestCountries = DB::table('users')
            ->join('countries', 'countries.id', '=', 'users.residence_country')
            ->selectRaw('count(residence_country) as residence_country_count , countries.id')
            ->groupBy('countries.id')
            ->orderBy('residence_country_count' , 'desc')
            ->pluck('residence_country_count','countries.id')
            ->take(3);

        $this->bestBuyers = DB::table('subscriptions')
            ->join('users', 'users.id', '=', 'subscriptions.users_id')
            ->selectRaw('users_id, full_name, gender, residence_country, count(*) as subscriptionsCount, sum(payment) as paymentSum')
            ->groupBy('users_id')
            ->orderBy('paymentSum' , 'desc')
            ->take(5)
            ->get();

        // dd($this->bestCountries);
    }

    // Get country name (ar)
    public function getCountryNameAr( $iso2 )
    {
        return DB::table('countries')->where('id', '=', $iso2)->first()->name_ar;
    }

    // Get country iso (2)
    public function getCountryISO2( $iso2 )
    {
        return DB::table('countries')->where('id', '=', $iso2)->first()->iso2;
    }

    // Show New Coupon Modal
    public function showNewCouponModal()
    {
        $this->couponInfo = [];
        $this->dispatchBrowserEvent('show_new_coupon_modal');
    }

    // Add New Coupon
    public function addNewCoupon()
    {
        $validatedData =  Validator::make($this->couponInfo, [
            'name' => 'required',
            'discount' => 'required',
            'expiration_date' => 'required',
        ])-> validate();

        CouponModel::create($validatedData);

        $this->dispatchBrowserEvent('hide_new_coupon_modal', ['message' => 'تم إضافة الكوبون بنجاح']);
    }
}
