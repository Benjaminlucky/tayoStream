<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fonts Awesome -->

    <script src="https://kit.fontawesome.com/4589a9ba66.js" crossorigin="anonymous"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    @vite(['resources/js/app.js'])

</head>
<body>
    @include('layouts.header')

    <div class="homeBannerSection">
        <div class="row mx-auto homeBanner">
            <div class="col-12 hBannerContent">
                <h1>we create memorable</h1>
                <img src="{{asset('images/Home-Page-Top-Banner.webp')}}" alt="">
                <p>Dreamcast specializes in transforming virtual experiences by offering useful & immersive features that allow you to seamlessly host 
                    engaging as well as customized In-Person events, virtual events, hybrid events, webinars, live streaming services, 
                    and webcasting that best suit your requirements.</p>
            </div>
        </div>
    </div>

    <!-- INFINTE SCROLL -->

    <div class="clientScroll-section">
        <div class="row mx-auto clientSlide">
            <h5>10+ Years of providing quality services to 1000+ clients globally</h5>
            <div class="col-md-12 slides">
                <div class="slide">
                    <img src="{{asset('images/access-bank.png')}}" alt="">
                </div>
                <div class="slide">
                    <img src="{{asset('images/heritage-bank.png')}}" alt="">
                </div>
                <div class="slide">
                    <img src="{{asset('images/access-bank.png')}}" alt="">
                </div>
                <div class="slide">
                    <img src="{{asset('images/heritage-bank.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <!--  EVENT TECH SOLUTIONS --->

    <div class="techSolutions-section">
        <div class="row mx-auto techSolution">
            <h3>our range of event-tech solutions</h3>
            <div class="col-md-6 techS-content">
                <p>unparalleled</p>
                <h4>in-person events</h4>
                <p class="content">Elevate the experience at your In-Person events with our stack of smart digital solutions that help you plan, set-up, and execute highly productive on-ground events.</p>
                <div class="solutions">
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 techS-img">
                <img src="{{asset('images/In-Person-Events-1.webp')}}" alt="">
            </div>
        </div>
    </div>

    <!-- Immersive Solution Section -->

    <div class="immersiveSolutions-section">
        <div class="row mx-auto immersiveSolution">
            <div class="col-md-6 align-self-end immersiveS-img">
                <img src="{{asset('images/Hybrid-Events-1.webp')}}" alt="">
            </div>
            <div class="col-md-6 immersiveS-content">
                <p>Immersive</p>
                <h4>Hybrid Events</h4>
                <div class="solutions">
                    <div class="solutionsItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App on-Spot registration & Ticketing</p>
                    </div>
                    <div class="solutionsItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App on-Spot registration & Ticketing</p>
                    </div>
                    <div class="solutionsItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App on-Spot registration & Ticketing</p>
                    </div>
                    <div class="solutionsItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App on-Spot registration & Ticketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!--- Immersive Solutions Ends Here -->


<!--  INTERACTIVE VIRTUAL EVENTS   starts here --->

        <div class="interactiveSolutions-section">
        <div class="row mx-auto interactiveSolution">
            <div class="col-md-6 interactiveS-content">
                <p>interactive</p>
                <h4>Virtual Events</h4>
                <p class="content">Elevate the experience at your In-Person events with our stack of smart digital solutions that help you plan, set-up, and execute highly productive on-ground events.</p>
                <div class="solutions">
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                    <div class="solutionItems">
                        <span><i class="fa-solid fa-mobile-button"></i></span>
                        <p class="itemContent">App for on-spot registration & Ticketing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 interactiveS-img">
                <img src="{{asset('images/Interactive-Events.webp')}}" alt="">
            </div>
        </div>
    </div>
    

    <!--- Interactive EvenTS Solutions End Here -->

    @include('layouts.testimonials')
    @include('layouts.products-cards')
    @include('layouts.prefooter')
    @include('layouts.footer')

</body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</html>