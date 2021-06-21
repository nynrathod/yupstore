<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    public function login(Request $request)
    {
       

       $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

   //           $user = Auth::user();
   //            $token = $user->createToken('my-app-token')->plainTextToken;
            

   //          $response = [
   //      'user' => $user,
   //      'token' => $token
   //  ];

   // return response($response, 201);

            $user = User::where(["email" => 'zaso@mailinator.com'])->first();

            Auth::login($user, $remember = true);

            return response()->json(Auth::user(), 200);
    
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
            'password' => ['The provided credentials are incorrect.']
        ]);
    }
    public function test() {
        return response('asd');
    }

    public function logout()
    {
        // $user = $this->user();
        // $this->refreshRememberToken($user);
        Auth::logout();
    }
}