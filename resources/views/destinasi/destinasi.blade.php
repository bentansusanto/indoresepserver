@extends('master')

@section('title', 'Daftar Destinasi Batam')

@section('content')
<div class="container mt-4">
    <h2>Daftar Destinasi Batam</h2>
    <a class="btn btn-primary mt-3" href="/destinasis/create">Tambah Data Destinasi</a>
    <ul class="list-group mt-3" style="width: 20rem">
        @foreach ($destinasis as $destinasi)
            <li class="list-group-item d-flex justify-content-between align-items-center text-capitalize">
            {{$destinasi->name}}
            <a href="/destinasis/{{$destinasi->id}}" class="badge bg-info rounded-pill" style="text-decoration: none">Detail</a>
            </li>
        @endforeach
      </ul>
</div>
@endsection
