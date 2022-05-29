@extends('Login')

@section('title', 'Login Admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Registrasi</h2>
        <form class="login" action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <input type="text" class="form-control text-capitalize"  @error('name') is-invalid @enderror" name="name" id="exampleInput1" placeholder="Input your name" value="{{old('name')}}">
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>
            <div class="mb-3">
              <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" placeholder="Input your email" value="{{old('email')}}">
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Input your password"value="{{old('password')}}">
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>
            <button class="btn btn-primary mt-3">Register Now</button>
            <p>I have account <span>&nbsp;<a href="/login">Login</a></span></p>
          </form>
    </div>
@endsection
