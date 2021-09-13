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
        $currentProduct=new Product();
        $currentProduct=Product::where('id',$id)->first();
        $currentProduct->product_name=$request->post('product_name');
        //dd($currentProduct->product_name);
        $currentProduct->price=$request->post('product_price');
        $currentProduct->key=$request->post('key');
        $currentProduct->image=$request->post('product_image');
        $currentProduct->save();
        return redirect('/admin/view');
    
    }

    public function delete($id)
    {
        //$currentProduct=new Product();
        $currentProduct=Product::where('id',$id)->first();

        $currentProduct->delete();
        return redirect('/admin/view');
    }

}
