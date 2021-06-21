<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SellerController extends Controller {

	public function registerseller(Request $request) {
		try {
		    // Seller::create([
		    // 	'seller_id' => substr($request->mdbname, 0, 5).Str::random(9),
		    //     'seller_bname' => $request->mdbname,
		    //     'seller_email' => $request->mdemail,
		    //     'seller_pass' => Hash::make($request->mdpass),
		    //     'seller_website' => $request->mddomain
		    // ]);
		    $seller = new Seller;
			$data = $request->input();
			$seller->seller_id = str_replace(' ', '', substr($request->mdbname, 0, 5)).Str::random(9);
            $seller->seller_bname = $data['mdbname'];
            $seller->seller_email = $data['email'];
			$seller->seller_pass = Hash::make($data['password']);
			$seller->seller_website = $data['mddomain'];
			$seller->save();


			$user = new User;
			$data = $request->input();
            $user->user_id = $seller->seller_id;
            $user->username = $data['mdbname'];
            $user->email = $data['email'];
			$user->password = Hash::make($data['password']);
			$user->save();

		    return response()->json([
			    'success' => 'Data Submited',
			]);
		}
	    catch(Exception $e){
			return response($e->getMessage());
		}                                                                                                                                 
	}
	public function checkdomain(Request $request) {
		if (Seller::where('seller_website', '=', $request->input('mddomain'))->count() > 0) {
			// return response('Domain Not Available');
			return response()->json([
			    'status' => false,
			]);
		} else {
			return response()->json([
			    'status' => true,
			]);
		}
	}

	public function checkemail(Request $request) {
		if (Seller::where('seller_email', '=', $request->input('email'))->count() > 0) {
			return response()->json([
			    'status' => false,
			]);
		} else { 
			return response()->json([
			    'status' => true,
			]);
		}
	}

	public function login(Request $request) {

		return('sc');
		
		 // if(auth()->attempt(array('seller_email' => $request->mdemail, 'seller_pass' => $request->mdpass)))
   //      {
        
   //          // return response()->json(Auth::user(), 200);
   //      }
        // throw ValidationException::withMessages([
        //     'seller_email' => ['The provided credentials are incorrect.']
        // ]);
    }

    public function logout() {
        Auth::logout();
    }
}
