<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer_controller ;
use App\Http\Controllers\Design_controller;
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
Route::get('/', function () {
   return view('index');
});
Route::view('registration','registration');
Route::view('aboutUs','aboutUs');
Route::view('contactUs','contactUs');
Route::post('register',[Customer_controller::class,'register']);
// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('login',function(){
   return view('login');
});
Route::get('/logout',function(){
   Session::forget('user');
   return redirect('login');
});
Route::post('userlogin',[Customer_controller::class,'index']);
Route::get('welcome',[Design_controller::class,'welcome']);
Route::get('homeDetail/{id}',[Design_controller::class,'homeDetail']);
Route::post('addingcart',[Design_controller::class,'addingcart']);
Route::get('find',[Design_controller::class,'find']);
Route::get('countingcart',[Design_controller::class,'countingcart']);
Route::get('seletedhome',[Design_controller::class,'seletedhome']);
Route::get('removinghome/{id}',[Design_controller::class,'removinghome']);
Route::get('bookinghome/{id}',[Design_controller::class,'bookinghome']);
Route::post('bookedhome',[Design_controller::class,'bookedhome']);







