<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'RestoController@index');

Route::get('/list', 'RestoController@list');

Route::post('/add', 'RestoController@add');

Route::view('/add', 'add');

Route::get('/delete{id}', 'RestoController@delete');

Route::get('/edit{id}', 'RestoController@edit');

Route::post('edit', 'RestoController@update');

Route::view('/register','register');

Route::post('/register','RestoController@register');

Route::view('/login','login');

Route::post('/login','RestoController@login');