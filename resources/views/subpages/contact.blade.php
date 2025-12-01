@extends('main')

@section('title')
Contact Us
@endsection

@section('content')

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Contact Us</p>
            <h1 class="mb-5">If You Have Any Query, Please Contact Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-4">Get in Touch</h3>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{route('enquiry')}}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"
                                    id="fullname" placeholder="Your Name" required>
                                <label for="fullname">Your Name <span style="color:red">*</span></label>
                            </div>
                            @error('full_name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    placeholder="Your Mobile" required value="{{ old('mobile') }}">
                                <label for="mobile">Mobile Number <span style="color:red">*</span></label>
                            </div>
                            @error('mobile')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" required value="{{ old('email') }}">
                                <label for="email">Your Email <span style="color:red">*</span></label>
                            </div>
                            @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" value="{{ old('subject') }}">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control" placeholder="Leave a message here"
                                    id="message" style="height: 250px">{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <p style="font-size: 1rem;">By clicking 'Send Message', you agree to our <a
                                    href="https://www.hkmdehradun.org/terms-and-conditions" target="_blank"><b>Terms &
                                        Conditions</b></a> and that
                                you have
                                read our <a href="https://www.hkmdehradun.org/privacy-policy" target="_blank"><b>Privacy
                                        Policy</b></a>.</p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5 button" type="submit">Send
                                Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-map-marker-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Our Office</h6>
                        <span>Khasra No. 801, Suddhowala, Near IIM Kashipur Satellite Campus, Dehradun 248015</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-phone-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Call Us</h6>
                        <span><a href="tel:8121151508" style="color: #777;">+91
                                8121151508</a></span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-envelope text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail Us</h6>
                        <span><a href="mailto:contact@hkmdehradun.org"
                                style="color:#777;">contact@hkmdehradun.org</a></span>
                    </div>
                </div>
                <div class=" mt-3 mb-3">
                    <a href="https://www.google.com/maps?ll=30.343166,77.94809&z=17&t=m&hl=en&gl=IN&mapclient=embed&cid=10834571162968809648"
                        target="_blank"
                        class="map-btn">
                        <i class="bi bi-geo-alt-fill me-2"></i> Open in Google Maps
                    </a>
                </div>


                <style>
                    .map-btn {
                        display: inline-block;
                        padding: 12px 28px;
                        font-size: 1rem;
                        font-weight: 600;
                        border-radius: 10px;
                        text-decoration: none;
                        color: #fff !important;
                        background: linear-gradient(135deg, #007bff, #0056d2);
                        transition: all 0.3s ease;
                        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
                    }

                    .map-btn:hover {
                        /* Slightly brighter */
                        background: linear-gradient(135deg, #0a84ff, #0062e6);

                        /* Glow effect */
                        box-shadow: 0 6px 18px rgba(0, 123, 255, 0.45);

                        transform: translateY(-3px);
                    }
                </style>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.2737083498973!2d77.94551527437005!3d30.343170204357545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092b82f1b4fd11%3A0x965c2111967260b0!2sHare%20Krishna%20Mandir%20Dehradun!5e0!3m2!1sen!2sin!4v1752338017356!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
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

    .footer i {
        margin-right: 0px !important;
    }
</style>
@endsection