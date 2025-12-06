@extends('main')

@section('title')

Youth Empowerment Club -Folk
@endsection

@section('content')

<style>
  .mobile-img {
    width: 250px !important;
    height: 250px !important;
  }
</style>

<div style="display: flex; justify-content: center;">
  <img class="img-fluid p-0 m-0" src="https://hkmdehradun.org/assets/images/activities-folk (1).png" alt="hero banner folk" style="max-width:150px;">

</div>
<div style="display: flex; justify-content: center;">
  <h3 style="font-size:32px; text-align:center; color: #1c92dd;">FOLK (Friends of Lord Krishna)</h3>
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
          <img src="{{ asset('assets/images/Front-page.jpg') }}" class="img-fluid" alt="Image 1">
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
          <img src="{{ asset('assets/images/Front-page-3-1.jpg') }}" class="img-fluid" alt="Image 3">
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
          <img src="{{ asset('assets/images/Front-page-1.jpg') }}" class="img-fluid" alt="Image 4">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <div class="p-4">

        <p>
          Hare Krishna Mandir operates a dynamic Youth Empowerment Club known as <strong>FOLK – Friends Of Lord Krishna</strong>.
          This initiative is designed to shape the foundational years of youth with essential life values that stay with them forever.
          Drawing from the profound and time-tested insights of Vedic wisdom, the club offers a structured program called
          <strong>“Secrets of Success”</strong> that imparts practical and transformative knowledge.
        </p>
        <p>
          To empower the youth with the spiritual foundation and ethical clarity needed to make conscious decisions in life,
          excel in their careers, and develop meaningful relationships — all rooted in self-awareness, discipline, and devotion.
        </p>


        <p>
          FOLK is not just a club, it's a life-shaping journey. The initiative blends modern challenges with ancient wisdom
          to help students and young professionals find balance, direction, and joy.
        </p>
      </div>
    </div>
  </div>
</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container my-5">
  <div class="row g-4">

    <!-- CARD EXAMPLE (repeat for all 4 cards) -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100 p-3"
        style="border-left: 5px solid #0057f7;">

        <div class="d-flex flex-column flex-md-row align-items-md-start align-items-center">

          <!-- IMAGE -->
          <img src="assets/programs/3-qd.jpg"
            class="rounded mb-3 mb-md-0 me-md-3 mobile-img"
            style="width:140px; height:140px; object-fit:cover;">

          <!-- TEXT (left aligned always) -->
          <div class="text-start w-100">
            <h5 class="fw-bold mb-2">1. Personality Development Course</h5>

            <div class="small">
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Time management & stress handling</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Emotional intelligence & resilience</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Character building & leadership</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Karma, meditation & mind control</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Real happiness and success</p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- CARD 2 -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100 p-3"
        style="border-left: 5px solid #0057f7;">

        <div class="d-flex flex-column flex-md-row align-items-md-start align-items-center">

          <img src="assets/programs/3-qd.jpg"
            class="rounded mb-3 mb-md-0 me-md-3 mobile-img"
            style="width:140px; height:140px; object-fit:cover;">

          <div class="text-start w-100">
            <h5 class="fw-bold mb-2">2. Weekly Youth Satsangs</h5>

            <div class="small">
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Spiritual discourses</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Life-changing discussions</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Q&A with mentors</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Bhajans & Kirtans</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Prasadam distribution</p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- CARD 3 -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100 p-3"
        style="border-left: 5px solid #0057f7;">

        <div class="d-flex flex-column flex-md-row align-items-md-start align-items-center">

          <img src="assets/programs/3-qd.jpg"
            class="rounded mb-3 mb-md-0 me-md-3 mobile-img"
            style="width:140px; height:140px; object-fit:cover;">

          <div class="text-start w-100">
            <h5 class="fw-bold mb-2">3. Retreats, Camps & Seminars</h5>

            <div class="small">
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Vedic lifestyle workshops</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Meditation & yoga</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Nature treks & service</p>
              <p class="mb-1"><i class="bi bi-check-circle-fill  me-2" style="color: #1c92dd;"></i>Group bonding activities</p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- CARD 4 -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100 p-3"
        style="border-left: 5px solid #0057f7;">

        <div class="d-flex flex-column flex-md-row align-items-md-start align-items-center">

          <img src="assets/programs/3-qd.jpg"
            class="rounded mb-3 mb-md-0 me-md-3 mobile-img"
            style="width:140px; height:140px; object-fit:cover;">

          <div class="text-start w-100">
            <h5 class="fw-bold mb-2">4. Personal Mentoring & Counseling</h5>

            <p class="small mb-0">
              One-on-one mentorship for academic stress, emotional issues,
              confusion, or spiritual doubts. Our trained guides support students
              like trusted mentors.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>



<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <h2 style="font-family:sans-serif" class="text-center fw-bold fs-1">GET EMPOWERED</h2>
      <p class="text-center ">Learning is a lifelong process. But the right lessons can scale your personality to unprecedented levels. Get connected with our wide array of programs.</p>
    </div>
  </div>
  <div class="row justify-content-center my-4">
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/Spiritual-Retreats-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Spiritual Retreats</h2>
      <p class="px-md-5">Enter the Spiritual Domain. Discover the Mysteries of the Self.</p>

    </div>
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/Web-icon-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Web Events</h2>
      <p class="px-md-5">Sit in your place and access Priceless wisdom.</p>

    </div>
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/Club-icon-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Clubs</h2>
      <p class="px-md-5">Explore your hidden Skills. Unleash your Talents</p>

    </div>

  </div>
  <div class="row justify-content-center my-4">
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/Real-Life-Workshops-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Re-Life Workshops</h2>
      <p class="px-md-5">Discover a new way of living. Enrich your Lifestyle.</p>

    </div>
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/Residency-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Residency</h2>
      <p class="px-md-5">Reside with Like Minded and Progressive companions.</p>

    </div>
    <div class="col-md-4 text-center">
      <img src="https://hkmdehradun.org/assets/images/expiditions-1.png">
      <h2 style="font-family:sans-serif" class="fw-bold fs-4 my-2">Expeditions</h2>
      <p class="px-md-5">Enter the Divine Realms. Experience the Transcendence.</p>

    </div>

  </div>
</div>




<div class="container p-md-5">
  <div class="row justify-content-center">
    <div class="col-md-7 ">
      <h2 style="font-family:sans-serif" class="text-center fw-bold fs-1">From Our Participants</h2>

    </div>
  </div>
  <div class="container">
    <!-- First Row WITH gap between columns -->
    <div class="row my-4 g-4">
      <div class="col-md-6">
        <div class="d-flex shadow bg-white rounded h-100" style="border-bottom:2px solid #0057f7;">
          <div class="w-25">
            <img src="https://hkmdehradun.org/assets/images/Test-1.png" class="img-fluid">
          </div>
          <div class="w-75 p-2 align-self-center">
            <p>“I found new ways to do the same things I earlier would mess up so easily. Now I have become super efficient. I recommend this to everyone.”</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="d-flex shadow bg-white rounded h-100" style="border-bottom:2px solid #0057f7;">
          <div class="w-25">
            <img src="https://hkmdehradun.org/assets/images/Test-2.png" class="img-fluid">
          </div>
          <div class="w-75 p-2 align-self-center">
            <p>“These programs have changed my thought process all together. Now I can take very effective life transforming decisions which has helped me and my business reach new heights.”</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Row WITH gap between columns -->
    <div class="row my-4 g-4">
      <div class="col-md-6">
        <div class="d-flex shadow bg-white rounded h-100" style="border-bottom:2px solid #0057f7;">
          <div class="w-25">
            <img src="https://hkmdehradun.org/assets/images/Test-3.png" class="img-fluid">
          </div>
          <div class="w-75 p-2 align-self-center">
            <p>“I was extremely enchanted by the divine atmosphere and energetic workshop. I will always reminisce the blissful time I’d spent here.”</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="d-flex shadow bg-white rounded h-100" style="border-bottom:2px solid #0057f7;">
          <div class="w-25">
            <img src="https://hkmdehradun.org/assets/images/Test-4.png" class="img-fluid">
          </div>
          <div class="w-75 p-2 align-self-center">
            <p>“This program has helped me overcome many inhibitions I’ve been facing. I am so happy that I can stretch beyond my limits at ease.”</p>
          </div>
        </div>
      </div>
    </div>
  </div>



</div>
</div>

<div style="background:#5ba1eb" class="container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-md-7 ">
      <h2 style="font-family:sans-serif" class="text-center fw-bold fs-1">LET'S GET STARTED</h2>

    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 ">
      <p style="font-family:sans-serif" class="text-center  fs-5">Let the amazing journey begin. You will relish every mile traversed.
        Enrol in our Flagship Courses now to avail a Special Discount.</p>

    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 text-center"> <a href="{{route('contact')}}">


        <button type="button" class="donate-btn1">Lets's Begin!</button> </a>
    </div>
  </div>

</div>


@endsection