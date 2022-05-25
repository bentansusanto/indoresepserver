@extends('master')

@section('title','Form Edit Makanan')

@section('content')
        <div class="container">
            <h2>Form Edit Menu Makanan</h2>
            <form action="/reseps/{{$resep->id}}" method="POST" enctype="multipart/form-data" class="mt-3" style="width: 30rem;">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInput1" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control text-capitalize @error('name') is-invalid @enderror" id="exampleInput1" name="name" value="{{$resep->name}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <input id="desc" type="hidden" name="desc" value="{{$resep->desc}}">
                    <trix-editor input="desc"></trix-editor>
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
