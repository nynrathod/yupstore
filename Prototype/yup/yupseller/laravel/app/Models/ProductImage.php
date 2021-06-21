<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class ProductImage extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = true;

    protected $fillable = [
    	'image',
    	'type',
        'product_sku',
        'seller_id',
        'name',
    ];


}
