<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'size', 'price', 'stock', 'img', 'description', 'created_at', 'updated_at'];

    public function categories() 
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public static function getLatestProducts()
    {
        $products = Product::orderBy('created_at', 'decs')
                            ->select('id', 'img', 'price', 'name')
                            ->take(8)
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
        $products = Product::where('name', 'LIKE', "%$key%")
                            ->select('id', 'img', 'price', 'name')
                            ->paginate(8);
        return $products;
    }

    public static function getAllProducts($number)
    {
        $products = Product::select('id', 'img', 'price', 'name')
                            ->paginate($number);
        return $products;
    }

    public static function detail($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
