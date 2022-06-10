<?php

namespace App\Models;

use App\Casts\compare_Rial_To_Toman;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'category_id',
        'product_price',
        'product_exsists',
        'product_sell',
        'product_show',

    ];
    protected $casts=[
        'product_price'=> compare_Rial_To_Toman::class
    ];
    public function scopeShowProduct($query)
    {

        return $query->where("product_show", '>', 500);
    }
    public function scopePopularProduct($query)
    {

        return $query->where("product_sell", '>', 25);
    }
    public function scopeSpecialProduct($query, $special)
    {

        return $query->where("product_name", 'like', "%$special%");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    // protected function product_price(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => $value*10,
    //         set: fn ($value) => $value/10,
    //     );
    // }

    protected $visible = ['id', 'product_name', 'product_price'];
}
