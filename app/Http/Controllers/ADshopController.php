<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Product as ModelsProduct;
use App\Models\ShopAdmin;
use App\Models\ShopUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ADshopController extends Controller
{
    public function shop()
    {
        $elements=product::all();
        //dd($element);
        return view('shop',['elements'=>$elements]);
    }
    
    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function userSignup(Request $request)
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

        $email_validation=$users
            ->where('user_email', '=', $email)
            ->count();

        if ($email_validation>0) {
            return redirect('/user/signup')->withErrors('email Already Exist!');
        }else{
           
            $users->save();
            return redirect('/');
        }
    }
    public function userSignin(Request $request)
    {
        $user_data=$request->input();
        //dd($user_data);
        $request->session()->put('user_email',$user_data['email']);
        //dd(session('user_email'));
        
        $email_login=$request->post('email');
        $password=$request->post('pass');

        $login=new ShopUser();
        $user_validate=$login
        ->where('user_email','=',$email_login)
        ->where('user_pass','=',$password)
        ->count();

        if ($user_validate==1) {
            return redirect('/');
        }else{
            return redirect('/user/signin')->withErrors('email not exist ,please SignUp');
        }
    }
    
    public function admin()
    {
        return view('admin');
    }
    
    public function adminLogin(Request $request)
    {
        $admin_data=$request->input();
        //dd($admin_data);
        $request->session()->put('admin_email',$admin_data['admin_email']);

        $email_login=$request->post('admin_email');
        $password=$request->post('admin_pass');

        $admin_login=new ShopAdmin();
        $user_validate=$admin_login
        ->where('admin_email','=',$email_login)
        ->where('admin_pass','=',$password)
        ->count();

        if ($user_validate==1) {
            return redirect('/admin/adminpage');
        }else{
            return redirect('/admin')->withErrors('Acount does not Exist');
        }
    }

    public function adminPage()
    {
        return view('adminPage');
    }

    public function product(Request $request)
    {
        $element=new product();
        $element->product_name=$request->post('product_name');
        $element->price=$request->post('product_price');
        $element->key=$request->post('key');
        
        if ($request->hasFile('product_image')) {
            $file=$request->file('product_image');
            $extention=$file->getClientOriginalExtension();
            $file_name=time().'.'.$extention;
            $file->move('assets/images/',$file_name);
            $element->image=$file_name;
        }
       $element->save();

       return redirect('/admin/adminpage')->with('status','Successfully Added');
    }
    
    public function view()
    { 
        $elements=product::all();
        //dd($element);
        return view('adminView',['elements'=>$elements]);

    }
     public function cart()
     {
        //$user_data=ShopUser::all();
        //dd($user_data);
       // $request->session()->put('user_email',$user_data['email']);
        //dd(session('user_email'));
         return view('cart');
     }

     public function clickProduct($id)
     {
         $clickId=Product::findOrFail($id);
         //$name=$clickId->product_name;
         //$price=$clickId->price;//
         //$image=$clickId->image;
         return view('product',['clickId'=>$clickId]);
     }

     public function addToCart($cartId)
     {
        $clickId=Product::findOrFail($cartId);
        $user=session('user_email');
        $userId=ShopUser::findOrFil($user['i']);
        //dd(session('user_email'));
     }
    
}