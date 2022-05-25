@extends('master')

@section('title','Form Data Menu')

@section('content')
        <div class="container mt-3">
            <h2>Form Pengisian Menu Makanan</h2>
            <form action="/reseps" method="POST" enctype="multipart/form-data" class="mt-3" style="width: 30rem;">
                @csrf
                <div class="mb-3">
                <label for="exampleInput1" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInput1" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <input id="desc" type="hidden" name="desc">
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

        <script>
            document.addEventListener('trix-file-accept', function(e){
                e.preventDefault();
            })
        </script>
@endsection
