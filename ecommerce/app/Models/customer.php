<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'mobile_no',
        'email',
        'password',
        'image',
        'mailing_country',
        'mailing_division',
        'mailing_district',
        'mailing_sub_district',
        'mailing_village',
        'mailing_roadno',
        'mailing_houseno',
        'mailing_zip',

        'present_country',
        'present_division',
        'present_district',
        'present_sub_district',
        'present_village',
        'present_roadno',
        'present_houseno',
        'present_zip',
    ];
}
