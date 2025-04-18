@extends('layouts/master')

@section('content')

<link href="/css/show.css" rel="stylesheet" />

    <div>
      <div class="banner-img">
        <h1>SNAKE PLANTS</h1>
      </div>


      <!-- image section -->

      <div class="img-section">
        <img src="{{ asset('storage/' . $image->image) }}" alt="">
      </div>


      <!-- edit section -->

      <form action="/snake/{{$image->id}}/edit">
        <input type="submit" value="Edit Post" class="btn btn-primary edit-btn">
      </form>   

      <!-- delete section -->

      <form method="POST" action="{{ route('snake.destroy', $image->id)}}">

        @csrf
        @method("DELETE")

        <input type="submit" value="Delete Post" class="btn btn-danger del-btn">

      </form>
    </div>

@endsection