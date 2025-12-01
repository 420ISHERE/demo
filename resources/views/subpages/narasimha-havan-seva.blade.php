@extends('main')




@section('title')
    HKM Dehradun - Narasimha Havn Seva
@endsection
@section('content')


<!-- ✅ Banner Section -->
<div class="w-100">
    <img src="{{ asset('assets/12/Chant Hare Krishna, Bring Peace to Your Home! (1).png') }}" alt="House Kirtan Banner" class="img-fluid w-100 d-block" style="max-height: 500px; object-fit: cover;">
</div>
<!-- ✅ Content Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12  text-md-start" >
            <h2 class="mb-4" style="text-align:center;">Narasimha Havan Seva.</h2>
            <p class="mb-4" style="text-align:center;">
               Every Saturday Morning at Hare Krishna Movement Dehradun
A Sacred Fire Ceremony for Divine Protection

Narasimha Havan Seva is a spiritually potent and uplifting ritual performed every Saturday morning at Hare Krishna Movement Dehradun. This sacred fire ceremony is dedicated to Lord Sri Lakshmi Narasimhadeva, the divine protector and the remover of all obstacles in the lives of His devotees.

The Significance of the Havan
During the Havan, ghee and sacred herbs are offered into the fire while chanting powerful Vedic mantras and prayers. The ritual is performed with utmost devotion and is believed to:

Remove negative energies and blockages

Provide protection from fear, anxiety, and distress

Promote peace, clarity, and inner strength

Purify the environment and consciousness

Support spiritual growth and well-being</p>

        </div>

        <!-- ✅ Image Section -->
        
    </div>
</div>
<!-- ✅ Responsive Image Gallery -->
<div class="container mt-5">
    <div class="row text-center">
        <div class="col-12 mb-4">
            <h3 class="mb-3">Contact/Donate Details</h3>
        </div>

      
        <div class="col-md-6 col-sm-6 mb-6">
            
                <hr style="width: 30px; border: 2px solid #f47716;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.2737083498973!2d77.94551527437005!3d30.343170204357545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092b82f1b4fd11%3A0x965c2111967260b0!2sHare%20Krishna%20Mandir%20Dehradun!5e0!3m2!1sen!2sin!4v1752338017356!5m2!1sen!2sin" width="500" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <h5 class="text-uppercase text-orange fw-bold">Contact Us Now</h5>
                <p>For participation, sponsorship, or inquiries about Narasimha Havan Seva, please get in touch:</p>
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-5">
        Contact Us Now
    </a>
        </div>
        <div class="col-md-6 col-sm-6 mb-6">
           
                <hr style="width: 30px; border: 2px solid #f47716;">
                <img src="{{ asset('assets/12/DSC02154%20(1).JPG') }}" class="img-fluid mb-2" alt="Donate for Annadan">
                <h5 class="text-uppercase text-orange fw-bold">Donate Now</h5>
                <p>Support our sacred mission of Annadan — feeding the hungry and spreading divine service. Your small contribution can bring smiles and blessings.</p>
                <a href="{{ url('/annadaan-seva') }}" class="btn btn-warning text-black" style="background-color:#ecdd5e !important;">Donate for Annadan</a>
        </div>
    </div>
</div>

<div class="container text-center py-5">
<h3>
    Location:
</h3>
<p>
    Hare Krishna Movement Dehradun
    <p>
        <h3>
    Contact for Participation or Sponsorship:
</h3>
<p>
   Phone/WhatsApp: +91 8121151508
    <p>
        </div>

@endsection
