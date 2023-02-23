<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingPlansModel extends Model
{
    use HasFactory;

    protected $table = 'training_plans';

    public function exercises()
    {
        return $this->belongsToMany(ExercisesModel::class, 'training_plans-exercises', 'training_plans_id', 'exercises_id')->withPivot(['day', 'sets', 'reps', 'tempo', 'is_series']);
    }
}
