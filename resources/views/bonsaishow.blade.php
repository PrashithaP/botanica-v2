@extends('layouts/master')

@section('content')

<link href="/css/show.css" rel="stylesheet" />

    <div>
      <div class="banner-img">
        <h1>BONSAI</h1>
      </div>


      <!-- image section -->

      <div class="img-section">
        <img src="{{ asset('storage/' . $bonsai->image) }}" alt="">
      </div>


      <!-- edit section -->

      <form action="/bonsai/{{$bonsai->id}}/bonsaiedit">
        <input type="submit" value="Edit Post" class="btn btn-primary edit-btn">
      </form>   

      <!-- delete section -->

      <form method="POST" action="{{ route('bonsai.destroy', $bonsai->id)}}">

        @csrf
        @method("DELETE")

        <input type="submit" value="Delete Post" class="btn btn-danger del-btn">

      </form>
    </div>

@endsection