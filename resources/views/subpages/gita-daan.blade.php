@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun - Gita Daan')

@section('content')

<!-- BOOTSTRAP + ANIMATION LIBRARIES -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    new WOW().init();
</script>

<style>
    .glc-title {
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        color: #1580e8;
        margin-top: 40px;
        margin-bottom: 25px;
    }

    .glc-text {
        font-size: 15px;
        line-height: 26px;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .glc-img {
        display: block;
        margin: 25px auto;
        width: 240px;
    }

    .glc-img-wide {
        display: block;
        margin: 25px auto;
        width: 50px;
    }

    .glc-list {
        max-width: 800px;
        margin: 20px auto;
        font-size: 15px;
        line-height: 28px;
    }

    .glc-small-text {
        max-width: 850px;
        margin: 10px auto;
        font-size: 14px;
        color: #444;
        text-align: center;
    }

    .testimonial-box {
        max-width: 800px;
        margin: 15px auto;
        background: #f8f9fa;
        padding: 18px 20px;
        border-left: 4px solid #1580e8;
        border-radius: 6px;
        font-size: 15px;
        color: #333;
    }

    .gallery-img {
        width: 100%;
        max-width: 260px;
        margin: 10px auto;
        display: block;
        border-radius: 8px;
    }
</style>

<div class="container py-4">

    {{-- MAIN TITLE --}}
    <h2 class="glc-title wow animate__animated animate__fadeInDown">Share the Gyan, Spread the Light</h2>

    <p class="glc-text wow animate__animated animate__fadeInUp">
        Bhagavad Gita Book Distribution<br>
        Help us bring the timeless wisdom of the Gita to schools, elderly homes, villages, and more.
    </p>

    <img src="{{ asset('assets/gita/main.png') }}" class="glc-img-wide wow animate__animated animate__zoomIn">

    {{-- ABOUT SECTION --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">About Gita Distribution</h2>

    <p class="glc-text wow animate__animated animate__fadeIn">
        The Bhagavad Gita is a 700-verse poem embedded within the Mahabharata…
    </p>

    <p class="glc-small-text wow animate__animated animate__fadeIn">
        It teaches universal themes such as the purpose of life, self-realization, courage, and peace.
    </p>

    <p class="glc-small-text wow animate__animated animate__fadeIn">
        Distributing the Gita is about planting seeds of spiritual wisdom that can transform lives.
    </p>

    {{-- OUR INITIATIVES --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">Our Initiatives</h2>

    <ul class="glc-list wow animate__animated animate__fadeInLeft">
        <li><strong>Schools:</strong> Interactive sessions, storytelling, and value-based teaching.</li>
        <li><strong>Old Age Homes:</strong> Providing comfort, companionship, and spiritual support.</li>
        <li><strong>Villages:</strong> Satsangs, discussions, and distribution to families.</li>
    </ul>

    <img src="{{ asset('assets/gita/initiatives.png') }}" class="glc-img-wide wow animate__animated animate__zoomIn">

    {{-- GET INVOLVED --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">Get Involved</h2>

    <ul class="glc-list wow animate__animated animate__fadeInRight">
        <li><strong>Donate:</strong> Support book printing & distribution.</li>
        <li><strong>Volunteer:</strong> Help reach schools, villages, and old age homes.</li>
        <li><strong>Spread the Word:</strong> Share with friends & social media.</li>
    </ul>

    <img src="{{ asset('assets/gita/getinvolved.png') }}" class="glc-img-wide wow animate__animated animate__zoomIn">

    {{-- TESTIMONIALS --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">Testimonials</h2>

    <div class="testimonial-box wow animate__animated animate__fadeInLeft">
        <strong>Sunita Devi:</strong> The Gita gave me peace and confidence to face challenges.
    </div>

    <div class="testimonial-box wow animate__animated animate__fadeInRight">
        <strong>Suresh Kumar:</strong> My children love Gita stories; it improved their values.
    </div>

    <div class="testimonial-box wow animate__animated animate__fadeInLeft">
        <strong>Ramesh Patel:</strong> The Gita united our community in compassion and harmony.
    </div>

    {{-- GALLERY --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">Gallery</h2>

    <div class="row text-center">
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery1.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery2.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery3.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery4.jpg') }}" class="gallery-img">
        </div>
    </div>

    {{-- MORE IMAGES --}}
    <div class="row text-center mt-3">
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery5.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery6.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery7.jpg') }}" class="gallery-img">
        </div>
        <div class="col-md-3 col-6 wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/gita/gallery8.jpg') }}" class="gallery-img">
        </div>
    </div>

    {{-- VIDEOS --}}
    <h2 class="glc-title wow animate__animated animate__fadeInUp">Videos</h2>
    <p class="glc-text wow animate__animated animate__fadeIn">Coming soon...</p>

</div>

@endsection