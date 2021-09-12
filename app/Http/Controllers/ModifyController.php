<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ModifyController extends Controller
{
    public function updatePage($value)
    {
        $product=new Product();
        $current=$product->where('id',$value)->first();
        //dd($currents);
        return view('update',['current'=>$current]);
    }
   
    public function Update(Request $request, $id)
    {
        ($id);
        $product=new Product();
        $currentProduct=$product->where('id',$id)->first();
        $currentProduct->product_name=$request->post('product_name');
        //dd($currentProduct->product_name);
        $currentProduct->price=$request->post('product_price');
        $currentProduct->key=$request->post('key');

        if ($request->hasFile('product_image')) {
                $file=$request->file('product_image');
                $extention=$file->getClientOriginalExtension();
                $file_name=time().'.'.$extention;
                $file->move('assets/images/',$file_name);
                $currentProduct->image=$file_name;
            }

        $product->save();
        return redirect('/admin/view');
    }
}
