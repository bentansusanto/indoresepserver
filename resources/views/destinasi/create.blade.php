@extends('master')

@section('title','Form Data Destinasi')

@section('content')
        <div class="container">
            <h2>Form Pengisian Data Destinasi</h2>
            <form action="/destinasis" method="POST" enctype="multipart/form-data" class="mt-3" style="width: 30rem;">
                @csrf
                <div class="mb-3">
                <label for="exampleInput1" class="form-label">Nama Destinasi</label>
                <input type="text" class="form-control text-capitalize @error('name') is-invalid @enderror" id="exampleInput1" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="exampleInput1" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control @error('desc') is-invalid @enderror" id="exampleInput1" name="desc" value="{{old('desc')}}"></textarea>
                @error('desc')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

@endsection
