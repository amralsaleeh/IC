<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\TrainingPlansModel;
use Illuminate\Support\Facades\Auth;

class Exercise extends Component
{
    public $trainingPlanDetails = [[],[],[],[],[],[]];

    // public $trainingPlanDetails = [
    //     'الأول' => [],
    //     'الثاني' => [],
    //     'الثالث' => [],
    //     'الرابع' => [],
    //     'الخامس' => [],
    //     'السادس' => []
    // ];

    public function render()
    {
        $trainingPlan = TrainingPlansModel::with('exercises')->find(Auth::user()->training_plans_id);

        foreach($trainingPlan->exercises as $exercise)
        {
            array_push($this->trainingPlanDetails[$exercise->pivot->day], [
                // 'day' => $exercise->pivot->day,
                'name' => $exercise->name,
                'image' => $exercise->image,
                'link' => $exercise->link,
                'sets' => $exercise->pivot->sets,
                'reps' => $exercise->pivot->reps,
                'tempo' => $exercise->pivot->tempo,
                'is_series' => $exercise->pivot->is_series,
             ]);
        }

        // foreach($this->trainingPlanDetails as $day)
        // {   
        //     foreach ($day as $exercise)
        //     {
        //         dd($exercise);
        //     }
        // }

        // $this->trainingPlanDetails = array_filter($this->trainingPlanDetails);
        // dd($this->trainingPlanDetails);

        return view('livewire.exercise');
    }
}
