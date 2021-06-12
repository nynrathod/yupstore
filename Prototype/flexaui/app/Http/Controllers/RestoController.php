<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Users;
use Session;
use Crypt;

class RestoController extends Controller
{
    function index() {
    	return view('home');
    }

    function list() {
    	$data = Restaurant::all();
    	return view('list',["data"=>$data]);
    }

    function add(Request $req) {    	
    	// return $req->input();
    	$resto = new Restaurant;
    	$resto->name = $req->input('rname');
    	$resto->email = $req->input('email');
    	$resto->address = $req->input('address');
    	$resto->save();
    	$req->session()->flash('status',"Restaurant Successfully Added");
    	return redirect('list');
    }

    function delete($id) {
    	Restaurant::find($id)->delete();
    	Session::flash('status',"Restaurant Successfully Deleted");
    	return redirect('list');
    }

    function edit($id) {
    	$data = Restaurant::find($id);
    	return view('edit',['data'=>$data]);
    }

    function update(Request $req) {    	
    	// return $req->input();
    	$resto = Restaurant::find($req->input('id'));
    	$resto->name = $req->input('rname');
    	$resto->email = $req->input('email');
    	$resto->address = $req->input('address');
    	$resto->save();
    	$req->session()->flash('status',"Restaurant Successfully Updated");
    	return redirect('list');
    }

    function register(Request $req) {
        $users = new Users;
        $users->fname = $req->input('fname');
        $users->contact = $req->input('contact');
        $users->password = Crypt::encrypt($req->input('password'));
        $users->email = $req->input('email');
        $users->save();
        $req->session()->flash('user', $req->input('fname'));
        return redirect('/');
    }

    function login(Request $req) {
        $user = Users::where("email", $req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')) {
            $req->session()->put('user', $user[0]->fname);
            return redirect('/');
        }
    }
}
