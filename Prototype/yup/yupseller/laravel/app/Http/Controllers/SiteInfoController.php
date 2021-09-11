<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SiteInfoController extends Controller {
    public function totalorders(Request $request) {
        // return response(Auth::user()->seller_id);
        return response(Product::where('seller_id', '=', Auth::user()->seller_id)->count());

    }

    public function sitestatus(Request $request) {
        return response(SiteInfo::select('status')->where('seller', '=', Auth::user()->seller_id)->first());
    }

    public function sitetoggle(Request $request) {
        // return response(SiteInfo::update('status')->where('seller', '=', Auth::user()->seller_id));
        return response(SiteInfo::where('seller', Auth::user()->seller_id)
          ->update(['status' => $request->visibility]));
        // print_r($request);
    }

}
