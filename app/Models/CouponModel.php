<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discount',
        'expiration_date'
    ];

    protected $casts = [
        'expiration_date' => 'date'
    ];
}
