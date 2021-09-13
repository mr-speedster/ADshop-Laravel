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
    <form method="POST" enctype="multipart/form-data" action="/update/{{ $current->id }}">
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

                <input required type="text" value="{{ $current->product_name }}" id="user_name" name="product_name"
                    class="input">
            </div>
        </div>
        <div class="input-div one">
            <div class="i">

            </div>
            <div class="div">

                <input required type="number" value="{{ $current->price }}" id="user_name" name="product_price"
                    class="input">
            </div>
        </div>
        <div class="mb-3">
            <div class="div">

            </div>

            <input required class="form-control" value="{{ $current->image }}" name="product_image" type="text"
                id="formFile">
        </div>
        <div class="input-div one">
            <div class="i">

            </div>
            <div class="div">

                <input required type="text" value="{{ $current->key }}" id="user_name" name="key" class="input">
            </div>
        </div>

        <button type="submit" class="btn">Update</button>
    </form>

@endsection
