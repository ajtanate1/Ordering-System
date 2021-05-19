<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'product_name' =>'Ice Block',
                'price' =>210,
                'stock' =>30,
            ],

        ]);
    }
}
