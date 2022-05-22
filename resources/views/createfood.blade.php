@extends('master')

@section('title','Create')

@section('content')

        <div class="container mt-5">
            <h2 style="text-transform: capitalize">Form Makanan</h2>
            <form class="mt-3" style="width: 50%;" action="/reseps" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Makanan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukkan nama makanan" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInput1" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control" name="desc" id="exampleInput1" value="{{old('desc')}}"></textarea>
                </div>
                <div class="mb-3">
                  <input type="file" class="form-control" name="image" id="image" value="{{old('image')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

@endsection
