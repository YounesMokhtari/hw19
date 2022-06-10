<?php

namespace App\Models;

use App\Models\Category;
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
}
