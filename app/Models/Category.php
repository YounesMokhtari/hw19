<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_name',
        'category_parent',
        'status',
    ];


    public function scopeMainCategories($query)
    {

        return $query->where("category_parent", null);
    }
    public function scopeShowCategories($query)
    {

        return $query->where("status", 'show');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Product::class);
    }


    protected $hidden = ['timestamps'];
}
