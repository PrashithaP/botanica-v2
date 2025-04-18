@extends ('layouts/master')

@section('content')

    <link rel="stylesheet" href="/css/plants.css">

    <!-- hero section -->
     
    <section class="banner-img">
        <h1>SNAKE PLANTS</h1>
    </section>

    <!-- description section -->

    <div class="desc">
        <div class="text">
            <p>
                The snake plant (Sansevieria) is a hardy and low-maintenance houseplant, making it an excellent choice for beginners. It thrives in bright, indirect sunlight but can tolerate low-light conditions. When it comes to watering, it is crucial to let the soil dry out completely between waterings, typically watering once every 2–3 weeks and even less in winter to prevent root rot. Well-draining soil, such as a cactus or succulent mix, is ideal, and the pot should have drainage holes to avoid water retention. This plant prefers temperatures between 60–80°F (16–27°C) and can withstand low humidity, though moderate conditions are best. Fertilizing every 2–3 months during spring and summer with a mild succulent fertilizer will support healthy growth, while no fertilization is needed in winter. Repotting is only necessary every 2–3 years or when the roots outgrow the pot. Occasional pruning helps maintain its appearance by trimming yellow or damaged leaves, and wiping the leaves with a damp cloth removes dust buildup. Snake plants can be easily propagated through leaf cuttings or by dividing root clumps, making them simple to expand or share. Though they are resistant to most pests, occasional mealybugs or spider mites may appear, which can be treated with neem oil or insecticidal soap. Lastly, it's important to note that snake plants are mildly toxic to pets if ingested, so keeping them out of reach of cats and dogs is advisable. With minimal care, snake plants can thrive and add beauty to any indoor space.
            </p>
        </div>
        <div class="side-video">
            <video width="100%" controls muted autoplay loop>
                <source src="/images/snake.mp4" type="video/mp4">
            </video>
        </div>
    </div>


        <!-- CRUD Section -->

        <div class="d-flex justify-content-center btn-create">
            <a href="snake/create" class="create">ADD NEW</a>
        </div>


        <!-- image section -->
        <div class="img-section">
        @foreach($image as $img)
        
        <div>
            <a href="/show/{{$img->id}}">
                <img src="{{ asset('storage/' . $img->image) }}" alt="" class="plant-img">
            </a>
        </div>
        @endforeach

        </div>





    
@endsection