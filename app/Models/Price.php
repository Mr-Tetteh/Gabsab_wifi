<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['name', 'price', 'quantity', 'price_belongs_to','adv_1', 'adv_2', 'adv_3', 'adv_4', 'adv_5'];
}
