<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public $urlPrevious;

    public function __construct()
    {
    }

    public function login() 
    {
        // $this->urlPrevious = $_SERVER['HTTP_REFERER'];

        return view('frontEnd.account.login');
    }

    public function postLogin(Request $request) 
    {
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // return redirect()->to($GLOBALS['urlPrevious']);
            return redirect('/');
        }
    }

    public function postRegister(Request $request) 
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $account = $request->all();
        $account['password'] = Hash::make($request->password);
        User::create($account);
        return redirect('login')->with('success', 'Đăng kí thành công !');
    }

    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect('/');
        }
    }
}
