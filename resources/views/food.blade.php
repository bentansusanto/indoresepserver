@extends('master')

@section('title', 'Makanan')

@section('content')
    <div class="container">
        <h1> Daftar Nama Makanan</h1>
        <a class="btn btn-primary my-3" href="/reseps/create">Create Data</a>
        <table class="table" style="width: 80%;">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($reseps as $resep)
                <tr>
                  <th scope="row">{{$resep->id}}</th>
                  <td>{{$resep->name}}</td>
                  <td>{{$resep->desc}}</td>
                  <td>{{$resep->image}}</td>
                  <td><a class="btn btn-dark" href="#">Updade</a></td>
                  <td><a class="btn btn-danger" href="#">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
