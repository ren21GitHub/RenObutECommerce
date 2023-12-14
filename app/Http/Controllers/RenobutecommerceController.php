<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RenobutecommerceController extends Controller
{
    public function index()
    {   
        if(View::exists('renObutECommerce.index')){
            return view('renObutECommerce.index');
        }else{
            return view('users.notFound');
        }
    }
}
