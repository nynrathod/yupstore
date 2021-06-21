<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    
    protected $fillable = [
        'order_no',
        'order_status',
        'order_date',
        'customer_id',
        'customer_f_name',
        'customer_l_name',
        'customer_email',
        'customer_mobile',
        'product_sku',
        'product_name',
        'product_slug',
        'product_category',
        'product_weight',
        'product_quantity',
        'unit_price',
        'unit_sale_price',
        'coupon_discount',
        'order_quantity',
        'payment_status',
        'payment_info',
        'shipping_address',
        'seller_id',
    ];
}
