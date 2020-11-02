<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories() 
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public static function getLatestProducts($number)
    {
        $products = Product::orderBy('created_at', 'decs')
                            ->take($number)
                            ->get();
        return $products;
    }

    public static function getProductsByCategory($categoryId, $number)
    {
        $products = Category::find($categoryId)
                            ->products()
                            ->paginate($number);
        return $products;
    }

    public static function getProductsByKey($key)
    {
        $products = Product::where('name', 'LIKE', "%$key%")->paginate(8);
        return $products;
    }

    public static function getAllProducts($number)
    {
        $products = Product::paginate($number);
        return $products;
    }

    public static function detail($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
