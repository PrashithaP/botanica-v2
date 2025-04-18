@extends('layouts/master')

@section('content')

<link href="/css/show.css" rel="stylesheet" />

    <div>
      <div class="banner-img">
        <h1>FLOWERING PLANTS</h1>
      </div>


      <!-- image section -->

      <div class="img-section">
        <img src="{{ asset('storage/' . $flower->image) }}" alt="">
      </div>


      <!-- edit section -->

      <form action="/flower/{{$flower->id}}/floweredit">
        <input type="submit" value="Edit Post" class="btn btn-primary edit-btn">
      </form>   

      <!-- delete section -->

      <form method="POST" action="{{ route('flower.destroy', $flower->id)}}">

        @csrf
        @method("DELETE")

        <input type="submit" value="Delete Post" class="btn btn-danger del-btn">

      </form>
    </div>

@endsection