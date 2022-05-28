@extends('Login')

@section('title', 'Login Admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        @if (session()->has('loginError'))
            <div class="alert alert-success">
                {{session('failed')}}
                <button type="button" class="btn-close"></button>
            </div>
        @endif
        <form class="login" action="/login" method="post" style="">
            @csrf
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="mb-3">
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Input your email" autofocus required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Input your password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style="font-size: .9rem">Remember me</label>
              <a class="d-inline" style="float: right; text-decoration: none; font-size: .9rem;" href="">Forgot password</a>
            </div>
            <button class="btn btn-primary mt-3">Login Now</button>
            <p>You don't have account? <span>&nbsp;<a href="/register">Register Now</a></span></p>
          </form>
    </div>
@endsection
