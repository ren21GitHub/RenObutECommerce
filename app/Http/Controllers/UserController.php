<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('users.login');
    }
    public function register()
    {
        return view('users.register');
    }
    public function forgetPass()
    {
        return view('users.forgetPassword');
    }
    public function sample()
    {
        return view('users.sample');
    }
}
