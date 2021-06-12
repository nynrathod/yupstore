<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Device;

class dummyAPI extends Controller
{
    function getData($id=null) {
        // return ["name"=>"Aj","Email"=>"Aj@mail.com"];
        // return Device::all();
        return $id?Device::find($id):Device::all();
    }

}
