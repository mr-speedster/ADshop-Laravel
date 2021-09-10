<?php

namespace App\Http\Controllers;

use App\Models\ShopUser;
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

    public function userData(Request $request)
    {
        //dd($request);

        $validate=$request->validate([
            'user_name'=>'min:2 | max:100',
            'user_pass'=>'min:8 | max:100',
        ]);

        //dd($validate);
        if ($request->user_pass!==$request->conform_pass) {
            return redirect('route("shop")');
        }
        //$users=new ShopUser();
        //$users->user_name=$request->post('user_name');
        //$users->user_pass=$request->post('user_pass');
        //$users->user_email=$request->post('user_email');
        //$users->save();
        
        return redirect('route("shop")');
    }
    
    public function admin()
    {
        return view('admin');
    }
    public function adminPage()
    {
        
    }
}