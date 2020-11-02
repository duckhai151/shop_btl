<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $allProducts = Product::getAllProducts(4);
        return view('frontEnd.product.index', compact('allProducts'));
    }

    public function getProductsByCategory($categoryId)
    {
        $productsByCategory = Product::getProductsByCategory(2, 4);
        return view('frontEnd.category.product', compact('productsByCategory'));
    }

    public function getProductsByKey(Request $request)
    {
        $productsByKey = Product::getProductsByKey($request->key);
        return view('frontEnd.product.search', compact('productsByKey'));
    }

    public function detail($id)
    {
        $product = Product::detail($id);
        $latestProducts = Product::getLatestProducts(4);
        $comments = $product->comments;
        return view('frontEnd.product.detail', compact('product', 'latestProducts', 'comments'));
    }
}
