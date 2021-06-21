<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'id','webid','url', 'seller', 'status'
    ];

}
