<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Statistics extends Component
{
    public $measurementsPercentage=[];
    public $weights=[];
    public $fats=[];

    public function render()
    {
        return view('livewire.statistics');
    }

    public function mount()
    {
        $this->weights = DB::table('reports')->whereYear('created_at', Carbon::now()->format('Y'))
            ->where('user_id', '=', Auth::user()->id)
            ->selectRaw('weight')
            ->pluck('weight')
            ->take(12);

        $this->fats = DB::table('reports')->whereYear('created_at', Carbon::now()->format('Y'))
            ->where('user_id', '=', Auth::user()->id)
            ->selectRaw('fat , Date(created_at)')
            ->pluck('fat', 'Date(created_at)')
            ->take(12);

        // $this->fats = DB::table('reports')->whereYear('created_at', Carbon::now()->format('Y'))
        //     ->where('user_id', '=', Auth::user()->id)
        //     ->select(DB::raw("fat, (DATE_FORMAT(created_at, '%e / %c')) as newDate"))
        //     ->pluck('fat', 'newDate');

        // Measurements
        $measurementsNow = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->select('wrist_size' , 'neck', 'shoulder', 'arm', 'waist', 'thigh', 'calf', 'hip', 'forearm', 'chest')
            ->where('user_id','=', Auth::user()->id)
            ->first();

        $chestGoal = $measurementsNow->wrist_size * 6.5;
        $measurementsGoal = ['neck' =>round($chestGoal * 0.37),
                             'shoulder' => round($measurementsNow->wrist_size * 7.2), 
                             'arm' => round($chestGoal * 0.36) , 
                             'waist' => round($chestGoal * 0.7),
                             'thigh' => round($chestGoal * 0.53),
                             'calf' => round($chestGoal * 0.34),
                             'hip' => round($chestGoal * 0.85),
                             'forearm' => round($chestGoal * 0.29),
                             'chest' => round($chestGoal)
                            ];

        dd($measurementsGoal);
    }
}
