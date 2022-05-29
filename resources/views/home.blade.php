@extends('master')

@section('title', 'Homepage')

@section('content')
            <div class="container mt-5">
                @auth
                <h1>Hello {{auth()->user()->name}}, Selamat Datang <br>
                    Ada yang mau di perbaiki datanya bro ??</h1>
                <a class="btn btn-primary" href="/reseps">Ya, bawa aku</a>
                @endauth
            </div>
@endsection
