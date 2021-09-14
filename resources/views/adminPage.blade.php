@extends('layout.app')
@section('title', 'ADshop | AdminPage')
@section('admin-user')
    <div style="float: left;" class="container-fluid">
        <a class="nav-link" href="/"><small class="text-info">View Home</small></a>
    </div>
    <div style="float: right;" class="container-fluid">
        <a class="nav-link" href="/admin/view"><small class="text-info">View Product</small></a>
    </div>
@endsection
@section('form')
    <form method="POST"  action="{{ route('product') }}">
        @csrf
        @if (session('status'))
            <small class="text-info">{{ session('status') }}</small>
        @endif
        <div class="">
        <h3 class=" text-info">Admin</h3>
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
        <div class="input-div one">
            <div class="i">

            </div>
            <div class="div">
                <h5>Product Image</h5>
                <input required type="text" id="user_name" name="img_link" class="input">
            </div>
        </div>
        
        <div class="input-div one">
            <div class="i">

            </div>
            <div class="div">
                <h5>Product Key</h5>
                <input required type="text" id="user_name" name="key" class="input">
            </div>
        </div>

        <button type="submit" class="btn">ADD Product</button>
    </form>

@endsection
