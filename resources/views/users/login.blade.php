@extends('layout') 

@section('content')

<section class=" form">
    <div class="container bg-light px-5">
    <h1 class = " text-center fw-bold py-2 text-danger">LOGIN</h1>
    <h2 class = "text-center">login to your account to post Job Seeker</h2>
    <form action = "/users/authenticate" method = "post">

        @csrf

        <div class="mt-4">
            <label class = "fw-bold">Email</label>
            <input type = "email" name = "email" class = "form-control mt-2" value = "{{ old('email') }}">

            @error('email')
            <p class="text-danger mt-1">{{ $message }}</p>
            @enderror 
        </div>

        <div class="mt-4">
            <label class = "fw-bold">Password</label>
            <input type = "password" name = "password" class = "form-control mt-2" value = "{{ old('password') }}">

            @error('password')
            <p class="text-danger mt-1">{{ $message }}</p>
            @enderror 
        </div>

        <div class="mt-5">
            <button type = "submit" class = "btn btn-danger rounded-pill">Sign In</button>
        </div>
        <div class="mt-4 py-4">
            <span>Don't have an account? <a herf = "/register" class = "text-decoration-none text-danger fw-bold" >Register</a></span>
        </div>
    </form>
</div>
</section>

@endsection