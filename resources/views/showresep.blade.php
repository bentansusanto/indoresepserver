@extends('master')

@section('content')
    <div class="container">
        <div class="card mt-3" style="width: 28rem;">
            <img src="{{asset('produk/'. $resep->image)}}" class="card-img-top w-100">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2rem; font-weight: 700;">{{$resep->name}}</h5>
                <p class="card-text"><?php echo htmlspecialchars_decode($resep->desc)?></p>
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
