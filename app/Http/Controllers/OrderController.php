<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class OrderController extends Controller
{
   

    public function cancel_remove($id){
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->back();

    }

    public function approve($id){
        $order = Order::findOrFail($id);
        $order->update(['order_status'=>'approved','down_payment' =>request()->down_payment]);
        return redirect()->back();

    }

    public function claim($id){
        $order = Order::findOrFail($id);
        $order->update(['order_status'=>'paid']);
        return redirect()->back();

    }
}
