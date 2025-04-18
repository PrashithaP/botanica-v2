@extends ('layouts/master')

@section('content')

    <link rel="stylesheet" href="/css/plants.css">

    <!-- hero section -->
     
    <section class="banner-img">
        <h1>BONSAI</h1>
    </section>

    <!-- description section -->

    <div class="desc">
        <div class="text">
            <p>
            Caring for an indoor bonsai plant requires careful attention to its light, water, and soil needs. Bonsai trees thrive in bright, indirect sunlight, needing at least 5–6 hours of daily light to maintain their growth and shape. If natural light is insufficient, a grow light can help supplement their needs. Proper watering is essential, as bonsai trees should never dry out completely. The soil should remain slightly moist, but overwatering must be avoided to prevent root rot. A good rule is to water when the topsoil feels slightly dry, ensuring that excess water drains properly. Using well-draining bonsai-specific soil helps with root aeration and water management. Maintaining the right temperature (60–75°F or 15–24°C) and moderate humidity is crucial, and placing a humidity tray beneath the pot can help maintain moisture levels indoors.
            Regular pruning and fertilization are necessary to keep the bonsai healthy and maintain its miniature appearance. Trimming leaves and branches encourages new growth, while root pruning during repotting (every 2–3 years) ensures the tree doesn’t become root-bound. Feeding the bonsai with a balanced fertilizer every 2–4 weeks during the growing season (spring and summer) promotes steady growth, with less frequent feeding needed in fall and winter. Keeping an eye out for pests like aphids or spider mites and treating them with neem oil or insecticidal soap helps protect the plant. With proper care, an indoor bonsai tree can be a stunning and long-lasting addition to your home, offering a sense of peace, balance, and natural beauty.
            </p>
        </div>
        <div class="side-video">
            <video width="100%" controls muted autoplay loop>
                <source src="/images/bonsai.mp4" type="video/mp4">
            </video>
        </div>
    </div>


        <!-- CRUD Section -->

        <div class="d-flex justify-content-center btn-create">
            <a href="bonsai/bonsaicreate" class="create">ADD NEW</a>
        </div>


      <!-- image section -->
        <div class="img-section">

        @foreach($bonsai as $bonsai)

        <div>
            <a href="/bonsaishow/{{$bonsai->id}}">
                <img src="{{ asset('storage/' . $bonsai->image) }}" alt="" class="plant-img">
            </a>
        </div>

        @endforeach

        </div>





    
@endsection