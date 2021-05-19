<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_status',
        'order_number',
        'order_qty',
        'ice_type',
        'product_id',
        'customer_id',
        'down_payment'
    ];


    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
