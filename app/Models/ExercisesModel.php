<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercisesModel extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    public function trainingPlans()
    {
        return $this->belongsToMany(TrainingPlansModel::class, 'training_plans-exercises', 'exercises_id', 'training_plans_id');
    }
}
