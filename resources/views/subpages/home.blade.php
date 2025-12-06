@extends('main')



@section('title')

Hare Krishna Movement Dehradun
@endsection

@section('content')

<!-- Carousel Start -->
<div id="maincontainer">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/12/Gita-home.png" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <section class="offer-seva-section py-5">
        <div class="container text-center">

            <p class="top-text">Join Us in The Service of Lord</p>
            <h2 class="main-title">Offer Seva</h2>

            <div class="row justify-content-center mt-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="offer-card shadow-lg">
                        <img src="assets/images/gita-jayanti.png" class="offer-img h-100" alt="">
                        <h5 class="offer-title">Gita Jayanti</h5>
                        <a href="{{ route('annadaan-seva') }}" class="offer-btn">Donate Now</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="offer-card shadow-lg">
                        <img src="assets/images/nityananda-trayodashi.png" class="offer-img h-100" alt="">
                        <h5 class="offer-title">Nityananda Trayodashi</h5>
                        <a href="{{ route('annadaan-seva') }}" class="offer-btn">Donate Now</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="offer-card shadow-lg">
                        <img src="assets/images/sri-gaura-purnima.png" class="offer-img h-100" alt="">
                        <h5 class="offer-title">Sri Gaura Purnima</h5>
                        <a href="{{ route('annadaan-seva') }}" class="offer-btn">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 100%, 100%;
            background-image: none !important;
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3E%3C/svg%3E") !important;
            background-size: 100% 100%;
            width: 40px;
            height: 40px;
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E") !important;
            background-size: 100% 100%;
            width: 40px;
            height: 40px;
        }


        .carousel-inner img {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            object-fit: cover;
            width: 100%;
            height: auto;
        }

        /* Top text */
        .top-text {
            font-size: 18px;
            color: #6c6c6c;
            margin-bottom: 5px;
        }

        /* Main title */
        .main-title {
            font-size: 36px;
            font-weight: 700;
            color: #1f7bd8;
        }

        /* Card main container */
        .offer-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            transition: 0.3s ease;
            border-bottom: 6px solid #1f7bd8;
        }

        .offer-card:hover {
            transform: translateY(-6px);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.12);
        }

        .offer-img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            object-position: center;
            transition: transform 0.4s ease;
        }

        .offer-card:hover .offer-img {
            transform: scale(1.05);
        }

        .offer-title {
            font-size: 20px;
            font-weight: 700;
            padding: 20px 10px 10px 10px;
            color: #000;
        }

        .offer-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 24px;
            border-radius: 8px;
            border: 1px solid #d0d0d0;
            background: #fff;
            color: #444;
            transition: 0.3s ease;
            text-decoration: none;
            font-size: 15px;
        }

        .offer-btn:hover {
            background: #1f7bd8;
            color: #fff;
            border-color: #1f7bd8;
        }

        /* Mobile Fixes */
        @media (max-width: 768px) {
            .main-title {
                font-size: 28px;
            }

            .offer-img {
                height: 200px;
            }
        }

        @media (max-width: 576px) {

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 1.5rem;
                height: 1.5rem;
                border: none;
            }
        }
    </style>

    <section class="blogs-section py-5">
        <h2 class="blogs-title text-center mb-5">Blogs & Songs</h2>

        <div class="container">
            <div class="row g-4">

                <div class="col-lg-14 col-md-12">

                    <div class="slider-container">
                        <div class="slider-track" id="sliderTrack">

                            @foreach($blogs as $blog)
                            <div class="slide">
                                <div class="blog-card shadow-none border-0 position-relative">

                                    <div class="blog-img-box">
                                        <img src="{{ asset($blog['image']) }}" class="blog-img">
                                    </div>


                                    <div class="p-3">
                                        <h4 class="blog-title">{{ $blog['title'] }}</h4>

                                        <p class="blog-desc text-muted">
                                            {{ Str::limit($blog['description'], 80) }}
                                        </p>

                                        <a href="{{ route('blogs.show', $blog['url']) }}" class="btn blog-btn w-100">
                                            Read More
                                        </a>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- DOTS -->
                    <div class="dots text-center mt-3" id="dots"></div>

                </div>
            </div>
        </div>
    </section>


    <style>
        /* SECTION TITLE */
        .blogs-title {
            font-size: 34px;
            font-weight: 800;
            color: #007bff;
        }

        /* FIXED IMAGE BOX */
        .blog-img-box {
            height: 260px;
            overflow: hidden;
            border-radius: 12px;
        }

        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .4s;
        }

        .blog-card:hover .blog-img {
            transform: scale(1.05);
        }

        /* TITLE */
        .blog-title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            height: 55px;
            overflow: hidden;
        }

        /* DESCRIPTION */
        .blog-desc {
            font-size: 15px;
            line-height: 1.6;
            height: 65px;
            overflow: hidden;
        }

        /* BUTTON */
        .blog-btn {
            border: 2px solid #007bff;
            color: #007bff;
            border-radius: 50px;
            padding: 10px 0;
            font-weight: 600;
            transition: .3s;
        }

        .blog-btn:hover {
            background: #007bff;
            color: #fff;
        }

        /* DATE BADGE */
        .date-badge {
            position: absolute;
            top: 225px;
            left: 20px;
            background: #007bff;
            color: #fff;
            padding: 5px 12px;
            font-size: 12px;
            border-radius: 6px;
            font-weight: 600;
            display: inline-flex;
            gap: 5px;
            align-items: center;
        }

        /* SWIPE SLIDER */
        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slider-track {
            display: flex;
            gap: 20px;
            transition: transform .4s ease-in-out;
        }

        .slide {
            min-width: 30%;
        }

        @media(max-width: 992px) {
            .slide {
                min-width: 100%;
            }
        }

        /* DOTS */
        #dots .dot {
            height: 10px;
            width: 10px;
            background: #d7d7d7;
            display: inline-block;
            border-radius: 50%;
            margin: 0 5px;
            transition: .3s;
        }

        #dots .dot.active {
            background: #007bff;
            transform: scale(1.3);
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .blog-img-box {
                height: 220px;
            }
        }
    </style>

    <script>
        let slider = document.getElementById("sliderTrack");
        let slides = document.querySelectorAll(".slide");
        let dotsContainer = document.getElementById("dots");
        let dots = [];
        let index = 0;

        // Detect slides per view
        function slidesPerView() {
            return window.innerWidth <= 992 ? 1 : 3;
        }

        // Create dots dynamically (Mobile: -1 dot, Desktop: +2 dots)
        function createDots() {
            dotsContainer.innerHTML = "";
            let perView = slidesPerView();
            let baseDots = Math.ceil(slides.length / perView);
            let totalDots = 0;

            // Mobile view (1 dot less)
            if (window.innerWidth <= 992) {
                totalDots = Math.max(baseDots - 1, 1);
            }
            // Desktop view (+2 dots)
            else {
                totalDots = baseDots + 3;
            }

            for (let i = 0; i < totalDots; i++) {
                let d = document.createElement("span");
                d.classList.add("dot");
                if (i === 0) d.classList.add("active");
                dotsContainer.appendChild(d);
            }

            dots = document.querySelectorAll(".dot");
        }

        createDots();

        // Update active dot
        function updateDots() {
            dots.forEach(d => d.classList.remove("active"));
            if (dots[index]) dots[index].classList.add("active");
        }

        // Move slider correctly
        function moveSlider() {
            let slideWidth = slider.querySelector(".slide").offsetWidth + 20; // gap included
            slider.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        // Auto slide
        setInterval(() => {
            let perView = slidesPerView();

            let baseDots = Math.ceil(slides.length / perView);
            let totalDots = 0;

            // Mobile
            if (window.innerWidth <= 992) totalDots = Math.max(baseDots - 1, 1);

            // Desktop
            else totalDots = baseDots + 2;

            index = (index + 1) % totalDots;

            moveSlider();
            updateDots();
        }, 3500);

        // Swipe for mobile
        let startX = 0;

        slider.addEventListener("touchstart", e => startX = e.touches[0].clientX);

        slider.addEventListener("touchend", e => {
            let diff = e.changedTouches[0].clientX - startX;

            if (diff < -40) index++;
            if (diff > 40) index--;

            let perView = slidesPerView();
            let baseDots = Math.ceil(slides.length / perView);

            let totalDots = window.innerWidth <= 992 ? Math.max(baseDots - 1, 1) : baseDots + 2;

            if (index < 0) index = totalDots - 1;
            if (index >= totalDots) index = 0;

            moveSlider();
            updateDots();
        });

        // Resize handler (recalculate dots)
        window.addEventListener("resize", () => {
            createDots();
            index = 0;
            moveSlider();
            updateDots();
        });
    </script>








    <section class="hero-section"
        style="background: url('{{ asset('assets/12/home.webp') }}') center/cover no-repeat; color: white; text-align: center; padding-bottom: 20px;">
        <div class="container d-flex flex-column align-items-center">
            <img class="lazyload" alt="Annadanam Mahadanam" width="20%%" height="100%" src="assets/images/image22.png">
            <h1 class="fw-bold display-5 d-inline-block px-3 py-2 rounded"
                style="background-color: white; color: #1c92dd;">
                Annadanam Mahadanam
            </h1>
            <a href="{{ route('annadaan-seva') }}"> <button
                    class="lead mt-3 d-inline-block px-4 py-2 text-white rounded-pill"
                    style="background-color: #1c92dd; transition: color 0.3s; border: none;">
                    SUPPORT US IN FEEDING NEEDY AND TEMPLE VISITORS.
                </button>
            </a>
        </div>
    </section>

    <style>
        .lazyload {
            background-color: #1c92dd;
            border-radius: 0 0 95px 95px;
            height: 137px;
            text-align: center;
            width: 192px;
            margin-bottom: 30px;
        }
    </style>


    <!-- HELP US PROTECT COWS SECTION (FULLY MATCHED DESIGN) -->
    <section class="container my-4">
        <div class="container pt-30">
            <div class="row">
                <div class="col-lg-11 offset-lg-1">

                    <div class="featured-causes-item-current-style1 bg-white position-relative z-index-2">

                        <!-- IMAGE -->
                        <div class="thumb">
                            <img class="cow-img" src="{{asset('assets/12/cow.png') }}" alt="Help us Protect Cows">
                        </div>

                        <!-- TEXT CONTENT -->
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-10 mx-auto">

                                    <h3 class="title">Help us Protect Cows</h3>

                                    <p class="text">
                                        Cow Protection doesn't just mean "Not Killing Cows”, rather it is
                                        "Serving Cows to make them Happy." Join us in truly protecting
                                        200 desi cows, who are living happily and fearlessly at
                                        Hare Krishan Mandir Dehradun.
                                    </p>

                                    <a href="https://harekrishnamandir.org/gau-seva" target="_blank"
                                        class="donate-btn1">
                                        Donate Now
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <style>
        /* MAIN BOX */
        .featured-causes-item-current-style1 {
            border: 10px solid #1c92dd;
            border-radius: 8px;
            padding: 3rem 2rem;
            position: relative;
            overflow: visible;
        }

        /* IMAGE */
        .featured-causes-item-current-style1 .thumb {
            position: absolute;
            left: -28%;
            top: 50%;
            transform: translateY(-50%);
        }

        .cow-img {
            width: 35%;
            max-width: 100%;
            border-radius: 12px;
            left: 170px;
            position: relative;
        }

        @media (max-width: 1199px) {

            /* Move image inside container */
            .featured-causes-item-current-style1 .thumb {
                position: relative !important;
                left: 0 !important;
                top: 0 !important;
                transform: none !important;
                text-align: center;
                margin-bottom: 20px;
            }

            /* Full-width image inside */
            .cow-img {
                width: 90% !important;
                margin: auto;
                left: 0 !important;
            }

            /* Center text below image */
            .featured-causes-item-current-style1 .content {
                padding-left: 0 !important;
                text-align: center;
            }
        }


        /* TEXT AREA */
        .featured-causes-item-current-style1 .content {
            padding-left: 5rem;
        }

        .title {
            font-size: 32px;
            font-weight: 700;
            color: #1c92dd;
            margin-bottom: 20px;
        }

        .text {
            font-size: 18px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        /* BUTTON */
        .donate-btn1 {
            display: inline-block;
            padding: 14px 40px;
            border: 3px solid #1c92dd;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            color: #1c92dd;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .donate-btn1:hover {
            background: #1c92dd;
            color: #fff;
            transform: translateY(-4px);
        }

        .donate-btn1::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            transition: 0.5s;
        }

        .donate-btn1:hover::before {
            left: 100%;
        }

        /* RESPONSIVE FIXES */

        /* Tablets */
        @media (max-width: 991px) {
            .featured-causes-item-current-style1 .thumb {
                left: -18%;
            }

            .cow-img {
                width: 320px;
            }

            .featured-causes-item-current-style1 .content {
                padding-left: 3rem;
            }
        }

        /* Mobile - image moves inside */
        @media (max-width: 768px) {
            .featured-causes-item-current-style1 .thumb {
                position: relative;
                left: 0;
                top: 0;
                transform: none;
                margin-bottom: 20px;
                text-align: center;
            }

            .cow-img {
                width: 90%;
                margin: auto;
            }

            .featured-causes-item-current-style1 .content {
                padding-left: 0 !important;
                text-align: center;
            }

            .title {
                font-size: 26px;
            }

            .text {
                font-size: 16px;
            }

            .donate-btn {
                width: 100%;
                padding: 12px 25px;
            }
        }
    </style>





    <style>
        .product-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 250px;
            /* Optional: keep consistent height */
            border-radius: 8px;
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: 0.3s;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .product-item:hover .product-overlay {
            opacity: 1;
        }

        .product-overlay .btn {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        @media (max-width: 576px) {
            .product-overlay .btn {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }
    </style>
    <style>
        .blog-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        /* Scale on hover */
        .blog-card:hover {
            transform: scale(1.03);
            box-shadow: 0 0.8rem 1.5rem rgba(0, 0, 0, 0.15);
        }

        /* Force image size uniformity */
        .blog-card img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        /* Gradient button */
        .btn-gradient {
            background: linear-gradient(45deg, #f3a33aff, #f5f249ff);
            border: none;
            color: #fff;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #f8a02eff, #faf73bff);
            transform: scale(1.05);
        }
    </style>




    <!-- < !-- Features End -->
    <style>
        .wow,
        .wow.fadeIn,
        .wow[data-wow-delay],
        .wow[data-wow-duration] {
            animation: none !important;
            animation-name: none !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .product-item img {
            width: 407.98px;
            height: 342px;
            object-fit: cover;
            /* keeps image aspect ratio and crops nicely */
        }
    </style>





    @endsection