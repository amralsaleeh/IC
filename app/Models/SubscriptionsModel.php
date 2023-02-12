<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionsModel extends Model
{
    use HasFactory;

    protected $table = 'Subscriptions';

    protected $fillable = [
        'id',
        'user_id',
        'bundles_id',
        'coupons_id',
        'payment',
        'expiration_date',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [

    ];
}
