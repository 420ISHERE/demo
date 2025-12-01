@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun - Gita Shloka Course')

@section('content')

<style>
    .gsc-title {
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        color: #1580e8;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .gsc-text {
        text-align: center;
        max-width: 850px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 28px;
        color: #444;
    }

    .gsc-img {
        display: block;
        margin: 25px auto;
        width: 300px;
    }

    ul.gsc-list {
        max-width: 850px;
        margin: 20px auto;
        font-size: 15px;
        line-height: 27px;
        color: #333;
    }
</style>

<div class="container py-4">

    {{-- TITLE --}}
    <h2 class="gsc-title">Gita Shloka Course</h2>

    {{-- COURSE BASIC DETAILS --}}
    <p class="gsc-text">
        <strong>Duration:</strong> 3 months<br>
        <strong>Days:</strong> Monday, Wednesday and Friday<br>
        <strong>Time:</strong> 8:00 PM – 8:30 PM<br>
        <strong>Platform:</strong> Zoom<br>
        <strong>Course Language:</strong> Hindi & English
    </p>

    {{-- IMAGE --}}
    <!-- <img src="{{ asset('assets/gsc/banner.png') }}" class="gsc-img" alt="Gita Shloka"> -->

    {{-- BENEFITS --}}
    <h2 class="gsc-title">What do you gain from this course? (Key Benefits)</h2>

    <ul class="gsc-list">
        <li>Learn important shlokas with their translations</li>
        <li>Word-by-word meaning is explained for easy understanding</li>
        <li>Improve your pronunciation and chanting skills</li>
        <li>Simplified learning by splitting complex Sanskrit words</li>
        <li>Practical application and philosophical importance</li>
    </ul>

    <img src="{{ asset('assets/12/benefits.png') }}" class="gsc-img">

    {{-- WHAT YOU GET --}}
    <h2 class="gsc-title">What do you get from us?</h2>

    <ul class="gsc-list">
        <li>40+ live, interactive sessions</li>
        <li>Limited admissions for personal mentoring</li>
        <li>Opportunity to raise your doubts and get answers</li>
        <li>Shloka recordings for practice at your convenience</li>
        <li>Flashcards of shlokas in Devanagari and Roman scripts</li>
        <li>Hare Krishna Mandir Image</li>
    </ul>

    <img src="{{ asset('assets/12/material.png') }}" class="gsc-img">

    {{-- ELIGIBILITY --}}
    <h2 class="gsc-title">What are the prerequisites?</h2>

    <p class="gsc-text">
        This course expects no previous exposure to Sanskrit language.
        Knowing the Devanagari script is beneficial to understand the finer nuances of pronunciation.
    </p>

    {{-- REGISTRATION --}}
    <h2 class="gsc-title">Registration Link</h2>

    <p class="text-center">
        <a href="#" target="_blank" style="color:#1580e8; font-weight:600;">
            Link
        </a>
    </p>

    {{-- CONTACT --}}
    <h2 class="gsc-title" style="margin-top:30px;">For any queries please contact</h2>

    <p class="text-center fs-4 fw-bold" style="color:#1580e8;">
        8121151508
    </p>

</div>

@endsection