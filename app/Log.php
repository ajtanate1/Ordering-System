<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Log extends Model
{
    protected $fillable = [
        'product_id',
        'stocks_added'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}
