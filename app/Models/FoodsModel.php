<?php

namespace App\Models;

use App\Models\DietsPlansModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodsModel extends Model
{
    use HasFactory;

    protected $table = 'foods';

    public function dietsPlans()
    {
        return $this->belongsToMany(DietsPlansModel::class, 'diets_plans-foods', 'foods_id', 'diets_plans_id')->withPivot(['meal', 'quantity']);
    }
}
