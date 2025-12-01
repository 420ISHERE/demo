@extends('main')

@section('title', 'Sri Krishna Janmashtami')

@section('content')
<div class="container-fluid bg-dark text-white min-vh-70 d-flex flex-column justify-content-between position-relative"
    style="background: url('{{ asset('assets/2/background1.png') }}') no-repeat center center/cover;">

    <!-- Crackers Decoration -->
    <img src="{{ asset('assets/2/crackers.png') }}" alt="Crackers"
        class="position-absolute crackers-decor d-none d-md-block">

    <div class="row w-100 align-items-center text-center px-2 px-sm-3 px-lg-5 flex-grow-1">
        <!-- Left Side Krishna Image -->
        <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/2/yashoda-krishna.png') }}" class="img-fluid krishna-glow"
                style="width: 80%; max-width: 320px;" alt="Krishna Ji">
        </div>

        <!-- Right Side Content -->
        <div
            class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-uppercase position-relative">
            <!-- Makhan Pot for large screens -->
            <img src="{{ asset('assets/2/makhan-pot.png') }}" alt="Makhan Pot"
                class="position-absolute top-0 end-0 d-none d-lg-block"
                style="width: 90px; height: auto; border-radius: 50%; margin: 10px; transform: rotate(-15deg);">

            <!-- Responsive heading and icons -->
            <div class="d-flex align-items-center mb-2 justify-content-center" style="gap: 10px;">
                <img src="{{ asset('assets/2/makhan-pot.png') }}" alt="Makhan Pot"
                    style="width: 32px; height: auto; border-radius: 50%; transform: rotate(15deg) scaleX(-1);" />
                <h1 class="fw-bold text-warning mb-0" style="font-size:clamp(1.5rem, 5vw, 2.5rem);">SRI KRISHNA</h1>
                <img src="{{ asset('assets/2/makhan-pot.png') }}" alt="Makhan Pot"
                    style="width: 32px; height: auto; border-radius: 50%; transform: rotate(-15deg);" />
            </div>
            <h1 class="fw-bold text-warning" style="font-size:clamp(2rem, 8vw, 3.5rem);">JANMASHTAMI</h1>
            <p class="fs-6 fs-md-5 text-white mb-4 px-2 px-md-0">Choose Your seva and receive maha prasadam at your home
            </p>

            <!-- Crackers for small screens -->
            <img src="{{ asset('assets/2/crackers.png') }}" alt="Crackers"
                class="position-absolute crackers-decor d-md-none" style="top:10%;left:5%;width:80px;">

            <a href="/checkout/10"
                class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn mb-3 mb-md-0"
                style="color: #000; font-weight: bold; font-size:clamp(1rem, 3vw, 1.25rem);">
                Donate Now
                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                    transform: translateX(-100%);
                    animation: shine 2s infinite;">
                </span>
            </a>
        </div>
    </div>

    <!-- Countdown Timer -->
    <div id="countdown" class="countdown-box text-center"></div>
</div>

<div class="bg-light">
    <div class="container bg-light py-5">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-6">
                <h2 class="text-primary mb-3">Offer Janmashtami Seva &amp; Receive Divine Blessings</h2>
                <p>
                    Donate generously on this Auspicious Day of Janmashtami. Perform various sevas which include
                    <span class="fw-bold">Makhan Mishri Seva, Jhulan Seva, Maha Abhishekam Seva, Vastra Alankar
                        Seva</span>
                    and other sevas for the Pleasure of Sri Sri Krishna Balaram.
                </p>
                <p>
                    Donate towards any of the sevas listed here and receive
                    <span class="fw-bold">special prasadam</span> and the
                    <span class="fw-bold">unlimited blessings</span> of the Lord.
                </p>
                <a href="/checkout/10"
                    class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn">Donate
                    Now
                    <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                             transform: translateX(-100%);
                             animation: shine 2s infinite;">
                    </span></a>
            </div>
            <div class="col-md-5 d-flex justify-content-center">
                <img src="{{ asset('assets/2/janmashtami-event.png') }}" alt="Janmashtami Seva Event" class="img-fluid"
                    style="max-width: 70%; height: auto;" />
            </div>

        </div>
    </div>
</div>

<div style="background-image: linear-gradient(-225deg, #FFF8CC 0%, #AEE1F9 48%, #FFE6B3 100%);">


    <section class="pb-4 py-md-4 ">
        <div class="container-md g-md-0">
            <p class="ph-2 pt-2 fw-bolder text-hkm d-none d-md-block">Hare Krishna Movement celebrates <span
                    class="text-alt-hkm">Sri Krishna Janmashtami.</span> Here is a wonderful opportunity to invoke the
                choicest blessings of the Lord on this joyous occassion. <span class="text-alt-hkm">Hare Krishna.</span>
            </p>
            <p class="bt-0 pt-3 fw-bolder text-hkm d-block d-md-none">Hare Krishna Movement celebrates <span
                    class="text-alt-hkm">Sri Krishna Janmashtami.</span> Here is a wonderful opportunity to invoke the
                choicest blessings of the Lord on this joyous occassion. <span class="text-alt-hkm">Hare Krishna.</span>
            </p><a href="/cart/">
                <div class="d-none d-sm-block ud-checkout-sticker d-sm-none">
                    <div class="btn btn-lg btn-hkm ud-checkout-button"><svg xmlns="http://www.w3.org/2000/svg"
                            width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z">
                            </path>
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                            </path>
                        </svg>
                        <div class="ud-checkout-title">Proceed to checkout</div>
                        <div class="ud-checkout-counter">0</div>
                    </div>
                </div>
                <div class="d-block d-sm-none ud-checkout-sticker-mobile d-none">
                    <div class="btn btn-lg btn-hkm ud-checkout-button"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z">
                            </path>
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                            </path>
                        </svg>
                        <div class="ud-checkout-title">Proceed to checkout</div>
                        <div class="ud-checkout-counter">0</div>
                    </div>
                </div>
            </a>
            <div class="row my-2">
                <div class="col">
                    <div class="donation-switch form-check form-switch d-flex gap-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="multiToggle" />
                        <label class="form-check-label text-hkm bt-1_5 align-self-center" for="multiToggle"
                            style="padding:0px !important;">Select multiple donations</label>
                    </div>
                </div>
            </div>

            <!-- Multi-Checkout Button -->
            <div class="text-end mb-4 d-none" id="multiCheckoutContainer">
                <button class="btn btn-success" id="proceedMultiCheckout">Proceed to Checkout (<span
                        id="multiTotal">₹0</span>)</button>
            </div>
    </section>

    <div class="container py-4">
        <div class="row gx-3 gy-4" id="donationGrid">

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/Untitled design (4).png" alt="Archana Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Archana Seva</p>
                            <p class="donation-amount">₹1,100</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="11" data-price="1100" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
                                transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                                transform: translateX(-100%); animation: shine 2s infinite;">
                                </span>
                            </button>


                        </div>
                    </div>
                    <div class="card-body-custom">
                        <!-- Optional: if you want to show name/price below image as well, else remove this -->
                        Archana Seva
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/07-22 at 3.58.04 PM.png" alt="Makhan Mishri Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Makhan Mishri Seva</p>
                            <p class="donation-amount">₹2,100</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="12" data-price="2100" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Makhan Mishri Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/Untitled design (3).png" alt="Pushpa Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Pushpa Seva</p>
                            <p class="donation-amount">₹5,100</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="13" data-price="5100" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Pushpa Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/Untitled design.png" alt="Abhishekam Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Abhishekam Seva</p>
                            <p class="donation-amount">₹11,000</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="14" data-price="11000" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Abhishekam Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/Untitled design (2).png" alt="Chappan Bhog Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Chappan Bhog Seva</p>
                            <p class="donation-amount">₹15,000</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="15" data-price="15000" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Chappan Bhog Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/DSC02154 (1).JPG" alt="Prasadam Seva" style="object-fit: cover;">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Prasadam Seva</p>
                            <p class="donation-amount">₹20,000</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="16" data-price="20000" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Prasadam Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/Untitled design (5).png" alt="Alankara Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Alankara Seva</p>
                            <p class="donation-amount">₹25,000</p>
                            <button
                                class="btn btn-alt-hkm donate-btn btn-lg px-4 py-2 position-relative overflow-hidden"
                                data-id="17" data-price="25000" style="color: #000; font-weight: bold; background-color: #ffc107; border: none; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                 transform: translateX(-100%);
                 animation: shine 2s infinite;">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body-custom">Alankara Seva</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/donate-any-one.png" alt="Alankara Seva">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">Donate Any Amount</p>
                            <a href="/checkout/10" class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden
                                donate-btn">Donate
                                Now<span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                             transform: translateX(-100%);
                             animation: shine 2s infinite;">
                                </span></a>
                        </div>
                    </div>
                    <div class="card-body-custom">Donate Any Amount</div>
                </div>
            </div>
        </div>
    </div>

</div>
<div style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);">
    <div class="container py-5">
        <div class="row align-items-center p-4">

            <div class="col-md-6 text-center">
                <div class="d-flex justify-content-center ">
                    <img src="{{ asset('assets/2/books.png') }}" class="img-fluid rounded " style="max-width: 250px;"
                        alt="Books">

                </div>
            </div>



            <div class="col-md-6 mt-4 mt-md-0">
                <h3 class="fw-bold mb-3 text-success">Donor Privileges</h3>
                <ol class="mb-4">
                    <li>On Donation of <strong>₹500</strong> or above, you will receive a <strong>Maha
                            Prasadam</strong>.</li>
                    <li>Receive a special gift of <strong>Spiritual Books</strong>.</li>
                    <li><strong>Digital Certificate</strong> of your contribution.</li>
                    <li><strong>Sankalp and Aarti</strong> will be performed in your name.</li>
                    <li>Get <strong>Narasimha Cavach Sutra</strong> at home.</li>
                    <li>Get <strong>Narasimha Yajna Tilak</strong>.</li>
                </ol>
                <a href="/checkout/10"
                    class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn">Donate
                    Now<span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                             transform: translateX(-100%);
                             animation: shine 2s infinite;">
                    </span></a>
            </div>
        </div>
    </div>

    <div class="container py-5 ">
        <h2 class="text-center mb-5 fw-bold">
            <span class="me-2">❧</span>Testimonials<span class="ms-2">❧</span>
        </h2>

        @php
        $testimonials = [
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Bhakt Bhagvat',
        'role' => 'Spiritualist Follower & Social Media Influencer',
        'text' => 'श्री भगवद गीता में धर्मपाठ का अद्वितीय महत्व है, जो हमारे जीवन को आध्यात्मिकता और नैतिकता की ओर
        प्रेरित करता है।'
        ],
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Gaurav Mishra',
        'role' => 'Major General (Retd.), Rajasthan',
        'text' => 'आधुनिक समय में ऐसे आध्यात्मिक केंद्र समाज को सांस्कृतिक और नैतिक मूल्यों से जोड़े रखने में महत्वपूर्ण
        भूमिका निभाते हैं।'
        ],
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Sri Narendra Modi',
        'role' => 'Prime Minister',
        'text' => 'Such iconic temple-cum-cultural centres are the need of the hour to preserve our heritage and inspire
        future generations.'
        ],
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Anita Sharma',
        'role' => 'Social Worker',
        'text' => 'इस केंद्र ने समाज में सकारात्मक बदलाव लाने की दिशा में महत्वपूर्ण योगदान दिया है, विशेषकर युवा पीढ़ी
        के लिए।'
        ],
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Rajiv Kapoor',
        'role' => 'Entrepreneur',
        'text' => 'The serene environment and cultural programs here provide a refreshing escape from the hustle of
        modern life.'
        ],
        [
        'image' => 'assets/12/profile.png',
        'name' => 'Sunita Verma',
        'role' => 'Educator',
        'text' => 'ऐसे केंद्र शिक्षा और संस्कृति का संगम होते हैं, जो आने वाली पीढ़ियों को सही दिशा और प्रेरणा देते
        हैं।'
        ]
        ];


        @endphp

        <div id="testimonial-container" class="testimonial-container overflow-hidden position-relative">
            <div id="testimonial-track" class="testimonial-track d-flex">
                @for ($i = 0; $i < 4; $i++) {{-- Repeat for seamless loop --}} @foreach($testimonials as $t) <div
                    class="testimonial-card card border rounded-4 shadow-sm text-center m-2 flex-shrink-0">
                    <div class="card-body p-4 d-flex flex-column align-items-center gap-2">
                        <div>
                            <img src="{{ asset($t['image']) }}" alt="{{ $t['name'] }}" class="rounded-circle mb-3"
                                style="width:80px;height:80px;object-fit:cover;">
                            <h5 class="fw-bold mb-1" style="margin-bottom:0;">{{ $t['name'] }}</h5>
                            <small class="text-muted d-block" style="margin-bottom:0;">{{ $t['role'] }}</small>
                        </div>
                        <p class="mb-0" style="margin-top:0;">{{ $t['text'] }}</p>
                    </div>
            </div>
            @endforeach
            @endfor
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold">
            <span class="me-2">❧</span>Donation Importance<span class="ms-2">❧</span>
        </h2>

        @php
        $donations = [
        [
        'image' => 'assets/12/srimad_bhagavatam_11.27.51.png',
        'title' => 'Srimad Bhagavatam 11.27.51',
        'text_sanskrit' => 'पूजादीं प्रवहार्थं महापर्वस्वयानहम्।<br>क्षेत्राणांपुरुषांनं दत्तं मत्समहितिं यातु ॥',
        'text_english' => 'One who offers the Deity, charity donation, gifts of land, markets, cities and villages so
        that the regular daily worship and special festivals of the Deity may go on continually will achieve opulence
        equal to My own.'
        ],
        [
        'image' => 'assets/12/Bhagavad Gita 2.40.png',
        'title' => 'Bhagavad Gita 2.40',
        'text_sanskrit' => 'नेहाभिक्रमनाशोऽस्ति प्रत्यवायो न विद्यते।<br>स्वल्पमप्यस्य धर्मस्य त्रायते महतो भयात्॥',
        'text_english' => 'In this endeavour of offering service to Lord Kṛṣṇa, you get eternal credit, and a little
        service offered to Lord Kṛṣṇa can protect one from the most dangerous type of fear.'
        ],
        [
        'image' => 'assets/12/srimad_bhagavatam_8.19.41.png',
        'title' => 'Srimad Bhagavatam 8.19.41',
        'text_sanskrit' => '',
        'text_english' => 'If one has money, it should be used to push forward the Krishna consciousness movement so
        that all of human society will become happy, prosperous and hopeful of being promoted back home, back to
        Godhead.'
        ],
        [
        'image' => 'assets/12/gita_mahatmya_68.png',
        'title' => 'Gita Mahatmya 68',
        'text_sanskrit' => '',
        'text_english' => 'One who makes a gift of one hundred copies of the Gita attains to the place of the Absolute
        wherefrom return occurs.'
        ],
        [
        'image' => 'assets/12/DSC02154 (1).JPG',
        'title' => 'Srimad Bhagavatam 10.22.35',
        'text_sanskrit' => 'एतावज्जन्मसाफल्यं देहिनामिह देहिषु।<br>प्राणैरर्थैर्धिया वाचा श्रेयआचरणं सदा ॥',
        'text_english' => 'It is the duty of every living being to perform welfare activities for the benefit of others
        with his life, wealth, intelligence and words.'
        ]
        ];
        @endphp

        <div class="position-relative overflow-hidden gradient-mask">
            <div id="donation-scroll" class="d-flex gap-3 p-2" style="overflow-x: auto; scroll-behavior: smooth;">
                @foreach($donations as $d)
                <div class="card donation-card border rounded-4 shadow-sm text-center flex-shrink-0"
                    style="width: 300px;">
                    <div class="card-body p-3 d-flex flex-column">
                        <img src="{{ asset($d['image']) }}" alt="{{ $d['title'] }}" class="mb-3 rounded"
                            style="width:100%; height:200px; object-fit:cover;">

                        <h5 class="fw-bold mb-2 text-center">{{ $d['title'] }}</h5>

                        @if(!empty(trim($d['text_sanskrit'])))
                        <p class="text-primary mb-2"
                            style="font-size: 14px; line-height: 1.6; font-style: italic; text-align: center;">
                            {!! $d['text_sanskrit'] !!}
                        </p>
                        @endif

                        @if(!empty(trim($d['text_english'])))
                        <p class="text-dark mb-0"
                            style="font-size: 14px; line-height: 1.6; text-align: justify; white-space: normal; overflow-wrap: anywhere;">
                            {!! $d['text_english'] !!}
                        </p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold text-primary">Frequently Asked Questions</h2>

        @php
        $faqs = [
        [
        'question' => 'Where is Srila Prabhupada\'s Hare Krishna Movement Dehradun?',
        'answer' => 'It is located in Khasra No. 801, Suddhowala, Near IIM Kashipur Satellite Campus, Dehradun 248015'
        ],
        [
        'question' => 'What is the minimum amount one can donate?',
        'answer' => 'You can donate any amount of your choice. <a href="/checkout/10"
            class="text-primary fw-bold">Donate Now</a>'
        ],
        [
        'question' => 'When will I receive prasadam after donation?',
        'answer' => 'You will receive prasadam within 7 days.'
        ],
        [
        'question' => 'How will my donation be utilized?',
        'answer' => 'Your donation will be utilized in the preparation of the Grand Festival <strong>Sri Krishna
            Janmashtami Maha Mahotsav</strong> at Srila Prabhupada\'s Hare Krishna Movement Dehradun in the service of
        Lord Sri Krishna.'
        ],
        [
        'question' => 'Can I attend the Janmashtami celebration in person at Nandgram Dham?',
        'answer' => 'Yes! All are welcome to join us for the grand Janmashtami Mahotsav. Entry is free for general
        darshan. Special Abhishekam passes and arrangements are available for sponsoring devotees.'
        ],
        [
        'question' => 'Is my donation eligible for tax exemption?',
        'answer' => 'Yes. Donations made within India are eligible for <strong>80G tax exemption</strong>. A tax receipt
        will be emailed to you after successful donation.'
        ],
        [
        'question' => 'How do I contact the seva team for any help or confirmation?',
        'answer' => 'You can contact the seva team via email at <a href="mailto:contact@hkmdehradun.org"
            class="text-primary fw-bold">contact@hkmdehradun.org</a> or call us at <a href="tel:+918121151508"
            class="text-primary fw-bold">+91 8121151508</a>'
        ]
        ];
        @endphp <div class="accordion" id="faqAccordion">
            @foreach($faqs as $index => $faq)
            <div class="accordion-item mb-3 shadow-sm rounded-4 border-0 overflow-hidden">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <button class="accordion-button fw-semibold fs-5 text-dark bg-light rounded-4 collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                        {{ $faq['question'] }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}"
                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }} transition-smooth"
                    aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body bg-white p-4">
                        {!! $faq['answer'] !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- <style>
    @media (max-width: 767.98px) {
        .min-vh-70 {
            min-height: 50vh !important;
        }

        .krishna-glow {
            max-width: 220px !important;
            width: 90% !important;
        }

        .countdown-box {
            font-size: 1rem !important;
            padding: 0.3rem 0.6rem !important;
        }

        .crackers-decor {
            width: 80px !important;
            top: 10% !important;
            left: 5% !important;
        }
    }

    @media (max-width: 575.98px) {
        .min-vh-70 {
            min-height: 40vh !important;
        }

        .krishna-glow {
            max-width: 160px !important;
        }

        .countdown-box {
            font-size: 0.9rem !important;
        }

        .crackers-decor {
            width: 60px !important;
        }

        .btn-lg {
            font-size: 1rem !important;
            padding: 0.5rem 1rem !important;
        }
    }

    /* Smooth transition for collapse */
    .accordion-collapse.collapse {
        transition: all 0.5s ease;
    }

    /* Button hover effect */
    .accordion-button {
        transition: all 0.3s ease;
    }

    .accordion-button:hover {
        background-color: #e0f7fa;
        transform: scale(1.02);
    }

    /* Shadow effect for accordion item */
    .accordion-item {
        transition: all 0.3s ease;
    }

    .accordion-item:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Rounded text for header */
    .accordion-button::after {
        transition: transform 0.4s ease;
    }
    </style> -->

</div>

<style>
@keyframes shine {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(100%);
    }
}

@keyframes yellowPulse {
    0% {
        filter: drop-shadow(0 0 5px yellow);
    }

    50% {
        filter: drop-shadow(0 0 20px yellow);
    }

    100% {
        filter: drop-shadow(0 0 5px yellow);
    }
}

/* .donate-scale {
    transition: transform 3s ease-in-out, background-color 0.5s ease-in-out;

    display: inline-block;
}

.donate-scale:hover {
    transform: scale(1.07);

    background-color: orange !important;

} */

/* .krishna-glow {
    animation: yellowPulse 4s ease-in-out infinite;
}

.countdown-box {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.4rem 0.8rem;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1.25rem;
    background: transparent;
    color: #fff;
    border: 4px solid transparent;
    box-shadow:
        0 0 8px #007bff,
        0 0 15px #28a745,
        0 0 25px #ffc107,
        0 0 35px #ff5722;
    animation: glowBorder 3s ease-in-out infinite alternate;
    text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
    width: fit-content;
    margin: 0 auto 1rem auto;
}

@keyframes glowBorder {
    0% {
        box-shadow:
            0 0 8px #007bff,
            0 0 15px #28a745,
            0 0 25px #ffc107,
            0 0 35px #ff5722;
    }

    100% {
        box-shadow:
            0 0 15px #007bff,
            0 0 30px #28a745,
            0 0 45px #ffc107,
            0 0 60px #ff5722;
    }
}



.time {
    color: #ffea00;
    text-shadow: 0 0 6px #ffea00;
} */


/* .crackers-decor {
    top: 20%;
    left: 10%;
    width: 150px;
    height: auto;
    z-index: 1;
    opacity: 0.8;
    animation: floatCrackers 6s ease-in-out infinite;
}
 */




.custom-donation-card {
    cursor: pointer;
    transition: box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    border-radius: 0.5rem;
    background: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.custom-donation-card:hover,
.custom-donation-card:focus-within {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    z-index: 10;
}

.donation-image {
    position: relative;
    width: 100%;
    height: 250px;
    overflow: hidden;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    flex-shrink: 0;
}

.donation-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    transition: transform 0.3s ease;
}

.donation-image:hover img,
.donation-image:focus-within img {
    transform: scale(1.05);
}

.hover-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(173, 216, 230, 0.85);
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    opacity: 0;
    transform: translateY(10%);
    transition: opacity 0.4s ease, transform 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #003366;
    padding: 1.5rem;
    pointer-events: none;
}

.donation-image:hover .hover-overlay,
.donation-image:focus-within .hover-overlay {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

.donation-name {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.donation-amount {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.card-body-custom {
    flex-grow: 0;
    padding: 0.5rem 1.5rem;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.1rem;
    color: #333;
}

.btn-alt-hkm {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 0.5rem 1.25rem;
    border-radius: 0.375rem;
    font-weight: 600;
    min-width: 120px;
    transition: background-color 0.3s ease;
}

.btn-alt-hkm:hover {
    background-color: #0056b3;
    color: white;
}

.testimonial-container {
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    overflow-x: auto;
    scroll-behavior: smooth;
    cursor: grab;
}

.testimonial-container::-webkit-scrollbar {
    display: none;
}

.testimonial-track {
    display: flex;
    gap: 8px;
}

.testimonial-card {
    width: 350px;
    flex-shrink: 0;
    transition: transform 0.5s ease;
}

.testimonial-card:hover {
    transform: rotate(-3deg) scale(1.03);
}

#donation-scroll {
    scrollbar-width: none;
}

#donation-scroll::-webkit-scrollbar {
    display: none;
}

.card-wrapper {
    perspective: 1200px;
    -webkit-perspective: 1200px;
}

.donation-card {
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    transition: transform 320ms cubic-bezier(.2, .9, .2, 1), box-shadow 320ms ease;
    will-change: transform;
    cursor: grab;
}

.donation-card:active {
    cursor: grabbing;
}

.card-wrapper:hover .donation-card,
.donation-card:hover {
    transform: rotateY(6deg) translateY(-8px) scale(1.03);
    box-shadow: 0 18px 30px rgba(2, 6, 23, 0.16);
}

#donation-scroll.dragging {
    cursor: grabbing;
}

.gradient-mask {
    -webkit-mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
    mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);
}
</style>
<script>
document.querySelectorAll('.donate-btn').forEach(btn => {
    btn.addEventListener('mouseenter', () => {
        btn.style.transform = 'scale(1.07)';
        btn.style.backgroundColor = 'orange';
    });
    btn.addEventListener('mouseleave', () => {
        btn.style.transform = 'scale(1)';
        btn.style.backgroundColor = '#ffc107';
    });
});
</script>

<script>
var eventDate = new Date("Aug 16, 2025 00:00:00").getTime();

var countdownFunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = eventDate - now;

    if (distance < 0) {
        document.getElementById("countdown").style.display = "none";
        clearInterval(countdownFunction);
        return;
    }

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML =
        days + " Days Left to Sponsor Your — " + days + "d " + hours + "h " + minutes + "m " + seconds +
        "s";
}, 1000);
</script>




<div id="gatsby-announcer"
    style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0"
    aria-live="assertive" aria-atomic="true"></div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script id="gatsby-script-loader">
/*<![CDATA[*/
window.pagePath = "/donate/janmashtami/"; /*]]>*/
</script>
<script id="gatsby-chunk-mapping">
n
window.___chunkMapping =
    "{\"app\":[\"/app-cc4a7ab7d73ee9791e8b.js\"],\"component---src-pages-404-js\":[\"/component---src-pages-404-js-0bad76a7095c927859e2.js\"],\"component---src-pages-about-js\":[\"/component---src-pages-about-js-b6454310e5dd1faeb3ba.js\"],\"component---src-pages-anna-daan-js\":[\"/component---src-pages-anna-daan-js-97c62534c7c21f1218f5.js\"],\"component---src-pages-annadaan-js\":[\"/component---src-pages-annadaan-js-cee131e25740517f1cde.js\"],\"component---src-pages-ayodhya-annadaan-js\":[\"/component---src-pages-ayodhya-annadaan-js-21df2da31a0ef20cbcf7.js\"],\"component---src-pages-ayodhya-festival-js\":[\"/component---src-pages-ayodhya-festival-js-bb9ffa23e5e84fcbcd34.js\"],\"component---src-pages-become-life-patron-js\":[\"/component---src-pages-become-life-patron-js-45197b375a480ff0c3fe.js\"],\"component---src-pages-blog-js\":[\"/component---src-pages-blog-js-ec808c749182916513aa.js\"],\"component---src-pages-cart-js\":[\"/component---src-pages-cart-js-280277f32d59da9e9967.js\"],\"component---src-pages-contact-js\":[\"/component---src-pages-contact-js-df6014252629946b601b.js\"],\"component---src-pages-donate-akshaya-tritiya-js\":[\"/component---src-pages-donate-akshaya-tritiya-js-8efa06798c5cd72cc907.js\"],\"component---src-pages-donate-dhanteras-js\":[\"/component---src-pages-donate-dhanteras-js-3ed2d11d80e13436c59f.js\"],\"component---src-pages-donate-gaur-purnima-js\":[\"/component---src-pages-donate-gaur-purnima-js-42b8d29bf408b4f2812e.js\"],\"component---src-pages-donate-gaur-purnima-seva-js\":[\"/component---src-pages-donate-gaur-purnima-seva-js-78cbe629b49f3beb441f.js\"],\"component---src-pages-donate-index-js\":[\"/component---src-pages-donate-index-js-acfdb6df9be59734c222.js\"],\"component---src-pages-donate-janmashtami-2024-js\":[\"/component---src-pages-donate-janmashtami-2024-js-91cdae6cf03304803f3f.js\"],\"component---src-pages-donate-janmashtami-js\":[\"/component---src-pages-donate-janmashtami-js-07a954c9c2664aacf51a.js\"],\"component---src-pages-donate-janmashtami-seva-js\":[\"/component---src-pages-donate-janmashtami-seva-js-9f09a0a699622ce21cfe.js\"],\"component---src-pages-donate-janmashtami-special-js\":[\"/component---src-pages-donate-janmashtami-special-js-51f8a272d4dca04c40f3.js\"],\"component---src-pages-donate-kartik-deepotsava-seva-js\":[\"/component---src-pages-donate-kartik-deepotsava-seva-js-63cc520490297ce24e4c.js\"],\"component---src-pages-donate-makar-sankranti-js\":[\"/component---src-pages-donate-makar-sankranti-js-638e6004b51cecf4d1cc.js\"],\"component---src-pages-donate-rama-navami-js\":[\"/component---src-pages-donate-rama-navami-js-3bc437bf456a3cbc14e9.js\"],\"component---src-pages-donate-sri-krishna-janmashtami-js\":[\"/component---src-pages-donate-sri-krishna-janmashtami-js-f6732ca711633a92e210.js\"],\"component---src-pages-donations-js\":[\"/component---src-pages-donations-js-30113bc026a8e4d447d9.js\"],\"component---src-pages-eazypay-index-js\":[\"/component---src-pages-eazypay-index-js-a2db653da403dc53f901.js\"],\"component---src-pages-eazypay-status-js\":[\"/component---src-pages-eazypay-status-js-6a589a48df33dfaf3228.js\"],\"component---src-pages-ekadasi-index-js\":[\"/component---src-pages-ekadasi-index-js-667f01a5572ab41cc499.js\"],\"component---src-pages-feedback-js\":[\"/component---src-pages-feedback-js-fe527c666ba011ce850b.js\"],\"component---src-pages-free-puja-js\":[\"/component---src-pages-free-puja-js-22e6ba35ee3a0fcf580d.js\"],\"component---src-pages-gita-daan-js\":[\"/component---src-pages-gita-daan-js-f9a723461f3e57842ea6.js\"],\"component---src-pages-gita-olympiad-index-js\":[\"/component---src-pages-gita-olympiad-index-js-f97d83b920ab151e35ee.js\"],\"component---src-pages-gita-olympiad-marathi-js\":[\"/component---src-pages-gita-olympiad-marathi-js-ffe44c32cbbd8585dca0.js\"],\"component---src-pages-index-js\":[\"/component---src-pages-index-js-680616bb7ff0bd0f76b1.js\"],\"component---src-pages-pan-js\":[\"/component---src-pages-pan-js-3843c00f6fb1c11c43c9.js\"],\"component---src-pages-pay-js\":[\"/component---src-pages-pay-js-b8a4ad19adee5dc215c2.js\"],\"component---src-pages-payment-index-js\":[\"/component---src-pages-payment-index-js-b97058f319e1ac32b744.js\"],\"component---src-pages-payment-status-js\":[\"/component---src-pages-payment-status-js-497805acee657ddf4ef0.js\"],\"component---src-pages-privacy-policy-js\":[\"/component---src-pages-privacy-policy-js-a827f03f74522cc2f523.js\"],\"component---src-pages-programs-bhagavad-gita-online-sessions-js\":[\"/component---src-pages-programs-bhagavad-gita-online-sessions-js-4450695b070e4e856db0.js\"],\"component---src-pages-programs-daily-bhagavad-gita-js\":[\"/component---src-pages-programs-daily-bhagavad-gita-js-bde849c88444aa57e783.js\"],\"component---src-pages-programs-folk-friends-of-lord-krishna-js\":[\"/component---src-pages-programs-folk-friends-of-lord-krishna-js-bc9d1321758bd2ca4699.js\"],\"component---src-pages-programs-free-bhagavad-gita-js\":[\"/component---src-pages-programs-free-bhagavad-gita-js-4d1c5ca40d6535637e3f.js\"],\"component---src-pages-programs-gita-life-js\":[\"/component---src-pages-programs-gita-life-js-4830e0b1f322b6ad725c.js\"],\"component---src-pages-programs-gita-sessions-js\":[\"/component---src-pages-programs-gita-sessions-js-a28e40a3c86b9ce8d5ff.js\"],\"component---src-pages-programs-icvk-indian-culture-and-values-for-kids-js\":[\"/component---src-pages-programs-icvk-indian-culture-and-values-for-kids-js-f6d751f3bb117b59248e.js\"],\"component---src-pages-programs-icvk-registration-js\":[\"/component---src-pages-programs-icvk-registration-js-b40e86be0f920fe11030.js\"],\"component---src-pages-programs-index-js\":[\"/component---src-pages-programs-index-js-fd212139f674683b00a0.js\"],\"component---src-pages-programs-learn-bhagavad-gita-js\":[\"/component---src-pages-programs-learn-bhagavad-gita-js-fa5e652c838d7f6e7678.js\"],\"component---src-pages-programs-vrjp-gita-sessions-js\":[\"/component---src-pages-programs-vrjp-gita-sessions-js-8be3d01b32cf108f1bcd.js\"],\"component---src-pages-quiz-bg-questions-js\":[\"/component---src-pages-quiz-bg-questions-js-01df12af234c0266b115.js\"],\"component---src-pages-quiz-bg-result-js\":[\"/component---src-pages-quiz-bg-result-js-4021b77bf054ded9da9c.js\"],\"component---src-pages-quiz-bhagavad-gita-js\":[\"/component---src-pages-quiz-bhagavad-gita-js-a5d2e108e25ec4628c22.js\"],\"component---src-pages-register-js\":[\"/component---src-pages-register-js-c84f7073eea1b22330dc.js\"],\"component---src-pages-seva-js\":[\"/component---src-pages-seva-js-53c500c3d3dd5c0272ad.js\"],\"component---src-pages-sp-ashraya-form-index-js\":[\"/component---src-pages-sp-ashraya-form-index-js-91b3b92683ea617243a9.js\"],\"component---src-pages-srila-prabhupada-ashraya-js\":[\"/component---src-pages-srila-prabhupada-ashraya-js-0da12c3ade826ac1fa5c.js\"],\"component---src-pages-srila-prabhupada-js\":[\"/component---src-pages-srila-prabhupada-js-147f62d4540c4b127e0e.js\"],\"component---src-pages-srimad-bhagavatam-js\":[\"/component---src-pages-srimad-bhagavatam-js-92bca82b82c134533e6f.js\"],\"component---src-pages-terms-and-conditions-js\":[\"/component---src-pages-terms-and-conditions-js-1ff83cb5c1ec70b77aff.js\"],\"component---src-pages-yatras-ayodhya-js\":[\"/component---src-pages-yatras-ayodhya-js-f3523efd5d4a546401cb.js\"],\"component---src-pages-yatras-index-js\":[\"/component---src-pages-yatras-index-js-5cf89454708b31d3f4bf.js\"],\"component---src-templates-blog-detail-js\":[\"/component---src-templates-blog-detail-js-8824876335e5b4825965.js\"],\"component---src-templates-seva-js\":[\"/component---src-templates-seva-js-05790c886555bb182786.js\"]}";
</script>
<script>
window.___webpackCompilationHash = "4b8b32f072120d493b3a";
</script>
<script src="/webpack-runtime-fc1b25274ecc36ea752b.js" async></script>
<script src="/framework-d80267ba493f95710a30.js" async></script>
<script src="/app-cc4a7ab7d73ee9791e8b.js" async></script>

<script>
let multiMode = false;
let selected = [];

const toggle = document.getElementById('multiToggle');
const proceedBtn = document.getElementById('proceedMultiCheckout');
const checkoutContainer = document.getElementById('multiCheckoutContainer');
const totalDisplay = document.getElementById('multiTotal');

toggle.addEventListener('change', function() {
    multiMode = this.checked;
    selected = [];
    updateTotal();
    checkoutContainer.classList.toggle('d-none', !multiMode);
    document.querySelectorAll('.donate-btn').forEach(btn => btn.classList.remove('selected'));
});

document.querySelectorAll('.donate-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.dataset.id;
        const price = parseInt(this.dataset.price);

        if (!multiMode) {
            window.location.href = `/checkout/${id}`;
        } else {
            if (this.classList.contains('selected')) {
                selected = selected.filter(item => item.id !== id);
                this.classList.remove('selected');
            } else {
                selected.push({
                    id,
                    price
                });
                this.classList.add('selected');
            }
            updateTotal();
        }
    });
});

function updateTotal() {
    const total = selected.reduce((sum, item) => sum + item.price, 0);
    totalDisplay.innerText = `₹${total.toLocaleString()}`;
}

proceedBtn.addEventListener('click', function() {
    const total = selected.reduce((sum, item) => sum + item.price, 0);
    const sevaIds = selected.map(item => item.id).join(',');
    window.location.href = `/checkout/18?amount=${total}&sevas=${sevaIds}`;
});
</script>
<script>
const scrollContainer = document.querySelector('.react-horizontal-scrolling-menu--scroll-container');
const btnLeft = document.querySelector('.b-left');
const btnRight = document.querySelector('.b-right');

btnLeft.addEventListener('click', () => {
    scrollContainer.scrollBy({
        left: -320, // scroll amount equal to one card width
        behavior: 'smooth'
    });
});

btnRight.addEventListener('click', () => {
    scrollContainer.scrollBy({
        left: 320,
        behavior: 'smooth'
    });
});

// Optional: Enable/disable buttons at edges
scrollContainer.addEventListener('scroll', () => {
    if (scrollContainer.scrollLeft <= 0) {
        btnLeft.disabled = true;
    } else {
        btnLeft.disabled = false;
    }
    if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
        btnRight.disabled = true;
    } else {
        btnRight.disabled = false;
    }
});

// Initialize button state on load
scrollContainer.dispatchEvent(new Event('scroll'));
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById("testimonial-container");
    const cards = document.querySelectorAll(".testimonial-card");
    let autoScrollSpeed = 1; // px per frame
    let pauseAutoScroll = false;

    // Auto-scroll animation
    function autoScroll() {
        if (!pauseAutoScroll) {
            container.scrollLeft += autoScrollSpeed;
            if (container.scrollLeft >= container.scrollWidth / 2) {
                container.scrollLeft = 0; // Loop back
            }
        }
        requestAnimationFrame(autoScroll);
    }
    autoScroll();

    // Pause when hovering any card
    cards.forEach(card => {
        card.addEventListener("mouseenter", () => pauseAutoScroll = true);
        card.addEventListener("mouseleave", () => pauseAutoScroll = false);
    });

    // Mouse wheel horizontal scroll
    container.addEventListener("wheel", (e) => {
        if (e.deltaY !== 0) {
            container.scrollLeft += e.deltaY;
            e.preventDefault();
        }
    }, {
        passive: false
    });

    // Touch swipe scrolling works automatically due to overflow-x:auto
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById("donation-scroll");
    const cards = Array.from(document.querySelectorAll(".donation-card"));
    let autoScrollSpeed = 1;
    let pauseAutoScroll = false;

    // Clone cards for seamless infinite loop
    function cloneCards() {
        // Only clone once
        if (container.querySelectorAll('.donation-card').length < cards.length * 2) {
            cards.forEach(card => {
                const clone = card.cloneNode(true);
                clone.classList.add('cloned');
                container.appendChild(clone);
            });
        }
    }
    cloneCards();

    // Infinite auto-scroll animation (never ends)
    function autoScroll() {
        if (!pauseAutoScroll && cards.length > 0) {
            container.scrollLeft += autoScrollSpeed;
            const cardWidth = cards[0].offsetWidth + 12; // 12px gap
            const totalWidth = cardWidth * cards.length;
            // When reaching end, jump back by one set of cards for seamless infinite scroll
            if (container.scrollLeft >= totalWidth) {
                container.scrollLeft -= totalWidth;
            }
        }
        requestAnimationFrame(autoScroll);
    }
    if (cards.length > 0) {
        autoScroll();
    }

    // Pause auto-scroll when hovering any card
    container.querySelectorAll('.donation-card').forEach(card => {
        card.addEventListener("mouseenter", () => {
            pauseAutoScroll = true;
        });
        card.addEventListener("mouseleave", () => {
            pauseAutoScroll = false;
        });
    });

    // Mobile touch scroll only
    let startX, scrollLeft;
    container.addEventListener("touchstart", (e) => {
        startX = e.touches[0].pageX;
        scrollLeft = container.scrollLeft;
    });
    container.addEventListener("touchmove", (e) => {
        const x = e.touches[0].pageX;
        const walk = (startX - x) * 1.5;
        container.scrollLeft = scrollLeft + walk;
    });
});
</script>


@endsection