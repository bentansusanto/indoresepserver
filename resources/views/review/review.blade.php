@extends('master')

@section('title', 'Review')

@section('content')
    <div class="container mt-4">
            <h2>Daftar Testimoni Pengunjung Sans Trip</h2>
            <ul class="list-group mt-3" style="width: 20rem">
                @foreach ($reviews as $review)
                    <li class="list-group-item d-flex justify-content-between align-items-center text-capitalize">
                        {{$review->name}}
                    <a href="/reviews/{{$review->id}}" class="badge bg-info rounded-pill" style="text-decoration: none">Detail</a>
                    </li>
                @endforeach
              </ul>
        </div>

@endsection
