<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::create([
            'product_name' => 'موبایل سامسونگ',
            'category_id' => 2,
            'product_price' => 1000,
            'product_exsists' => 50,
            'product_sell' => 27,
            'product_show' => 512
        ]);
        Product::create([
            'product_name' => 'موبایل ال جی',
            'category_id' => 2,
            'product_price' => 2000,
            'product_exsists' => 60,
            'product_sell' => 37,
            'product_show' => 112
        ]);
        Product::create([
            'product_name' => 'لپتاب سامسونگ',
            'category_id' => 5,
            'product_price' => 1500,
            'product_exsists' => 27,
            'product_sell' => 10,
            'product_show' => 212
        ]);
        Product::create([
            'product_name' => 'کفش نایک',
            'category_id' => 4,
            'product_price' => 3000,
            'product_exsists' => 40,
            'product_sell' => 30,
            'product_show' => 150
        ]);
    }
}
