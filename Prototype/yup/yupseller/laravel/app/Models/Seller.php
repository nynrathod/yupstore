<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';

	public $timestamps = true;
	
	protected $fillable = [
		'seller_id','seller_bname','seller_email', 'seller_pass', 'seller_website', 'user_id','email','password'
	];
}
