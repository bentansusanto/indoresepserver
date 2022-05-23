@extends('master')

@section('title', 'Daftar Nama Makanan')

@section('content')
        <div class="container mt-4">
            <h2>Daftar Makanan Batam</h2>
            <a class="btn btn-primary mt-3" href="/reseps/create">Tambah Data Makanan</a>
            <ul class="list-group mt-3" style="width: 20rem">
                @foreach ($reseps as $resep)
                    <li class="list-group-item d-flex justify-content-between align-items-center text-capitalize">
                    {{$resep->name}}
                    <a href="/reseps/{{$resep->id}}" class="badge bg-info rounded-pill" style="text-decoration: none">Detail</a>
                    </li>
                @endforeach
              </ul>
        </div>

@endsection
