<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\TrainingPlansModel;
use Illuminate\Support\Facades\Auth;

class Exercise extends Component
{
    public $trainingPlanDetails;

    public function render()
    {
        $this->trainingPlanDetails = TrainingPlansModel::with('exercises')->find(Auth::user()->training_plans_id);

        dd($this->trainingPlanDetails->getRelations());

        return view('livewire.exercise');
    }
}
