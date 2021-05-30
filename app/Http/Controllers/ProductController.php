<?php

namespace App\Http\Controllers;

use App\Product;

use App\Log;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_stock(){
        $product =Product::first();
        $product->increment('stock', request()->stock);

        $log = Log::create([
            'product_id' =>$product->id,
            'stocks_added' =>request()->stock
        ]);
        return redirect()->back();
    }
    //update price
    public function update_stock(){
        $product =Product::first();
        $product->update(['price' =>request()->price]);

        $log = Log::create([
            'product_id' =>$product->id,
        ]);
        return redirect()->back();
    }
}
