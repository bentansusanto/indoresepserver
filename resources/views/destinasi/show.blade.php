@extends('master')

@section('content')
    <div class="container">
        <div class="card mt-3" style="width: 18rem;">
            <img src="{{asset('produk/'. $destinasi->image)}}" class="card-img-top w-100">
            <div class="card-body">
              <h5 class="card-title">{{$destinasi->name}}</h5>
              <p class="card-text">{{$destinasi->desc}}</p>
            <form action="/destinasis/{{$destinasi->id}}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
              <a href="/destinasis/{{$destinasi->id}}/edit" class="btn btn-dark">Update</a>
              <a href="/destinasis" class="card-link" style="text-decoration: none">Kembali</a>
            </div>
          </div>
    </div>
@endsection
