@extends ('layouts/master')

@section('content')

    <link rel="stylesheet" href="/css/plants.css">

    <!-- hero section -->
     
    <section class="banner-img">
        <h1>FLOWERING PLANTS</h1>
    </section>

    <!-- description section -->

    <div class="desc">
        <div class="text">
            <p>
            Caring for flowering plants requires attention to their specific needs to ensure they bloom beautifully and stay healthy. Most flowering plants thrive in bright, indirect sunlight, so placing them near a window where they receive 4–6 hours of sunlight daily is ideal. Proper watering is crucial—while some plants prefer consistently moist soil, others, like succulents, need their soil to dry out between waterings. Always check the soil before watering and ensure the pot has drainage holes to prevent root rot. Using well-draining, nutrient-rich soil helps provide essential support for growth. Regular fertilization during the growing season (spring and summer) with a balanced or bloom-boosting fertilizer encourages vibrant flowers, while minimal feeding is needed in winter. Maintaining the right temperature and humidity is also key; most flowering plants prefer temperatures between 60–75°F (15–24°C) and moderate humidity. Pruning spent blooms, also known as deadheading, encourages new flowers to grow and helps maintain the plant’s shape. Repotting every couple of years or when the roots become crowded ensures continued growth. Keeping an eye out for pests like aphids and spider mites and treating them with neem oil or insecticidal soap can help protect your plant. With proper care, flowering plants will reward you with stunning blooms and fresh greenery throughout the season.
            </p>
        </div>
        <div class="side-video">
            <video width="100%" controls muted autoplay loop>
                <source src="/images/flowering.mp4" type="video/mp4">
            </video>
        </div>
    </div>


        <!-- CRUD Section -->

        <div class="d-flex justify-content-center btn-create">
            <a href="flower/flowercreate" class="create">ADD NEW</a>
        </div>


      <!-- image section -->
        <div class="img-section">

        @foreach($flower as $flower)

        <div>
            <a href="/flowershow/{{$flower->id}}">
                <img src="{{ asset('storage/' . $flower->image) }}" alt="" class="plant-img">
            </a>
        </div>

        @endforeach

        </div>





    
@endsection