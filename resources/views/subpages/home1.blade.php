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
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <!-- <div class="col-6 position-relative">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">hkjkhk</h1>
                                <small class="fs-5 fw-bold"></small>
                            </div>
                        </div> -->
                        <div class="col-6 ">
                            <img class="img-fluid rounded" src="assets/10/narsingh.jpg">
                        </div>
                        <div class="col-6 ">
                            <img class="img-fluid rounded" src="assets/10/1.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded" src="assets/12/event_cover_image2442791.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded" src="assets/12/event_cover_image5182366.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our History</h1>
                    <p class="mb-4">The Hare Krishna Movement Dehradun (HKM Dehradun) is a spiritual organization that
                        aims to gift human society an opportunity for a life of happiness, good health, peace of mind
                        and all good qualities through God Consciousness.

                        Registered as a trust in 2020 it is spiritually mentored by ISKCON Bangalore. In accordance with
                        the desire of His Divine Grace A.C. Bhaktivedanta Swami Srila Prabhupada, Founder-Acharya of the
                        worldwide Hare Krishna Movement.
                    </p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/service.png" alt="">
                            <h5 class="mb-3">Srila Prabhupada</h5>
                            <span>Founder of Hare Krishna Movement</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/product.png" alt="">
                            <h5 class="mb-3">Chaitanya Mahaprabhu</h5>
                            <span>Hare Krishna</span>
                        </div>
                    </div>
                    <a href="{{ route('our-mission') }}"
                        class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn rounded-pill mb-3 mb-md-0"
                        style="color: #000; font-weight: bold; font-size:clamp(1rem, 3vw, 1.25rem);">
                        Explore More
                        <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                             transform: translateX(-100%);
                             animation: shine 2s infinite;">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Services</p>
                <h1 class="mb-5">Programs That We Offer</h1>
            </div>

            <div class="row gy-5 gx-4">
                <!-- Gita Life -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/programs/1-qd.jpg" alt="Gita Life">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="assets/programs/1-qd.jpg" alt="Gita Life">
                            </div>
                            <h5 class="mb-3">Gita Life</h5>
                            <p class="mb-4">
                                Bhagavad Gita Sessions on Sunday evening, 4:30 pm to 6:30 pm. Each
                                session delves into a few verses of the Bhagavad Gita followed by a Q&A.
                                The sessions conclude with exuberant Kirtans and Maha-Prasadam.
                            </p>
                            <a class="btn btn-primary" href="/gita-for-youth">Join Now</a>
                        </div>
                    </div>
                </div>

                <!-- ICVK -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/programs/2-qd.jpg" alt="ICVK">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="assets/programs/2-qd.jpg" alt="ICVK">
                            </div>
                            <h5 class="mb-3">ICVK (For Kids)</h5>
                            <p class="mb-4">
                                Indian Culture and Values for Kids (ICVK) offers a spiritual dimension to
                                the thoughts and actions of children. HKM Dehradun runs courses and culture
                                camps throughout the year both offline and online.
                            </p>
                            <a class="btn btn-primary" href="/icvk-indian-culture-and-values-for-kids">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- FOLK -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/programs/3-qd.jpg" alt="FOLK Youth">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="assets/programs/3-qd.jpg" alt="FOLK Youth">
                            </div>
                            <h5 class="mb-3">FOLK (For Youth)</h5>
                            <p class="mb-4">
                                Youth wing of the Hare Krishna Movement, Dehradun. Formed with a
                                vision to empower youth by facilitating them to practice spirituality
                                in their daily lives and attain real happiness.
                            </p>
                            <a class="btn btn-primary" href="/folk">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Anna-daan Program -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid"
                                src="assets/thumbs/1s-qdsj30lh53zt9acpymbghjueo1tmi8zxm8wn0tjixs.webp" alt="Anna-daan">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                    src="assets/thumbs/1s-qdsj30lh53zt9acpymbghjueo1tmi8zxm8wn0tjixs.webp"
                                    alt="Anna-daan">
                            </div>
                            <h5 class="mb-3">Anna-daan Program</h5>
                            <p class="mb-4">Extend support for our free food distribution initiative.</p>
                            <a class="btn btn-primary" href="/annadaan-seva">Donate</a>
                        </div>
                    </div>
                </div>

                <!-- Narasimha Havan -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/12/God-Narsingh-Bhagwan-Narsimha-Photo.jpg"
                                alt="Narasimha Havan">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                    src="assets/12/God-Narsingh-Bhagwan-Narsimha-Photo.jpg" alt="Narasimha Havan">
                            </div>
                            <h5 class="mb-3">Narasimha Havan Seva</h5>
                            <p class="mb-4">Participate in a sacred havan seeking spiritual strength and blessings.</p>
                            <a class="btn btn-primary" href="/narasimha-havan-seva">Participate</a>
                        </div>
                    </div>
                </div>

                <!-- House Kirtan -->
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid"
                                src="assets/thumbs/harinaam-sq-qdsj30lh53zt9acpymbghjueo1tmi8zxm8wn0tjixs.webp"
                                alt="House Kirtan">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                    src="assets/thumbs/harinaam-sq-qdsj30lh53zt9acpymbghjueo1tmi8zxm8wn0tjixs.webp"
                                    alt="House Kirtan">
                            </div>
                            <h5 class="mb-3">House Kirtan</h5>
                            <p class="mb-4">Host kirtan and katha at your home inviting sadhus.</p>
                            <a class="btn btn-primary" href="/house-kirtan">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Service End -->
<!-- Banner Start -->
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="section-title bg-white text-center text-primary px-3">Other Programs</p>
</div>
<div class="container-fluid banner " data-parallax="scroll" data-image-src="assets/Capture.JPG">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="assets/kimson-doan-AZMmUy2qL6A-unsplash.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">For Youth</h2>
                        <p class="text-white mb-4">The Youth Empowerment Club nurtures young minds with Vedic wisdom
                            through workshops in arts, science, and philosophy, fostering a progressive community
                            for over two decades.</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4 button" href="/folk">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="assets/rishu-bhosale-8Y0Ql4SjGfY-unsplash.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">Dham Yatra</h2>
                        <p class="text-white mb-4">A spiritual pilgrimage undertaken by devotees to visit sacred
                            sites and temples, seeking blessings and spiritual fulfillment.</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4 button" href="/contact">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Join Us in The Service of Lord</p>
            <h1 class="mb-5">Offer Seva</h1>
        </div>
        <div class="row gx-4">

            <!-- Event 1 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/12/annadana-seva.jpg" alt="Annadana Seva
">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">Annadana Seva
                        </a>
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">
                            <span class="text-primary me-1">Donate Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/12/vastra-seva.jpeg" alt="Vastra Seva">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">Vastra Seva</a>
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">
                            <span class="text-primary me-1">Donate Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/12/DSC02154 (1).JPG" alt="Bhog Seva">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">Bhog Seva</a>
                        <a class="d-block h5" href="{{route('annadaan-seva')}}" target="_blank">
                            <span class="text-primary me-1">Donate Now</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Product End -->

<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Join Us in The Service of Lord</p>
            <h1 class="mb-5">Upcoming Festivals</h1>
        </div>

        <!-- Festivals Grid -->
        <div class="row gx-4">

            <!-- Festival 1 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/festivals/karthika deepotsava begins.jpg"
                            alt="Krthika Deepotsava Begins">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}">Karthika Deepotsava Begins</a>
                        <span class="text-primary me-1">07-10-2025</span>
                    </div>
                </div>
            </div>


            <!-- Festival 2 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/festivals/govardhan.jpg" alt="Govardhan Puja">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}">Govardhana Puja</a>
                        <span class="text-primary me-1">22-10-2025</span>
                    </div>
                </div>
            </div>

            <!-- Festival 3 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/festivals/srila prabhupada.jpg"
                            alt="Disappearanve Day of Srila Prabhupada">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}">Disappearance Day of Srila
                            Prabhupada</a>
                        <span class="text-primary me-1">25-10-2025</span>
                    </div>
                </div>
            </div>

            <!-- Festival 4 -->
            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="assets/festivals/gopastami1.jpg" alt="Gopastami">
                        <div class="product-overlay d-flex justify-content-center align-items-center">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i
                                    class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-3 p-sm-2">
                        <a class="d-block h5" href="{{route('annadaan-seva')}}">Gopastami</a>
                        <span class="text-primary me-1">30-10-2025</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Blogs</p>
            <h1 class="mb-5">Latest Blog</h1>
        </div>

        <!-- Blogs Grid -->
        <div class="row gx-4 gy-4">
            @foreach($blogs as $blog)
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                <div class="card blog-card shadow-sm border-0 flex-fill h-100">
                    <img src="{{ asset($blog['image']) }}" class="card-img-top" alt="{{ $blog['title'] }}"
                        style="object-fit: cover; height: 220px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $blog['title'] }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($blog['description'], 100) }}</p>
                        <a href="{{ route('blogs.show', $blog['url']) }}" class="btn btn-gradient mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- More Button -->
        <div class="text-center mt-5">
            <a href="/blogs"
                class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn rounded-pill"
                style="color: #000; font-weight: bold; font-size: clamp(1rem, 3vw, 1.25rem); transition: transform 0.3s ease;">
                See More
                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                    transform: translateX(-100%);
                    animation: shine 2s infinite;">
                </span>
            </a>
        </div>
    </div>
</div>


<section class="hero-section"
    style="background: url('{{ asset('assets/12/home.webp') }}') center/cover no-repeat; color: white; text-align: center; padding-bottom: 20px;">
    <div class="container d-flex flex-column align-items-center">
        <img class="lazyload" alt="Annadanam Mahadanam" width="20%%" height="100%" src="assets/images/image22.png">
        <h1 class="fw-bold display-5 d-inline-block px-3 py-2 rounded" style="background-color: white; color: #1c92dd;">
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
                        <img class="cow-img" src="{{   asset('assets/12/cow.png') }}" alt="Help us Protect Cows">
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

                                <a href="https://harekrishnamandir.org/gau-seva" target="_blank" class="donate-btn1">
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
    left: 150px;
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
    color: #0d6efd;
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



<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3">Latest Blogs</p>
                <h1 class="mb-4">Annadanam Mahadanam</h1>
                <p class="mb-4">Supporting initiatives to provide food for the needy and temple visitors is a
                    compassionate endeavor that not only addresses hunger but also fosters a sense of community and
                    service.
                </p>
                <p><i class="fa fa-check text-primary me-3"></i>High Quality Food</p>
                <p><i class="fa fa-check text-primary me-3"></i>Fresh Ingredients</p>
                <p><i class="fa fa-check text-primary me-3"></i>Industry Standard Hygiene</p>
                <a href="{{route('annadaan-seva')}}"
                    class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn rounded-pill mb-3 mb-md-0"
                    style="color: #000; font-weight: bold; font-size:clamp(1rem, 3vw, 1.25rem);" target="_blank">
                    Donate Now
                    <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                    transform: translateX(-100%);
                    animation: shine 2s infinite;">
                    </span>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="assets/icons/cooking.png" alt="" style="height: 80px;">
                                <h1 class="display-6 text-white" data-toggle="counter-up">2.89</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Crore</span>
                                <span class="fs-5 fw-semi-bold text-secondary">Meals served</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="assets/icons/people.png" alt="" style="height: 80px;">
                                <h1 class="display-6" data-toggle="counter-up">4,500</h1>
                                <span class="fs-5 fw-semi-bold text-primary">People served daily</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="assets/icons/rupee.png" alt="" style="height: 65px;">
                                <h1 class="display-6" data-toggle="counter-up">35</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Cost per meal</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="assets/icons/time-left.png" alt=""
                                    style="height: 65px;">
                                <h1 class="display-6 text-white" data-toggle="counter-up">4 </h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Hours meal prep time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loader Start -->





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