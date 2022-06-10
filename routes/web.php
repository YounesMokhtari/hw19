<?php

use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
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

Route::resource('users', UserController::class);

Route::get('/category', function () {
  $res = Category::mainCategories()->get();

  $res = $res->toArray();

  return $res;
});

Route::get('/show-category', function () {
  $result = Category::with('products')->where("category_name", "موبایل")->get();
  dd($result);
});

Route::get('/show-orders', function () {
  $result = Category::with('orders')->where("category_name", "موبایل")->get();
  dd($result);
});

Route::get('/product-orders', function () {
  $result = Order::with('products')->where("product_id", 3)->get();
  dd($result);
});

Route::get('/order-category', function () {
  $result = Order::find(2)->product->category->category_Name;
  dd($result);
});


Route::get('/product-category', function () {
  $result = Product::find(2)->category->category_Name;
  dd($result);
});

Route::get('/order-product', function () {
  $result = Order::find(6)->product->product_name;
  dd($result);
});
