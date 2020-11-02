<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        if(Auth::check()) 
        {
            $user = Auth::user();
            return view('frontEnd.cart.checkout', compact('user'));
        }
        else
        {
            return Redirect::back();
        }
    }

    public function confirm()
    {
        return view('frontEnd.cart.confirm');
    }
}
