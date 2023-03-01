<?php

namespace App\Models;

use App\Models\FoodsModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DietsPlansModel extends Model
{
    use HasFactory;

    protected $table = 'diets_plans';

    public function foods()
    {
        return $this->belongsToMany(FoodsModel::class, 'diets_plans-foods', 'diets_plans_id', 'foods_id')->withPivot(['meal', 'quantity']);
    }
}
