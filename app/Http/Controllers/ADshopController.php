<?php

namespace App\Http\Controllers;

use App\Models\ShopUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if ($request->post('user_pass')!==$request->post('conform_pass')) {
            return redirect('/user/signup')->withErrors('Password not match!');
        }
        $users=new ShopUser();
        $users->user_name=$request->post('user_name');
        $users->user_pass=$request->post('user_pass');
        $users->user_email=$request->post('user_email');
        $email=$request->post('user_email');

        $email_valiation=$users
            ->where('user_email', '=', $email)
            ->count();

        if ($email_valiation>0) {
            return redirect('/user/signup')->withErrors('email Already Exist!');
        }else{
           
            $users->save();
            return redirect('/');
        }
    }
    
    public function admin()
    {
        return view('admin');
    }
    public function adminPage()
    {
        
    }
}