<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Router extends Model
{
    protected $fillable = [
        'model',
        'mac_address',
        'serial_number',
        'antenna_number',
        'status',
        'unique_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'unique_id', 'unique_id');
    }
}
