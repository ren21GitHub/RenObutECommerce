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
        if(View::exists('users.login')){
            return view('users.login');
        }else{
            return view('users.notFound');
        }
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome');
        }
        return back()->withErrors(['email' => 'Login Unsuccessful!'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have successfully logout.');
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
        return redirect('/login')->with('message', 'Another user successfully created.');
    }


    public function forgetPass()
    {
        if(View::exists('users.forgetPassword')){
            return view('users.forgetPassword');
        }else{
            return view('users.notFound');
        }
    }

    public function sample()
    {
        if(View::exists('users.sample')){
            return view('users.sample');
        }else{
            return view('users.notFound');
        }
    }

    public function not_found_page()
    {
        if(View::exists('users.notFound')){
            return view('users.notFound');
        }else{
            return view('users.notFound');
        }
    }

    public function dashboard()
    {
        if(View::exists('users.dashboard')){
            return view('users.dashboard');
        }else{
            return view('users.notFound');
        }
    }

    /* public function home()
    {
        if(View::exists('users.home')){
            return view('users.home');
        }else{
            return view('users.notFound');
        }
    } */
}
