@extends('master')
@section('title')
@section('content')
    <div class="container">
        <div class="card mt-3" style="width: 18rem;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$resep->name}}</h5>
              <p class="card-text">{{$resep->desc}}</p>
            <form action="/reseps/{{$resep->id}}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
              <a href="/reseps/{{$resep->id}}/edit" class="btn btn-dark">Update</a>
              <a href="/reseps" class="card-link" style="text-decoration: none">Kembali</a>
            </div>
          </div>
    </div>
@endsection
