@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun - Spiritual Retreat')

@section('content')

<style>
    .sr-title {
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        color: #1580e8;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .sr-text {
        text-align: center;
        max-width: 850px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 28px;
        color: #444;
    }

    .sr-img {
        display: block;
        margin: 25px auto;
        width: 35%;
    }

    ul.sr-list {
        max-width: 850px;
        margin: 20px auto;
        font-size: 15px;
        line-height: 27px;
        color: #333;
    }

    @media (max-width: 767px) {

        .sr-img {
            width: 85% !important;
        }

    }
</style>

<div class="container py-4">

    {{-- TITLE --}}
    <h2 class="sr-title">Spiritual Retreat</h2>

    {{-- BASIC COURSE DETAILS --}}
    <p class="sr-text">
        <strong>Duration:</strong> 1 month<br>
        <strong>Days:</strong> Every Sunday<br>
        <strong>Time:</strong> 6:30 PM – 7:30 PM<br>
        <strong>Course Language:</strong> Hindi & English
    </p>

    <!-- <img src="{{ asset('assets/sr/banner.png') }}" class="sr-img" alt="Spiritual Retreat"> -->

    {{-- IMPORTANCE --}}
    <h2 class="sr-title">Importance in our Life</h2>

    <p class="sr-text">
        Do you want to feel a life of gratitude despite having so many challenges?
        Do you want to feel God always with you—talking, walking, eating, working?
        <br><br>
        Then join our <strong>Four Day Spiritual Retreat Workshop</strong>, where you will discover a truly God-centric life full of joy and peace, and eventually fall in love with God.
    </p>

    <!-- <img src="{{ asset('assets/sr/importance.png') }}" class="sr-img"> -->

    {{-- 4 DAY WORKSHOP --}}
    <h2 class="sr-title">4 Day Workshop</h2>

    <!-- <ul class="sr-list">
        <li>Law of Karma</li>
        <li>Art of Mind Control</li>
        <li>Can I see God?</li>
        <li>And more deep spiritual wisdom…</li>
    </ul> -->

    <img src="{{ asset('assets/12/workshop1.png') }}" class="sr-img">
    <img src="{{ asset('assets/12/workshop2.png') }}" class="sr-img">
    <img src="{{ asset('assets/12/workshop3.png') }}" class="sr-img">
    <img src="{{ asset('assets/12/workshop4.png') }}" class="sr-img">

    {{-- CONTACT --}}
    <h2 class="sr-title" style="margin-top:30px;">For any queries please contact</h2>

    <p class="text-center fs-4 fw-bold" style="color:#1580e8;">
        8121151508
    </p>

</div>

@endsection