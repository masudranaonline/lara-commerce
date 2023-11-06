<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderProductMapping;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tax_parcent',
        'tax_total',
        'discount',
        'total_amount',
        'status',
        'order_date',
        'delivery_date',
        'payment_method',

        'customer_name',
        'mobile_no',
        'email',
        'country',
        'division',
        'district',
        'upazilla',
        'union',
        'address',
    ];

    public function orderProducts(){
        return $this->hasMany(orderProductMapping::class, 'order_id', 'id');
    }
}
