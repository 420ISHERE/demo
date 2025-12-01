@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun - Gita Advance Course')

@section('content')

<style>
    .gac-title {
        font-size: 32px;
        font-weight: 700;
        color: #1580e8;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 25px;
    }

    .gac-text {
        text-align: center;
        max-width: 880px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 28px;
        color: #444;
    }

    .gac-img {
        display: block;
        margin: 25px auto;
        width: 260px;
    }

    .gac-img-wide {
        display: block;
        margin: 25px auto;
        width: 450px;
    }

    ul.gac-list {
        max-width: 840px;
        margin: 20px auto;
        font-size: 15px;
        line-height: 27px;
        color: #333;
    }

    .small-text {
        max-width: 850px;
        margin: 10px auto;
        font-size: 14px;
        color: #444;
        text-align: center;
    }

    @media (max-width: 767px) {

        .gac-img {
            width: 40% !important;
        }

        .gac-img-wide {

            width: 80% !important;
        }

    }
</style>

<div class="container py-4">


    <h2 class="gac-title">Gita Advance Course</h2>

    <p class="gac-text">
        Gita Advance Course (GAC) is a level 2 training program to learn the specific topics of Gita & its application in life.
        The course equips the candidate with powerful life tools that empower one to set the right goals and make clear decisions.
        Well-qualified and experienced mentors, who are full-time dedicated missionaries, guide you through this experiential journey.
        Enter the gateway to an elated and enlightened life.
    </p>

    <img src="{{ asset('assets/12/intro1.png') }}" class="gac-img" alt="GAC Intro">


    <h2 class="gac-title">Curriculum</h2>

    <img src="{{ asset('assets/12/curriculum.png') }}" class="gac-img-wide" alt="Curriculum">

    <p class="small-text">
        The vast knowledge of Vedic literature is condensed in Bhagavad-gita, known as the crown jewel of Vedic wisdom.
        The course unfolds the mystery of Gita practically and sublimely. It includes:
    </p>

    <ul class="gac-list">
        <li>Gita Study</li>
        <li>Vedic Ideology</li>
        <li>Practical Spirituality</li>
        <li>Educational Tours</li>
        <li>Mantra Meditation</li>
        <li>Personal Mentoring</li>
    </ul>


    <h2 class="gac-title">Course Details</h2>

    <div class="gac-list">
        <p><strong>Eligibility:</strong> Candidate must be a minimum of 16 years of age & completed Gita Life Course</p>
        <p><strong>Medium of instruction:</strong> English & Hindi</p>
        <p><strong>Course Fees:</strong> ₹5000/-</p>
        <p><strong>Course Duration:</strong> 6 months</p>
        <p><strong>Batches:</strong> (1) Jan–Jun & (2) Jul–Dec</p>
        <p><strong>Day:</strong> Every Sunday</p>
        <p><strong>Time:</strong> 4:00 pm to 6:15 pm</p>
    </div>

    <h3 class="gac-title" style="font-size:26px;">For any queries please contact</h3>
    <p class="text-center fs-4 fw-bold" style="color:#1580e8;">8121151508</p>


    <h2 class="gac-title">Registration link</h2>
    <p class="text-center">
        <a href="https://forms.gle/4wCJioVFFNboTA3A8" style="color:#1580e8; font-weight:600;">
            https://forms.gle/4wCJioVFFNboTA3A8
        </a>
    </p>

    <!-- <img src="{{ asset('assets/12/registration.png') }}" class="gac-img-wide" alt="Registration"> -->


    <h2 class="gac-title">Special Features</h2>

    <img src="{{ asset('assets/12/features.png') }}" class="gac-img-wide" alt="Features">

    <ul class="gac-list">
        <li>PowerPoint Presentations</li>
        <li>Well organized workbook</li>
        <li>Practical Training</li>
        <li>Personal Mentoring</li>
        <li>Interactive sessions</li>
        <li>Sublime course material</li>
    </ul>


    <h2 class="gac-title">Student’s Kit</h2>

    <p class="small-text">
        The students are provided with a course kit to facilitate their academics. The kit features:
    </p>

    <ul class="gac-list">
        <li>Bhagavad-gita As It Is</li>
        <li>Gita Advance Course Workbook</li>
        <li>Gita Advance Course Bag</li>
        <li>Gita Advance Course Pen</li>
        <li>Mantra Meditation Kit</li>
        <li>Hare Krishna Mandir Image</li>
    </ul>

    <img src="{{ asset('assets/12/kit.png') }}" class="gac-img-wide">


    <h2 class="gac-title">Exams & Certificates</h2>

    <img src="{{ asset('assets/12/exams.png') }}" class="gac-img-wide">

    <p class="gac-text" style="margin-top:10px;">
        To reinforce the learning of the subject, there are revision tests.
        Additionally, short home assignments enhance the grasping of the subject matter.
        <br><br>
        <strong>Certificates</strong><br>
        All the candidates passing the course receive the certificate.
        The passing percentage is 50%. Merit students are awarded Merit certificates.
    </p>

</div>

@endsection