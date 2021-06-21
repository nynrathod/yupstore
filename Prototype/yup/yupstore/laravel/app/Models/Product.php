<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;

    
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'tag',
        'category',
        'price',
        'onsale',
        'discount',
        'stock_status',
        'product_weight',
        'product_quantity',
        'description',
        'product_info',
        'return_info',
        'shipping_info',
        'seller_id',
    ];
}
