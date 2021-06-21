<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});


// Route::post('/register', [RegisterController::class, 'register']);
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/test', [FileController::class, 'test']);

// Auth
Route::post('/checkdomain', [SellerController::class, 'checkdomain']);
Route::post('/checkemail', [SellerController::class, 'checkemail']);
Route::post('/registerseller', [SellerController::class, 'registerseller']);


Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


// Product
Route::post('/addproduct', [ProductController::class, 'addproduct']);
Route::post('/fetchproduct', [ProductController::class, 'fetchproduct']);
Route::post('/fetchproductinfo', [ProductController::class, 'fetchproductinfo']);
Route::post('/updateproduct', [ProductController::class, 'updateproduct']);
Route::post('/deleteproduct', [ProductController::class, 'deleteproduct']);

Route::post('/savenameitem', [ProductController::class, 'savenameitem']);
Route::post('/savecategoryitem', [ProductController::class, 'savecategoryitem']);
Route::post('/savepriceitem', [ProductController::class, 'savepriceitem']);
Route::post('/saveweightitem', [ProductController::class, 'saveweightitem']);
Route::post('/savestockitem', [ProductController::class, 'savestockitem']);

Route::post('/uploadsingle', [FileController::class, 'uploadsingle']);
Route::post('/uploadmultiple', [FileController::class, 'uploadmultiple']);

Route::post('/singlepicker', [FileController::class, 'singlepicker']);
Route::post('/multiplepicker', [FileController::class, 'multiplepicker']);
Route::post('/galleryorder', [FileController::class, 'galleryorder']);
Route::post('/deleteimage', [FileController::class, 'deleteimage']);



Route::post('/fetchorders', [OrderController::class, 'fetchorders']);


Route::get('/totalorders', [SiteInfoController::class, 'totalorders']);
Route::get('/sitestatus', [SiteInfoController::class, 'sitestatus']);
Route::post('/sitetoggle', [SiteInfoController::class, 'sitetoggle']);