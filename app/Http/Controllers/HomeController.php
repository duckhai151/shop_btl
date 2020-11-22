<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = Product::getLatestProducts();
        $allProducts = Product::getAllProducts(2);
        return view('frontEnd.home', compact('latestProducts', 'allProducts'));
    }

    public function contact()
    {
        return view('frontEnd.contact');
    }
}
