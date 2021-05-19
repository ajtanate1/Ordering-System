<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_stock(){
        $product =Product::first();
        $product->increment('stock', request()->stock);
        return redirect()->back();
    }
    public function update_stock(){
        $product =Product::first();
        $product->update(['price' =>request()->price]);
        return redirect()->back();
    }
}
