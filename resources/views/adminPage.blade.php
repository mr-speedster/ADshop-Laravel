@extends('layout.app')
@section('title','ADshop | AdminPage')
@section('admin-user')
<div style="float: right;" class="container-fluid">
    <a class="nav-link" href="/admin/view"><h5 class="text-info">View Product</h5></a>
</div>
@endsection
@section('form')
<form method="POST" enctype="multipart/form-data" action="{{ route('product') }}">
    @csrf
    @if (session('status'))
    <small class="text-info">{{session('status')}}</small>
    @endif
    <div class="">
        <h2 class="text-info m-5">Admin</h2>
    </div>
    <div class="input-div one">
        <div class="i">
            
        </div>
        <div class="div">
            <h5>Product Name</h5>
            <input required type="text" id="user_name" name="product_name" class="input">
        </div>
    </div>
    <div class="input-div one">
        <div class="i">
            
        </div>
        <div class="div">
            <h5>Product Price</h5>
            <input required type="number" id="user_name" name="product_price" class="input">
        </div>
    </div>
    <div class="mb-3">
        <div class="div">
            <h6 class="text-black-50">Product Image</h6>
        </div>
        <input required class="form-control" name="product_image" type="file" id="formFile">
      </div>
    
    <button type="submit" class="btn">ADD Product</button>
</form>    

@endsection