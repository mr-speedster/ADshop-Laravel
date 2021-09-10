<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADshopController extends Controller
{
    public function shop()
    {
        return view('shop');
    }
    
    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function admin()
    {
        return view('admin');
    }
    public function adminPage()
    {
        
    }
}