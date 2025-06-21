<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_issue extends Model
{
    protected $fillable = ['customer_issue', 'engineer_report', 'engineer_solution', 'engineer_first_name', 'engineer_details'];
}
