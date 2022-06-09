<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Order::create([
            'user_id'=>2,
            'product_id'=>4,
            'order_qty'=>3,
            'total_price'=>9000
        ]);
        Order::create([
            'user_id'=>1,
            'product_id'=>3,
            'order_qty'=>9,
            'total_price'=>13500
        ]);
        Order::create([
            'user_id'=>2,
            'product_id'=>1,
            'order_qty'=>2,
            'total_price'=>2000
        ]);
        Order::create([
            'user_id'=>1,
            'product_id'=>2,
            'order_qty'=>10,
            'total_price'=>20000
        ]);
        Order::create([
            'user_id'=>2,
            'product_id'=>3,
            'order_qty'=>1,
            'total_price'=>1500
        ]);
        Order::create([
            'user_id'=>2,
            'product_id'=>1,
            'order_qty'=>3,
            'total_price'=>3000
        ]);
    }
}
