@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun - Gita Life Course')

@section('content')

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

    @media (max-width: 767px) {

        .glc-img {
            width: 40% !important;
        }

        .glc-img-wide {

            width: 80% !important;
        }

    }

    .glc-img-wide {
        display: block;
        margin: 25px auto;
        width: 35%;
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
    }
</style>

<div class="container py-4">

    {{-- INTRODUCTION --}}
    <h2 class="glc-title">Introduction</h2>

    <p class="glc-text">
        Gita Life Course (GLC) is a comprehensive training program aimed at learning the basics of Gita & its application in life.
        The course equips the candidate with powerful life tools which empower one to set the right goals and make clear decisions.
        Well-qualified and experienced mentors, who are full-time dedicated missionaries guide you through this experiential journey.
        Enter the gateway to an elated and enlightened life.
    </p>

    <img src="{{ asset('assets/12/intro.png') }}" class="glc-img" style="width: 15%;">

    {{-- CURRICULUM --}}
    <h2 class="glc-title">Curriculum</h2>

    <img src="{{ asset('assets/12/curriculum.png') }}" class="glc-img-wide">

    <p class="glc-small-text">
        The vast knowledge of Vedic literature is condensed in Bhagavad-gita, known as the crown jewel of Vedic wisdom.
        The course unfolds the mystery of Gita practically and sublimely. It includes,
    </p>

    <ul class="glc-list">
        <li>Gita Study</li>
        <li>Vedic Ideology</li>
        <li>Practical Spirituality</li>
        <li>Educational Tours</li>
        <li>Mantra Meditation</li>
        <li>Personal Mentoring</li>
    </ul>

    {{-- COURSE DETAILS --}}
    <h2 class="glc-title">Course Details</h2>

    <div class="glc-list">
        <p><strong>Eligibility:</strong> Candidate must be a minimum of 16 years of age.</p>
        <p><strong>Medium of instruction:</strong> English & Hindi</p>
        <p><strong>Course Fees:</strong> ₹5000/-</p>
        <p><strong>Course Duration:</strong> 6 months</p>
        <p><strong>Batches:</strong> (1) Jan–Jun & (2) Jul–Dec</p>
        <p><strong>Day:</strong> Every Sunday</p>
        <p><strong>Time:</strong> 4:00 pm to 6:15 pm</p>
    </div>

    <h3 class="glc-title" style="font-size:26px;">For any queries please contact</h3>
    <p class="text-center fs-4 fw-bold" style="color:#1580e8;">8121151508</p>

    {{-- REGISTRATION LINK --}}
    <h2 class="glc-title">Registration link</h2>
    <p class="text-center">
        <a href="#" style="color:#1580e8; font-weight:600;">
            Link
        </a>
    </p>

    <img src="{{ asset('assets/12/registration.png') }}" class="glc-img-wide">

    {{-- SPECIAL FEATURES --}}
    <h2 class="glc-title">Special Features</h2>

    <img src="{{ asset('assets/12/features.png') }}" class="glc-img-wide">

    <ul class="glc-list">
        <li>PowerPoint Presentations</li>
        <li>Well organized workbook</li>
        <li>Practical Training</li>
        <li>Personal Mentoring</li>
        <li>Interactive sessions</li>
        <li>Sublime course material</li>
    </ul>

    {{-- STUDENT KIT --}}
    <h2 class="glc-title">Student’s Kit</h2>

    <p class="glc-small-text">
        The students are provided with a course kit to facilitate their academics. The kit features:
    </p>

    <ul class="glc-list">
        <li>Bhagavad-gita As It Is</li>
        <li>Gita Life Course Workbook</li>
        <li>Gita Life Course Bag</li>
        <li>Gita Life Course Pen</li>
        <li>Mantra Meditation Kit</li>
    </ul>

    <img src="{{ asset('assets/12/kit.png') }}" class="glc-img-wide">

    {{-- EXAMS --}}
    <h2 class="glc-title">Exams & Certificates</h2>

    <img src="{{ asset('assets/12/exam.png') }}" class="glc-img-wide">

    <p class="glc-small-text">
        To reinforce the learning of the subject, there are revision tests.
        Additionally, short home assignments enhance the grasping of the subject.
        All candidates passing the course receive a certificate. Passing percentage is 50%.
        Merit students are awarded Merit certificates.
    </p>

    <img src="https://hkmhyderabad.org/assets/website/images/activities/course.jpg" class="glc-img">

    <div class="text-center mt-3">
        <a href="#" style="color:#1580e8; font-weight:600;">Click here to download English Pamphlet</a><br><br>
        <a href="#" style="color:#1580e8; font-weight:600;">हिन्दी पेम्फलेट डाउनलोड करने के लिए यहाँ क्लिक करें</a>
    </div>

</div>

@endsection