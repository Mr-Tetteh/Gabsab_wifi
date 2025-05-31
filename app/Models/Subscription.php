<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'unique_id',
        'serial_number',
        'amount',
        'contact',
        'status',
        'subscription_date',
        'expiry_date',
    ];


}
