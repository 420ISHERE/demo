@extends('main')



@section('title')

Programs
@endsection

@section('content')


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 ">Programs</h1>
        <nav aria-label="breadcrumb ">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Start -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/1-qd.jpg" alt="">
                    <h5>Gita Life</h5>
                    <p class="text-justify">
                        Bhagavad Gita Sessions on Sunday evening, 4:30 pm to 6:30 pm, at Dehradun. Each session delves
                        into a few
                        verses of the Bhagavad Gita followed by a Q&A. The sessions conclude with exuberant Kirtans and
                        Maha-Prasadam.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="{{route('gita-for-youth')}}">Know
                            More</a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/2-qd.jpg" alt="">
                    <h5>ICVK (For kids)</h5>
                    <p class="text-justify">
                        India culture and values for kids – ICVK – offers a spiritual dimension to the thoughts and
                        actions of our
                        children. HKM Dehradun runs various courses, culture camps throughout the year both offline and
                        online.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="{{route('icvk-programm')}}">Know
                            More</a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/3-qd.jpg" alt="">
                    <h5>FOLK (For Youth)</h5>
                    <p class="text-justify">
                        Youth wing of the Hare Krishna Movement, Dehradun. It was formed with a vision to empower the
                        youth by
                        facilitating them to practice the sacred principles of spirituality in their daily lives and
                        help them attain
                        real happiness.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECOND ROW -->
        <div class="row g-4 mt-3">
            <!-- CARD 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/srila-prabhupada.webp" alt="">
                    <h5>Srila Prabhupada Ashraya</h5>
                    <p class="text-justify">
                        HKM Dehradun provides a great opportunity to receive the divine shelter of a pure devotee of
                        Lord Krishna,
                        His Divine Grace A.C. Bhaktivedanta Swami Prabhupada, the founder acharya of the worldwide Hare
                        Krishna
                        Movement. This program is a step-by-step journey towards advancing in our spiritual life.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="/governance">Know More</a>
                    </div>
                </div>
            </div>

            <!-- CARD 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/bhagavad-gita-english.webp" alt="">
                    <h5>Online Gita Classes</h5>
                    <p class="text-justify">
                        HKM Dehradun is hosting free online sessions on Zoom. These sessions are open to anyone who is
                        interested in
                        learning the Bhagavad Gita systematically and its application which can benefit their lives.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="{{route('gita-for-youth')}}">Know
                            More</a>
                    </div>
                </div>
            </div>

            <!-- CARD 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                <div class="team-item rounded p-4 d-flex flex-column w-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/learn-gita.webp" alt="">
                    <h5>1-on-1 Bhagavad Gita</h5>
                    <p class="text-justify">
                        Fully personalized, one-on-one 12 sessions on 12 Key concepts from the Bhagavad Gita with the
                        experienced
                        practitioners from Hare Krishna Movement at your place, at your pace.
                    </p>
                    <div class="mt-auto d-flex justify-content-center">
                        <a class="btn btn-secondary mx-1 button transition" href="{{route('gita-for-youth')}}">Know
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team End -->

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
</style>
@endsection