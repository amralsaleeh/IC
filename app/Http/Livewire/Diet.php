<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DietsPlansModel;
use Illuminate\Support\Facades\Auth;

class Diet extends Component
{
    public $dietPlanDetails = [[],[],[],[],[],[]];

    public function render()
    {
        $dietPlan = DietsPlansModel::with('foods')->find(Auth::user()->diets_plans_id);

        foreach($dietPlan->foods as $food)
        {
            array_push($this->dietPlanDetails[$food->pivot->meal], [
                'name' => $food->name,
                'calories' => $food->calories,
                'quantity' => $food->pivot->quantity
             ]);
        }

        // dd($this->dietPlanDetails);

        return view('livewire.diet');
    }
}
