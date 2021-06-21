<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {

    public function fetchorders(Request $request) {
        return Order::where('seller_id', '=', Auth::user()->seller_id)->get();
    }

}
