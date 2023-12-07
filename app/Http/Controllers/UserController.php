<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function register()
    {
        if(View::exists('users.register')){
            return view('users.register');
        }
        else{
            return view('users.notFound');
        }
    }
    public function store( Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        // $validated['email_verified_at'] = now();
        $validated['password'] = bcrypt($validated['password']);
        // $validated['remember_token'] = Str::random(10);
        User::create($validated);
        return redirect('/login');
    }


    public function forgetPass()
    {
        return view('users.forgetPassword');
    }
    public function sample()
    {
        return view('users.sample');
    }
    public function not_found_page()
    {
        return view('users.notFound');
    }
    public function dashboard()
    {
        return view('users.dashboard');
    }
    public function home()
    {
        return view('users.home');
    }
}
