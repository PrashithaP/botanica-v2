@extends('layouts/master')

@section('content')

<link href="/css/show.css" rel="stylesheet" />

    <div>
      <div class="banner-img">
        <h1>ALOE VERA</h1>
      </div>


      <!-- image section -->

      <div class="img-section">
        <img src="{{ asset('storage/' . $aloe->image) }}" alt="">
      </div>


      <!-- edit section -->

      <form action="/aloe/{{$aloe->id}}/aloeedit">
        <input type="submit" value="Edit Post" class="btn btn-primary edit-btn">
      </form>   

      <!-- delete section -->

      <form method="POST" action="{{ route('aloe.destroy', $aloe->id)}}">

        @csrf
        @method("DELETE")

        <input type="submit" value="Delete Post" class="btn btn-danger del-btn">

      </form>
    </div>

@endsection