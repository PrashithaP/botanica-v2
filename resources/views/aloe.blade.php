@extends ('layouts/master')

@section('content')

    <link rel="stylesheet" href="/css/plants.css">

    <!-- hero section -->
     
    <section class="banner-img">
        <h1>ALOE VERA</h1>
    </section>

    <!-- description section -->

    <div class="desc">
        <div class="text">
            <p>
                Caring for an indoor aloe vera plant is simple, as it is a hardy succulent that thrives with minimal maintenance. Aloe vera prefers bright, indirect sunlight and should be placed near a sunny window where it receives at least 4–6 hours of light per day. If the plant starts stretching or leaning, it may need more light. When watering, allow the soil to dry out completely between waterings, typically every 2–3 weeks, and reduce watering in the winter to prevent root rot. It is essential to use a well-draining soil mix, such as a cactus or succulent mix, and a pot with drainage holes to prevent excess moisture buildup.
                Aloe vera thrives in temperatures between 60–80°F (16–27°C) and does well in low to moderate humidity. Fertilizing is rarely necessary, but feeding it with a diluted succulent fertilizer once in spring and summer can promote growth. Pruning dead or damaged leaves helps maintain the plant’s health, and repotting every 2–3 years ensures continued growth, especially if the plant outgrows its container. If pests like mealybugs or spider mites appear, wiping the leaves with a damp cloth or using neem oil can help keep them away. Additionally, aloe vera can be propagated easily by separating and replanting pups (baby plants) that grow around the base. With proper care, aloe vera will thrive indoors and provide both aesthetic appeal and medicinal benefits.
            </p>
        </div>
        <div class="side-video">
            <video width="100%" controls muted autoplay loop>
                <source src="/images/aloe.mp4" type="video/mp4">
            </video>
        </div>
    </div>


        <!-- CRUD Section -->

        <div class="d-flex justify-content-center btn-create">
            <a href="aloe/aloecreate" class="create">ADD NEW</a>
        </div>


      <!-- image section -->
        <div class="img-section">

        @foreach($aloe as $aloe)

        <div>
            <a href="/aloeshow/{{$aloe->id}}">
                <img src="{{ asset('storage/' . $aloe->image) }}" alt="" class="plant-img">
            </a>
        </div>

        @endforeach

        </div>

    
@endsection