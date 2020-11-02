<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index(Request $request)
    {
        session_start();
        if(Auth::check())
        {
            $id = $request->user()->id;
        }
        else
        {
            return redirect('/login');
        }
        if(isset($_SESSION['cart'][$id]))
        {
            $cartItem = $_SESSION['cart'][$id];
            $totalMoney = 0;
            foreach($cartItem as $item)
            {
                $totalMoney += $item['total_price'];
            }
            return view('frontEnd.cart.index', compact('cartItem', 'totalMoney'));
        }
        else 
        {
            $_SESSION['cart'][$id] = array();
            $cartItem = $_SESSION['cart'][$id];
            $totalMoney = 0;
            return redirect('/');
        }
        
    }

    public function postCart(Request $request)
    {
        session_start();
        if(Auth::check())
        {
            $id = $request->user()->id;      
        }
        else 
        {
            return redirect('/login');
        }
        $totalMoney = $request->quantity*$request->price;
        if(empty($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id] = array([
                'product_id' => $request->product_id,
                'image' => $request->image,
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'total_price' => $totalMoney
            ]);
        }
        else
        {
            foreach($_SESSION['cart'][$id] as $key => $cart)
            {
                $number = 0;
                if($cart['product_id'] == $request->product_id)
                {
                    $number++;
                    $_SESSION['cart'][$id][$key]['quantity'] += $request->quantity;
                    $_SESSION['cart'][$id][$key]['total_price'] += $totalMoney;
                }
            }
            if($number == 0)
            {
                array_push($_SESSION['cart'][$id], [
                    'product_id' => $request->product_id,
                    'image' => $request->image,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'price' => $request->price,
                    'total_price' => $totalMoney
                ]);
            }
        }
        return Redirect::back()->with('success', 'Thêm thành công vào giỏ hàng');
    }
}
