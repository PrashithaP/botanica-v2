@extends ('layouts/master')

@section('content')

<link rel="stylesheet" href="/css/welcome.css">

    <section class="hero d-flex align-items-center justify-content-center img-fluid">
        <div class="hero-content text-center p-5">
            <h1 class="pt-2">Discover the Best Plant Care Tips</h1>
            <p class="lead py-4">Find easy-to-follow care guides for your favorite plants.</p>
            <button class="btn hero_btn btn-success" type="submit">Get Started</button>
        </div>
    </section>

    <!-- steps section -->

    <section class="steps_section">
        <h2 class="steps">Steps to start your plants off right</h2>

        <div class="steps-container">
            <div class="step">
                <img src="/images/step1.svg" alt="Inoculate">
                <h3>Inoculate</h3>
                <p>Treat seeds with beneficial microbes to improve nutrient absorption and disease resistance.</p>
            </div>

            <div class="step">
                <img src="/images/step2.svg" alt="Sow the Seed">
                <h3>Sow the Seed</h3>
                <p>Plant the seeds at the right depth in soil, cover them lightly, and water gently.</p>
            </div>

            <div class="step">
                <img src="/images/step3.svg" alt="Put in Pot">
                <h3>Put in Pot</h3>
                <p>Choose a well-draining pot, place it in suitable light, and maintain proper moisture. </p>
            </div>
        </div>
    </section>
    

    <!-- plants section -->


    <div class="plant-section">
        <h2>Explore the World of Plants</h2>
        <div class="plant-container">
            <div class="plant-card">
                <img src="/images/snake.svg" alt="Snake Plant">
                <a href="/snake" class="plant-link">Snake Plants</a>
            </div>
            <div class="plant-card">
                <img src="/images/flowering.svg" alt="Flowering Plant">
                <a href="/flower" class="plant-link">Flowering Plants</a>
            </div>
            <div class="plant-card">
                <img src="/images/aloe vera.svg" alt="Aloe Vera">
                <a href="/aloe" class="plant-link">Aloe Vera</a>
            </div>
            <div class="plant-card">
                <img src="/images/bonsai.svg" alt="Bonsai">
                <a href="/bonsai" class="plant-link">Bonsai</a>
            </div>
        </div>
    </div>

    <!-- video section -->

    <div class="video">
        <video width="100%" controls muted autoplay loop>
            <source src="/images/care.mp4" type="video/mp4">
        </video>
    </div>
    






@endsection