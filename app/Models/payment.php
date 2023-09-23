<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'payment_number',
        'account_holder_name',
        'account_number',
        'branch_name',  
    ];
}
