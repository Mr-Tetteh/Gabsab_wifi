<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    protected $fillable = [
        'model',
        'mac_address',
        'serial_number',
        'antenna_number',
        'status',
    ];
}
