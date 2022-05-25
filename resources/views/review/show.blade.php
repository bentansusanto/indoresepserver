@extends('master')

@section('content')
    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$review->name}}</h5>
              <h6 style="font-size: .9rem;" class="card-subtitle mb-2 mt-2 text-muted">{{$review->email}}</h6>
              <p class="card-text">{{$review->message}}</p>
            </div>
          </div>
    </div>
@endsection
