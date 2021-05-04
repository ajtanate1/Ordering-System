<?php

use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registration','UserController@registration')->name('registration');

Route::get('/registration',function(){
    return view('register');
});
Route::get('/manage/stocks',function(){
    return view('managestocks');
});
Route::get('/manage/user/info',function(){
    $users = User::role('customer')->get();
    return view('manageuserinfo',compact('users'));
});
Route::get('/view/reservation',function(){
    return view('viewreservation');
});
Route::get('/approve/order',function(){
    return view('approveorder');
});
Route::get('/manage/report',function(){
    return view('managereport');
});



// customer


Route::get('/login/user',function(){
    return view('loginuser');
});
Route::get('/reserve/iceblocks',function(){
    return view('reserveiceblocks');
});
Route::get('/order/iceblocks',function(){
    return view('ordericeblocks');
});


// staff


Route::get('/add/stocks',function(){
    return view('addstocks');
});
Route::get('/view/reservation',function(){
    return view('viewreservation');
});
Route::get('/confirm/payment',function(){
    return view('confirmpayment');
});
Route::get('/view/report',function(){
    return view('viewreport');
});

//deleteAll

Route::get('/view/delete',function(){
    return view('deleteall');
});
