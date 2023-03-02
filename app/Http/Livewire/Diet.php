<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\DietsPlansModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Diet extends Component
{
    public $dietMealDetails = [[],[],[],[],[],[]];
    public $dietCalories;
    public $dailyCalories;

    public function render()
    {
        $dietPlan = DietsPlansModel::with('foods')->find(Auth::user()->diets_plans_id);

        foreach($dietPlan->foods as $food)
        {
            array_push($this->dietMealDetails[$food->pivot->meal], [
                'name' => $food->name,
                'calories' => $food->calories,
                'quantity' => $food->pivot->quantity
             ]);
        }

        $this->dietCalories = DB::table('diets_plans')
            ->where('id','=', Auth::user()->diets_plans_id)
            ->value('calories');

        $userInfo = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.user_id')
            ->select('weight','height','birth_date','activity_level')
            ->where('user_id','=', Auth::user()->id)
            ->orderBy('reports.created_at' , 'desc')
            ->first();

        if(Auth::user()->gender == 1){
            $this->dailyCalories = round(((10 * $userInfo->weight) + (6.25 * $userInfo->height) - (5 * Carbon::parse($userInfo->birth_date)->age) + 5) * $userInfo->activity_level, 0);
        }
        else{
            $this->dailyCalories = round(((10 * $userInfo->weight) + (6.25 * $userInfo->height) - (5 * Carbon::parse($userInfo->birth_date)->age) - 161) * $userInfo->activity_level, 0);
        }
        
        // dd($this->dailyCalories);

        return view('livewire.diet');
    }
}
