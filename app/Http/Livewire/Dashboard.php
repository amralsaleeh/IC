<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $weightReports;
    public $fatReports;
    public $waistReports;
    public $hipReports;

    public $weightGoal;
    public $fatGoal;
    public $goals;

    protected $subscriptionLast;
    public $isActive = 0;
    public $expirationDate;
    public $expirationPercentage;

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount()
    {
        $this->weightReports = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('weight')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->pluck('weight')
            ->take(4);

        $this->fatReports = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('fat')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->pluck('fat')
            ->take(4);

        $this->waistReports = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('waist')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->pluck('waist')
            ->take(4);

        $this->hipReports = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('hip')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->pluck('hip')
            ->take(4);

        $this->weightGoal = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('weight_goal , weight')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->first();

        $this->fatGoal = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->selectRaw('fat_goal , fat')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->first();

        $this->weightGoal = $this->getPercent($this->weightGoal->weight_goal, $this->weightGoal->weight);
        $this->fatGoal = $this->getPercent($this->fatGoal->fat_goal, $this->fatGoal->fat);

        $this->goal = [$this->weightGoal , $this->fatGoal];

        $this->subscriptionLast = DB::table('subscriptions')
            ->join('bundles', 'bundles.id', '=', 'subscriptions.bundles_id')
            ->where('users_id','=', 1)
            ->orderBy('expiration_date', 'desc')
            ->first();

        if($this->subscriptionLast->expiration_date > Carbon::now()->toDateTimeString())
        {
            $this->isActive = 1;
        }

        $this->expirationDate = [$this->subscriptionLast->expiration_date];
        $this->expirationPercentage = [round(100 - Carbon::parse($this->subscriptionLast->expiration_date)->diff(Carbon::now()->toDateTimeString())->days * 100 / $this->subscriptionLast->duration, 0)];

        $this->expirationDate = date('Y/m/d', strtotime($this->expirationDate[0]));
    }

    public function getPercent($goal , $current)
    {
        if ($goal < $current){
            return round($goal / $current * 100, 0);
        }
        else{
            return round($current / $goal * 100, 0);
        }
    }
}
