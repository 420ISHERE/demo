@extends('main')



@section('title')
ICVK Session
@endsection

@section('content')


<!-- Page Header Start -->
<div class="container-fluid isvkpage-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="progm-para">
                    <b>India culture and value for kids - ICVK</b> offers spiritual dimension in the thoughts and
                    actions of
                    our children. In today’s time it becomes very essential to go back to our Vedic roots and seed the
                    sublime values and life lessons from our scriptures into the young and growing minds.<br>

                    In ICVK, we strive hard to give proper guidance and means to achieve success in the personal,
                    professional and spiritual lives. We offer active training in life skills, spiritual awareness and
                    social art. The ICVK includes Indian philosophy sessions, and informative discussions on the
                    teachings of great sages of Indian history.
                </p>
            </div>
        </div>
        <div class="row g-4 h-100">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded p-4 h-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/2-qd.jpg" alt="">
                    <h5>ICVK Sessions</h5>
                    <p class="text-justify" style="text-align: justify;">
                        Indian Cultural and Values for Kids (Online &
                        Offline)</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-secondary mx-1 blurBtn" href="{{route('icvk.registration')}}">Register Now</a>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded p-4 h-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/2-qd.jpg" alt="">
                    <h5>Fun Weekends</h5>
                    <p style="text-align: justify;">
                        We're offering online workshops on Vedic Math, Reasoning, Art &
                        Craft and more to help kids get a holistic education.
                    </p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-secondary mx-1 blurBtn" type="button" disabled>Registration Closed</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded p-4 h-100">
                    <img class="img-fluid rounded mb-4" src="assets/programs/2-qd.jpg" alt="">
                    <h5>Culture Camp - 2023</h5>
                    <p style="text-align: justify;">
                        Qualified and experienced professionals across streams guide the children through the modules
                        they've chosen for the camp. Culture Camp is designed to help children become responsible,
                        refined, spiritual and civilized members of the society.
                    </p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-secondary mx-1 blurBtn" type="button" disabled>Registration Closed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team End -->


@endsection