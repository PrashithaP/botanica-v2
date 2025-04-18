@extends ('layouts/master')

@section('content')

<link rel="stylesheet" href="/css/create.css">

    <section class="banner-img">
        <div class="img-section">
            <form method="POST" action="/bonsai/{{$bonsai->id}}" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="choose-img">
                    <label>Choose Image</label>
                    <input type="file" name="blog-img" id="">
                </div>
                <div class="publish-btn">
                <button type="submit"> Publish</button>
                </div>
            </form>
        </div>
    </section>


@endsection