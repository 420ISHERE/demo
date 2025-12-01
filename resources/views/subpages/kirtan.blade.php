@extends('main')




@section('title')
    HKM Dehradun - House Kirtan
@endsection
@section('content')


<!-- ✅ Banner Section -->
<div class="w-100">
    <img src="{{ asset('assets/12/Chant Hare Krishna, Bring Peace to Your Home!.webp') }}" alt="House Kirtan Banner" class="img-fluid w-100 d-block" style="max-height: 500px; object-fit: cover;">
</div>

<!-- ✅ Content Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12  text-md-start" >
            <h2 class="mb-4" style="text-align:center;">Host kirtan and katha at your home inviting Sadhus.</h2>
            <p class="mb-4" style="text-align:center;">
                Satsang is association of people who are searching for spiritual truth. In addition to other programs offered by Hare Krishna Movement Dehra we can plan a program for you to be held at your home. Invite your friends and colleagues for an evening of kirtan, Bhagavad Gita discussion, japa chanting, and prasadam. Through reading and understanding transcendental spiritual books in an interactive and engaging environment, participating in kirtan accompanied with musical instruments and enjoying delicious sattvic prasadam together, the whole evening is spiritually enlightening for everyone including kids. Participating in Satsang Programs motivates participants to cultivate spiritual growth and new devotional habits and increase their natural love for Krishna, which manifests itself in increased happiness and peacefulness.</p>
        </div>

        <!-- ✅ Image Section -->
        
    </div>
</div>
<!-- ✅ Responsive Image Gallery -->
<div class="container mt-5">
    <div class="row text-center">
        <div class="col-12 mb-4">
            <h3 class="mb-3">Moments from House Kirtan</h3>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
            <img src="{{ asset('assets/12/kirtanimg001.jpg') }}" alt="Kirtan Image 1" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <img src="{{ asset('assets/12/kirtanimg002.jpg') }}" alt="Kirtan Image 2" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <img src="{{ asset('assets/12/kirtanimg003.jpg') }}" alt="Kirtan Image 3" class="img-fluid rounded shadow">
        </div>
    </div>
</div>
<!-- ✅ Book Now Section -->
<div class="container text-center py-5">
    <h3 class="mb-3">Book Now for a Soulful House Kirtan</h3>
    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-5">
        Contact Us Now
    </a>
</div>


@endsection

