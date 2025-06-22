<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer_issue extends Model
{
    protected $fillable = ['customer_issue', 'engineer_report', 'engineer_solution', 'engineer_first_name', 'user_id'];


    public function fix()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
