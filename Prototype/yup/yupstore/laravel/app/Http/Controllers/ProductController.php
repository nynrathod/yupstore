<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

	public function addproduct(Request $request) {
		try {

			// $id = Auth::user();

		    Product::create([
		    	'sku' => $request->mdsku,
		    	'name' => $request->mdname,
		    	'slug' => Str::slug($request->mdname, '-'),
		    	'tag' => $request->mdtag,
		    	'category' => implode(",",$request->mdcategory),
		    	'price' => $request->mdprice,
		    	'onsale' => $request->mdsale,
		    	'discount' => $request->mddiscount,
		    	'stock_status' => $request->mdstock,
		    	'product_weight' => $request->mdweight,
		    	'product_quantity' => $request->mdquantity,
		    	'description' => $request->mddescription,
		    	'product_info' => $request->mdpinfo,
		    	'return_info' => $request->mdpreturn,
		    	'shipping_info' => $request->mdshipping,
		    	'seller_id' => $request->mduid,
		    ]);
		 //    $seller = new Seller;
			// $data = $request->input();
			// $seller->seller_id = str_replace(' ', '', substr($request->mdbname, 0, 5)).Str::random(9);
   //          $seller->seller_bname = $data['mdbname'];
   //          $seller->seller_email = $data['email'];
			// $seller->seller_pass = Hash::make($data['password']);
			// $seller->seller_website = $data['mddomain'];
			// $seller->save();


			// $user = new User;
			// $data = $request->input();
   //          $user->user_id = str_replace(' ', '', substr($data['mdbname'], 0, 5)).Str::random(9);
   //          $user->username = $data['mdbname'];
   //          $user->email = $data['email'];
			// $user->password = Hash::make($data['password']);
			// $user->save();

		    return response()->json([
			    'success' => 'Data Submited',
			]);
		}
	    catch(Exception $e){
			return response($e->getMessage());
		}          
	}

	public function fetchproduct(Request $request) {
		// return Product::all();
		// return response($request->userid);
		return Product::where('seller_id', '=', $request->userid)->get();
	}

	public function fetchproductinfo(Request $request) {
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sid)
	      ->get());
	}

	public function updateproduct(Request $request) {

		return response(Product::where('sku', $request->mdsku)
	      ->where('seller_id', $request->mduid)
	      ->update([
	      	'name' => $request->mdname,
	      	'slug' => Str::slug($request->mdname, '-'),
		 	'category' => implode(",",$request->mdcategory),
		 	'tag' => $request->mdtag,
		 	'price' => $request->mdprice,
		 	'onsale' => $request->mdsale,
		 	'discount' => $request->mddiscount,
		 	'stock_status' => $request->mdstock,
		 	'product_weight' => $request->mdweight,
		 	'product_quantity' => $request->mdquantity,
		 	'description' => $request->mddescription,
		 	'product_info' => $request->mdpinfo,
		 	'return_info' => $request->mdpreturn,
		 	'shipping_info' => $request->mdshipping]
	      ));
	}

	public function deleteproduct(Request $request) {
		return response(Product::where('sku', $request->sku)->delete());
	}


	public function savenameitem(Request $request) {
		// return Product::all();
		// return response();
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sellerid)
	      ->update(['name' => $request->newval]));
	}

	public function savecategoryitem(Request $request) {
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sellerid)
	      ->update(['category' => $request->newval]));
	}
	public function savepriceitem(Request $request) {
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sellerid)
	      ->update(['price' => $request->newval]));
	}
	public function saveweightitem(Request $request) {
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sellerid)
	      ->update(['product_weight' => $request->newval]));
	}
	public function savestockitem(Request $request) {
		return response(Product::where('sku', $request->sku)
	      ->where('seller_id', $request->sellerid)
	      ->update(['stock_status' => $request->newval]));
	}

	
	

}
