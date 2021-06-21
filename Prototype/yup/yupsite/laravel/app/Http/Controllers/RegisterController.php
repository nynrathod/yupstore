<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            // 'password' => ['required', 'min:8', 'confirmed']
        ]);

        // return redirect($request->name);
        // Log::info('Something happened!');
        // return 'hello';
        //         echo "<script>";
        // echo "console.log('hello')";
        // echo "</script>";

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response('Hello World');
    }
}
