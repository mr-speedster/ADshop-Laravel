@extends('layout.app')
@section('title','ADshop | SignUp')
@section('form')
<form method="POST">
    <div class="words word-2">
        <span>A</span>
        <span>D</span>
        <span>s</span>
        <span>h</span>
        <span>o</span>
        <span>p</span>
    </div>
    <div class="input-div one">
        <div class="i">
            <i class="fas fa-user"></i>
        </div>
        <div class="div">
            <h5>Username</h5>
            <input required type="text" name="user_name" class="input">
        </div>
    </div>
    <div class="input-div one">
        <div class="i">
            <i class="bi bi-envelope-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                </svg></i>
        </div>
        <div class="div">
            <h5>email</h5>
            <input required type="text" name="user_email" class="input">
        </div>
    </div>
    <div class="input-div pass">
        <div class="i">
            <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Password</h5>
            <input required id="user_pass" type="password" name="user_pass" class="input">
        </div>
    </div>
    <div class="input-div pass">
        <div class="i">
            <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Conform</h5>
            <input required id="conform_pass" type="password" name="conform_pass" class="input">
        </div>
    </div>
    
    <div class="text-center small">
        <a href="{{ url('/user/signin')}}">Alredy have an account?</a>
    </div>
    <button name="sign_up" onclick="conformPass()" type="submit" class="btn">Login</button>
</form>
@endsection