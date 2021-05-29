<?php

use App\Order;
use App\Product;
use App\User;
use Carbon\Carbon;
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
    $users = User::role('customer')->get();
    $product = Product::first();
    return view('welcome',compact('users','product'));
});

Route::post('/customer/order',function(){
    DB::transaction(function () {
        $order = Order::create([
            'order_number' =>'order'. Str::uuid(),
            'order_qty' =>request()->order_qty,
            'ice_type' =>request()->ice_type,
            'product_id' =>1,
            'customer_id' =>request()->customer_id,
            'current_price' =>  request()->product
        ]);
     $product = Product::first();

        $product->decrement('stock',request()->order_qty);
    });

    return redirect()->back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registration','UserController@registration')->name('registration');

Route::get('/registration',function(){
    return view('register');
});

Route::get('/update/price','ProductController@update_stock');

Route::get('/add/stock','ProductController@add_stock');

Route::get('/edit/customer/{id}','UserController@edit_cus');


Route::put('/update/customer/{id}','UserController@update_cus');

Route::get('/manage/stocks',function(){
    $product = Product::first();
    return view('managestocks',compact('product'));
});
Route::get('/manage/user/info',function(){
    $users = User::role('customer')->get();
    return view('manageuserinfo',compact('users'));
});
Route::get('/view/reservation',function(){
    return view('viewreservation');
});
Route::get('/order',function(){
    $orders = Order::get();
    return view('approveorder',compact('orders'));
});
Route::get('/manage/report',function(){
    $orders = Order::where('order_status','paid')->get();
    return view('managereport',compact('orders'));
});

// customer

Route::get('/remove/order/{id}','OrderController@cancel_remove');
Route::get('/approve/order/{id}','OrderController@approve');
Route::get('/claim/order/{id}','OrderController@claim');




Route::get('/myorder',function(){
    $orders = Order::where('customer_id',auth()->user()->id)->get();
    return view('customer.myorder',compact('orders'));
});

Route::get('/monthly/report',function(){
    $month = Carbon::parse(request()->month);
    $orders = Order::whereMonth('updated_at',$month)
    ->where('order_status','paid')->get();
    return view('managereport',compact('orders'));
});

Route::get('/yearly/report',function(){
    $year = Carbon::parse(request()->year)->year;
    $orders = Order::whereYear('updated_at',$year)
    ->where('order_status','paid')->get();
    return view('managereport',compact('orders'));
});


Route::get('/login/user',function(){
    return view('loginuser');
});
Route::get('/reserve/iceblocks',function(){
    $product = Product::first();
    return view('reserveiceblocks',compact('product'));
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
