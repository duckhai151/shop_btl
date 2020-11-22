<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        session_start();
        if(Auth::check()) 
        {
            $user = Auth::user();
            $cartItem = $_SESSION['cart'][$user->id];
            $totalMoney = $request->total_money;
            return view('frontEnd.cart.checkout', compact('user', 'cartItem', 'totalMoney'));
        }
        else
        {
            return Redirect::back();
        }
    }

    public function confirm(Request $request)
    {
        // dd($request->all());
        $user['name'] = $request->name;
        $user['phone'] = $request->phone;
        $user['address'] = $request->address;
        $user['email'] = $request->email;

        $items = array();
        foreach($request->item as $item)
        {
            array_push($items, [
                'name' => $item['name'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price'],
            ]);
        }

        $totalMoney = $request->total_money;
        // foreach()
        dd($items);
        // $order = $user;
        // $order = array_push($order, $items);
        // Order::insert([
        //     'name' => $user['name'],
        //     'phone' => $user['phone'],
        //     'address' => $user['address'],
        //     'email' => $user['email']
        // ]);
        return view('frontEnd.cart.confirm', compact('user', 'items', 'totalMoney'));
    }
}
