@extends('main')

@section('title', 'Hare Krishna Movement - Dehradun')


@section('content')


<style>
    .gatsby-image-wrapper noscript [data-main-image] {
        opacity: 1 !important
    }

    .gatsby-image-wrapper [data-placeholder-image] {
        opacity: 0 !important
    }

    .gatsby-image-wrapper {
        position: relative;
        overflow: hidden
    }

    .gatsby-image-wrapper picture.object-fit-polyfill {
        position: static !important
    }

    .gatsby-image-wrapper img {
        bottom: 0;
        height: 100%;
        left: 0;
        margin: 0;
        max-width: none;
        padding: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        object-fit: cover
    }

    .gatsby-image-wrapper [data-main-image] {
        opacity: 0;
        transform: translateZ(0);
        transition: opacity .25s linear;
        will-change: opacity
    }

    .gatsby-image-wrapper-constrained {
        display: inline-block;
        vertical-align: top
    }
</style>




<style>
    .custom-donation-card {
        background-color: #fff;
        border-radius: 22px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

        transition: all 0.3s ease;
    }

    .custom-donation-card:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    /* .custom-donation-card .donation-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 10px;
    padding: 10px;
}

.custom-donation-card .donation-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
} */

    /* .custom-donation-card .card-body {
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;

  } */

    /* .custom-donation-card .btn {
    background-color: #ecdd5e;
  }

  .custom-donation-card .btn:hover {
    background-color: #5a8d4f;
    color: white;
  } */
</style>

<style>
    .contact-section {
        padding-left: 40px;
        /* Add left padding */
        padding-right: 40px;
        /* Add right padding */
        padding-top: 40px;
        padding-bottom: 40px;
    }

    @media (min-width: 768px) {
        .contact-section {
            padding-left: 80px;
            padding-right: 80px;
        }
    }
</style>
<!-- CSS for Mobile Optimization -->
<style>
    .banner-img {
        width: 100%;
        height: 600px;
        /* Desktop default */
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .banner-img {
            height: 350px;
            /* Smaller height for tablets and mobiles */
        }
    }

    @media (max-width: 480px) {
        .banner-img {
            height: 250px;
            /* Mobile-friendly height */
        }
    }

    @keyframes criss-cross-left {
        0% {
            left: -20px;
            width: 20px;
            height: 20px;
        }

        50% {
            left: 50%;
            width: 20px;
            height: 20px;
        }

        100% {
            left: 50%;
            width: 375px;
            /* 1.5 * 250px (default width from original SCSS) */
            height: 375px;
        }
    }

    @keyframes criss-cross-right {
        0% {
            right: -20px;
            width: 20px;
            height: 20px;
        }

        50% {
            right: 50%;
            width: 20px;
            height: 20px;
        }

        100% {
            right: 50%;
            width: 375px;
            height: 375px;
        }
    }

    @keyframes criss-cross-left {
        0% {
            left: -15px;
            width: 15px;
            height: 15px;
        }

        50% {
            left: 50%;
            width: 15px;
            height: 15px;
        }

        100% {
            left: 50%;
            width: 180px;
            height: 180px;
        }
    }

    @keyframes criss-cross-right {
        0% {
            right: -15px;
            width: 15px;
            height: 15px;
        }

        50% {
            right: 50%;
            width: 15px;
            height: 15px;
        }

        100% {
            right: 50%;
            width: 180px;
            height: 180px;
        }
    }

    @keyframes criss-cross-left {
        0% {
            left: -15px;
            width: 15px;
            height: 15px;
        }

        50% {
            left: 50%;
            width: 15px;
            height: 15px;
        }

        100% {
            left: 50%;
            width: 180px;
            height: 180px;
        }
    }

    @keyframes criss-cross-right {
        0% {
            right: -15px;
            width: 15px;
            height: 15px;
        }

        50% {
            right: 50%;
            width: 15px;
            height: 15px;
        }

        100% {
            right: 50%;
            width: 180px;
            height: 180px;
        }
    }

    @keyframes criss-cross-left {
        0% {
            left: -10px;
            width: 10px;
            height: 10px;
        }

        50% {
            left: 50%;
            width: 10px;
            height: 10px;
        }

        100% {
            left: 50%;
            width: 180px;
            height: 180px;
        }
    }

    @keyframes criss-cross-right {
        0% {
            right: -10px;
            width: 10px;
            height: 10px;
        }

        50% {
            right: 50%;
            width: 10px;
            height: 10px;
        }

        100% {
            right: 50%;
            width: 180px;
            height: 180px;
        }
    }

    /* ---------- MOBILE VIEW (≤576px) ---------- */
    @media (max-width: 576px) {

        /* Show mobile donate button */
        .donate-btn-mobile {
            display: block !important;
            width: 100%;
            margin-top: 10px;
            font-weight: bold;
            background-color: #ffc107;
            color: #000;
            border: none;
        }

        /* Hide hover donate button on mobile */
        .hover-overlay .donate-btn {
            display: none !important;
        }
    }

    /* Shine animation */
    @keyframes shine {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    /* Mobile styling */
    @media (max-width: 576px) {

        .donate-btn-mobile {
            display: block !important;
            width: 100%;
            margin-top: 10px;
            font-weight: bold;
            background-color: #ffc107;
            color: #000;
            border: none;
            padding: 10px 0;
            border-radius: 6px;
            position: relative;
            overflow: hidden;
            /* Required for shine */
        }

        /* Shine overlay for mobile button */
        .donate-btn-mobile::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: translateX(-100%);
            animation: shine 2s infinite;
        }

        /* Hide desktop hover donate on mobile */
        .hover-overlay .donate-btn {
            display: none !important;
        }
    }

    /* Desktop */
    @media (min-width: 577px) {
        .donate-btn-mobile {
            display: none !important;
        }

        .hover-overlay .donate-btn {
            display: inline-block !important;
        }
    }

    @media (max-width:767px),
    only screen and (min-width:768px)and (max-width:991px) {
        .navbar-collapse {
            max-width: 80% !important;
        }

        .navbar-toggler:focus {
            box-shadow: none !important;
            color: #000 !important;
        }
    }
</style>


<div class="content">
    <section class="hkm-page-banner hkm-banner-drop-00">
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="assets/12/thumbnail__MG_6221.jpg" alt="Sri Krishna Janmashtami"
                        class="d-block w-100 banner-img">
                </div>

                <!-- Slide 2 -->
                <!-- <div class="carousel-item">
                    <img src="assets/12/SKJ_Web banner.jpg" alt="SKJ Web Banner" class="d-block w-100 banner-img">
                </div> -->

            </div>

            <!-- Controls -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </section>
</div>




<section class="pb-4 py-md-4 bg-grey"
    style="background-image: linear-gradient(-225deg, #FFF8CC 0%, #AEE1F9 48%, #FFE6B3 100%);">
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
                <div class="btn btn-lg btn-hkm ud-checkout-button"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                        height="22" fill="currentColor" viewBox="0 0 16 16">
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
                <div class="btn btn-lg btn-hkm ud-checkout-button"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" fill="currentColor" viewBox="0 0 16 16">
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
        <div class="d-none position-fixed end-0 mb-5 z-3 animate-checkout" style="bottom: -15px; margin-right:6rem;"
            id="multiCheckoutContainer">
            <button class="btn btn-success checkout-btn" id="proceedMultiCheckout">
                Proceed to Checkout (<span id="multiTotal">₹0</span>)
            </button>
        </div>




        <!-- Donations Grid -->

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
                    <a href="/checkout/11">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>

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
                    <a href="/checkout/12">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>

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
                    <a href="/checkout/13">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
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
                    <a href="/checkout/14">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
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
                    <a href="/checkout/15">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
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
                    <a href="/checkout/16">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
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
                    <a href="/checkout/17">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
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
                    <a href="/checkout/10">
                        <button class="donate-btn-mobile">Donate</button>
                    </a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="custom-donation-card">
                    <div class="donation-image position-relative overflow-hidden rounded-top" tabindex="0">
                        <img src="assets/12/deepdaan.png" alt="Deep Daan">
                        <div
                            class="hover-overlay d-flex flex-column justify-content-center align-items-center px-3 py-4">
                            <p class="donation-name">108 Deep Daan</p>
                            <a href="/checkout/19"
                                class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn"
                                style="color: #000; font-weight: bold; background-color: #ffc107; border: none; transition: transform 0.8s ease, background-color 0.8s ease;">
                                Donate
                                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                                 transform: translateX(-100%);
                                 animation: shine 2s infinite;">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body-custom">108 Deep Daan</div>
                    <a href="/checkout/19">
                        <button class="donate-btn-mobile pill">Donate</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Centered Section with Padding -->
<section class="contact-section">
    <div class="container">

        <div>
            <h3 class="mb-4">Feel Free To Ask</h3>

            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('enquiry') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"
                                id="fullname" placeholder="Subject" required>
                            <label for="fullname">Your Name <span style="color:red">*</span></label>
                        </div>
                        @error('full_name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="mobile" placeholder="Your Name"
                                required value="{{ old('mobile') }}">
                            <label for="name">Mobile Number <span style="color:red">*</span></label>
                        </div>
                        @error('mobile')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required value="{{ old('email') }}">
                            <label for="email">Your Email <span style="color:red">*</span></label>
                        </div>
                        @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea name="message" class="form-control" placeholder="Leave a message here"
                                id="message" style="height: 250px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <p style="font-size: 1rem;">By clicking 'Send Message', you agree to our <a
                                href="https://www.hkmdehradun.org/terms-and-conditions" target="_blank"><b>Terms &
                                    Conditions</b></a> and that you have read our <a
                                href="https://www.hkmdehradun.org/privacy-policy" target="_blank"><b>Privacy
                                    Policy</b></a>.</p>
                    </div>
                    <div class="col-12">

                        <button class="btn btn-alt-hkm btn-lg px-4 py-2 position-relative overflow-hidden" type="submit"
                            style="color: #000; 
           font-weight: bold; 
           background-color: #ffc107; 
           border: none; 
           border-radius: 30px; 
           transition: transform 0.8s ease, background-color 0.8s ease;">
                            Send Message
                            <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
               transform: translateX(-100%);
               animation: shine 2s infinite;">
                            </span>
                        </button>


                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- Donation Section Start -->
<section class="py-5" style="background-color: #f7f3eb;">
    <div class="container">
        <h3 class="fw-bold text-center text-muted mb-5">Other ways of making donations</h3>

        <div class="row g-0 align-items-stretch">

            <!-- Bank Transfer Column (65%) -->
            <div class="col-md-8 pe-md-3 mb-3 mb-md-0">
                <div class="donation-card border rounded shadow-sm h-100 d-flex flex-column">
                    <div class="donation-header bg-warning text-white d-flex align-items-center px-4 py-3 rounded-top">
                        <i class="fas fa-university fa-lg me-2"></i>
                        <h5 class="mb-0 fw-bold">Bank Transfer (NEFT/RTGS)</h5>
                    </div>
                    <div class="p-4 bg-white flex-grow-1 rounded-bottom">
                        <p class="mb-2 fw-bold">HARE KRISHNA MOVEMENT DEHRADUN</p>
                        <ul class="list-unstyled ps-2 mb-0">
                            <li><strong>Bank Name:</strong> Axis Bank</li>
                            <li><strong>Account Number:</strong> 923020010644364</li>
                            <li><strong>IFSC Code:</strong> UTIB0001270</li>
                            <li><strong>Branch:</strong> Dehradun</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- QR Code Column (35%) -->
            <div class="col-md-4">
                <div class="donation-card border rounded shadow-sm h-100 d-flex flex-column">
                    <div class="donation-header bg-warning text-white d-flex align-items-center px-4 py-3 rounded-top">
                        <i class="fas fa-qrcode fa-lg me-2"></i>
                        <h5 class="mb-0 fw-bold">QR Code</h5>
                    </div>
                    <div class="flex-grow-1 d-flex">
                        <img src="assets/images/qrcode.jpg" alt="QR Code" class="img-fluid w-100 h-100"
                            style="object-fit: cover; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Box -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="donation-card border shadow-sm rounded d-flex flex-column">
                    <div class="donation-header bg-light d-flex align-items-center px-4 py-3 rounded-top border-bottom">
                        <i class="fas fa-info-circle fa-lg me-2 text-dark"></i>
                        <h6 class="mb-0 fw-bold text-dark">Gentle Request</h6>
                    </div>
                    <div class="p-4 bg-white rounded-bottom">
                        <p class="mb-0">When making payments via our UPI ID or through bank transfers (NEFT/RTGS),
                            please send us a screenshot along with your complete address and PAN details. You can
                            forward this information to either our WhatsApp number:
                            <a href="tel:+918121151508" class="fw-bold text-dark">8121151508</a> or email us at:
                            <a href="mailto:info@hkmdehradun.org" class="fw-bold text-dark">info@hkmdehradun.org</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tax Info Box -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="donation-card border shadow-sm rounded d-flex flex-column">
                    <div class="donation-header bg-warning text-white d-flex align-items-center px-4 py-3 rounded-top">
                        <i class="fas fa-certificate fa-lg me-2"></i>
                        <h6 class="mb-0 fw-bold" style="color:white;">Tax Exemption</h6>
                    </div>
                    <div class="p-4 bg-white rounded-bottom">
                        <p class="mb-0 text-danger fw-semibold">Donations to Hare Krishna Movement (PAN AABTH4502R) are
                            exempted under section 80-G of Income Tax Act, 1961 wide Approval No CIT(E)/80G/2455/2017-18
                            dated 23-08-2017 and renewed with number AABTH4502RF20215 dated 24-09-2021.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Donation Section End -->

<!-- FontAwesome (if not already included in main layout) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<section class="py-0 py-md-5 bg-grey">
    <div class="container-md bg-gradient py-4 px-md-4">
        <h3 class="fw-bold mt-3 ph-1 text-muted">Importance of Service</h3>
        <div role="presentation" class="sc-wrapper">
            <div class="react-horizontal-scrolling-menu--wrapper ">
                <div class="react-horizontal-scrolling-menu--header"></div>
                <div class="react-horizontal-scrolling-menu--inner-wrapper">
                    <div class="react-horizontal-scrolling-menu--arrow-left">
                        <button class="b-left" aria-label="prev" disabled="">
                            <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em"
                                class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp">
                                <path
                                    d="M12.2 4.53 6.727 10l5.47 5.47a.75.75 0 0 1-1.061 1.06l-6-6a.751.751 0 0 1 0-1.06l6-6A.75.75 0 1 1 12.2 4.53z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="react-horizontal-scrolling-menu--scroll-container ">
                        <div class="react-horizontal-scrolling-menu--item " data-key="0" data-index="0">
                            <div itemid="0" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:600px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='450'%20width='600'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAIEBf/EABQBAQAAAAAAAAAAAAAAAAAAAAL/2gAMAwEAAhADEAAAAZL3zymJRH//xAAaEAACAgMAAAAAAAAAAAAAAAABAxEhAAIT/9oACAEBAAEFAloo7BeFhmgrqCy5/8QAFREBAQAAAAAAAAAAAAAAAAAAECH/2gAIAQMBAT8Bh//EABYRAAMAAAAAAAAAAAAAAAAAAAEQEf/aAAgBAgEBPwE1f//EABwQAAEEAwEAAAAAAAAAAAAAAAABAhEhEDFBof/aAAgBAQAGPwJj+zoq1kUQr3H/xAAdEAEAAwABBQAAAAAAAAAAAAABABEhYTFBUYHw/9oACAEBAAE/IWG4rnDzCFVlqvrFMd2VaavxHO+9Rqjmf//aAAwDAQACAAMAAAAQ5z//xAAWEQEBAQAAAAAAAAAAAAAAAAABABH/2gAIAQMBAT8QHFpf/8QAGBEBAQADAAAAAAAAAAAAAAAAAQARITH/2gAIAQIBAT8QCd8sJf/EABsQAQEAAgMBAAAAAAAAAAAAAAERACExQVGh/9oACAEBAAE/EExQUd3vlxhGQe9XPzC6YiTDabSehuL4EwAoWiXL03l+lNo95//Z"
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="assets/2/krishna-and-fruit-seller.jpg 600w"
                                            sizes="(min-width: 600px) 600px, 100vw"><img width="600" height="450"
                                            data-main-image="" style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 600px) 600px, 100vw" decoding="async" loading="lazy"
                                            src="/static/ffb037229ba49f950cd6d52bf264877a/1a22e/krishna-and-fruit-seller.jpg"
                                            srcset="/static/ffb037229ba49f950cd6d52bf264877a/1a22e/krishna-and-fruit-seller.jpg 600w"
                                            alt="Srimad Bhagavatam 10.11.11">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp"
                                                srcSet="assets/2/krishna-and-fruit-seller.jpg 600w"
                                                sizes="(min-width: 600px) 600px, 100vw" /><img width="600" height="450"
                                                data-main-image="" style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 600px) 600px, 100vw" decoding="async" loading="lazy"
                                                src="/static/ffb037229ba49f950cd6d52bf264877a/1a22e/krishna-and-fruit-seller.jpg"
                                                srcSet="/static/ffb037229ba49f950cd6d52bf264877a/1a22e/krishna-and-fruit-seller.jpg 600w"
                                                alt="Srimad Bhagavatam 10.11.11" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Srimad Bhagavatam 10.11.11</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">फलिवकियणी तस चुतधानकरदयम् ।
                                            <br>फलैरपूरयद्रतै: फलभाणमपूिर च ॥
                                        </p>
                                        <p class="card-text bt-1_5 mt-2">While Kṛṣṇa was going to the fruit vendor very
                                            hastily,
                                            most of the grains He was holding fell. Nonetheless, the fruit vendor filled
                                            Kṛṣṇa’s hands
                                            with fruits, and her fruit basket was immediately filled with jewels
                                            and gold.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="react-horizontal-scrolling-menu--separator " data-key="0-separator"
                            data-index="0.1">
                        </div>
                        <div class="react-horizontal-scrolling-menu--item " data-key="1" data-index="1">
                            <div itemid="1" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:1080px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='1080'%20width='1080'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAUABQDASIAAhEBAxEB/8QAGAABAAMBAAAAAAAAAAAAAAAAAAIDBAX/xAAXAQEBAQEAAAAAAAAAAAAAAAABAwAC/9oADAMBAAIQAxAAAAGGnmzlW5kdFcjFIT//xAAbEAACAgMBAAAAAAAAAAAAAAABAgMRABIhIv/aAAgBAQABBQKM6KX400in1Vliws2dNmxun//EABcRAAMBAAAAAAAAAAAAAAAAAAAQESH/2gAIAQMBAT8Bpj//xAAXEQADAQAAAAAAAAAAAAAAAAAAEBEh/9oACAECAQE/AYa//8QAGxAAAgIDAQAAAAAAAAAAAAAAAAERMQIQIjL/2gAIAQEABj8CoohRBcrXWQkemWf/xAAbEAADAQEAAwAAAAAAAAAAAAAAASERMUFRYf/aAAgBAQABPyHc+d32dybm1kUPBNG4xhBdRzeos1FbRDd0GdGZ/9oADAMBAAIAAwAAABBL58P/xAAYEQADAQEAAAAAAAAAAAAAAAAAASExEP/aAAgBAwEBPxBPCtNXP//EABcRAQEBAQAAAAAAAAAAAAAAAAEAEEH/2gAIAQIBAT8QVCLuf//EABwQAQACAwEBAQAAAAAAAAAAAAERIQAxQVFxkf/aAAgBAQABPxCKKEnEdUfmLU5RgJ8LxmUIQ1DAqoEmrnX3BBAEFFc1vHtzCK5jJsYQPc2Q2b9wIsBBLzP/2Q=="
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="assets/2/nitai-gauranga-hkm.jpg 1080w"
                                            sizes="(min-width: 1080px) 1080px, 100vw"><img width="1080" height="1080"
                                            data-main-image="" style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 1080px) 1080px, 100vw" decoding="async" loading="lazy"
                                            src="/static/6abaa9e411a3edb922cae41d439b5d12/4d335/nitai-gauranga-hkm.jpg"
                                            srcset="/static/6abaa9e411a3edb922cae41d439b5d12/e4d02/nitai-gauranga-hkm.jpg 750w,
/static/6abaa9e411a3edb922cae41d439b5d12/4d335/nitai-gauranga-hkm.jpg 1080w" alt="Srimad Bhagavatam 11.27.51">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp" srcSet="assets/2/nitai-gauranga-hkm.jpg 1080w"
                                                sizes="(min-width: 1080px) 1080px, 100vw" /><img width="1080"
                                                height="1080" data-main-image="" style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 1080px) 1080px, 100vw" decoding="async"
                                                loading="lazy"
                                                src="/static/6abaa9e411a3edb922cae41d439b5d12/4d335/nitai-gauranga-hkm.jpg"
                                                srcSet="/static/6abaa9e411a3edb922cae41d439b5d12/e4d02/nitai-gauranga-hkm.jpg 750w,
/static/6abaa9e411a3edb922cae41d439b5d12/4d335/nitai-gauranga-hkm.jpg 1080w" alt="Srimad Bhagavatam 11.27.51" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Srimad Bhagavatam 11.27.51</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">पूजादीनां प्रवाहार्थं महापर्वस्वथान्वहम् ।
                                            <br>क्षेत्रापणपुरग्रामान् दत्त्वा मत्सार्ष्टितामियात् ॥
                                        </p>
                                        <p class="card-text bt-1_5 mt-2">One who offers the Deity gifts of land,
                                            markets, cities and
                                            villages so that the regular daily worship and special festivals of the
                                            Deity may go on
                                            continually will achieve opulence equal to My own.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="react-horizontal-scrolling-menu--separator " data-key="1-separator"
                            data-index="1.1">
                        </div>
                        <div class="react-horizontal-scrolling-menu--item " data-key="2" data-index="2">
                            <div itemid="2" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:820px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='480'%20width='820'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAMABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAQBAwX/xAAXAQADAQAAAAAAAAAAAAAAAAAAAQME/9oADAMBAAIQAxAAAAFqVjJXRKhH/8QAGRABAAMBAQAAAAAAAAAAAAAAAQIDEQBB/9oACAEBAAEFAhjk3axc9l1YMf/EABYRAQEBAAAAAAAAAAAAAAAAAAARAf/aAAgBAwEBPwGJj//EABcRAQADAAAAAAAAAAAAAAAAAAABERL/2gAIAQIBAT8BtuX/xAAaEAACAgMAAAAAAAAAAAAAAAAAAREhEDFR/9oACAEBAAY/AqISs2SuCx//xAAbEAACAgMBAAAAAAAAAAAAAAABEQAhMUFRkf/aAAgBAQABPyETcI71kNHAq12JHVShiXHuPKE//9oADAMBAAIAAwAAABA43//EABcRAAMBAAAAAAAAAAAAAAAAAAEQESH/2gAIAQMBAT8Q2Yr/xAAZEQADAAMAAAAAAAAAAAAAAAAAAREhMUH/2gAIAQIBAT8QU5XR32f/xAAcEAEBAAICAwAAAAAAAAAAAAABEQAhQVExcdH/2gAIAQEAAT8QRLEU6LmlBNBoS85QYgFCabxNg1Ox6xKFanPmn3LyStYedGf/2Q=="
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="assets/2/krishna-arjuna.jpg 820w"
                                            sizes="(min-width: 820px) 820px, 100vw"><img width="820" height="480"
                                            data-main-image="" style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 820px) 820px, 100vw" decoding="async" loading="lazy"
                                            src="/static/310c07fcc8625917bbb0fa0009159bbc/06e93/krishna-arjuna.jpg"
                                            srcset="/static/310c07fcc8625917bbb0fa0009159bbc/b000c/krishna-arjuna.jpg 750w,
/static/310c07fcc8625917bbb0fa0009159bbc/06e93/krishna-arjuna.jpg 820w" alt="Bhagavad Gita 2.40">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp" srcSet="assets/2/krishna-arjuna.jpg 820w"
                                                sizes="(min-width: 820px) 820px, 100vw" /><img width="820" height="480"
                                                data-main-image="" style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 820px) 820px, 100vw" decoding="async" loading="lazy"
                                                src="/static/310c07fcc8625917bbb0fa0009159bbc/06e93/krishna-arjuna.jpg"
                                                srcSet="/static/310c07fcc8625917bbb0fa0009159bbc/b000c/krishna-arjuna.jpg 750w,
/static/310c07fcc8625917bbb0fa0009159bbc/06e93/krishna-arjuna.jpg 820w" alt="Bhagavad Gita 2.40" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Bhagavad Gita 2.40</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">नेहाभिक्रमनाशोऽस्ति प्रत्यवायो न विद्यते ।
                                            <br>स्वल्पमप्यस्य धर्मस्य त्रायते महतो भयात् ॥
                                        </p>
                                        <p class="card-text bt-1_5 mt-2">In this endeavour of offering service to Lord
                                            Kṛṣṇa, you
                                            get eternal credit, and a little service offer to Lord Kṛṣṇa can protect one
                                            from the most
                                            dangerous type of fear.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="react-horizontal-scrolling-menu--separator " data-key="2-separator"
                            data-index="2.1">
                        </div>
                        <div class="react-horizontal-scrolling-menu--item " data-key="3" data-index="3">
                            <div itemid="3" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:717px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='400'%20width='717'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAMFBP/EABUBAQEAAAAAAAAAAAAAAAAAAAMC/9oADAMBAAIQAxAAAAFIjSKUiaBf/8QAGxAAAgIDAQAAAAAAAAAAAAAAAQIDEwASITP/2gAIAQEAAQUCUsIlt2B4qiyPxDMM/8QAFxEBAAMAAAAAAAAAAAAAAAAAAAIRIf/aAAgBAwEBPwGOqf/EABYRAQEBAAAAAAAAAAAAAAAAAAAhAv/aAAgBAgEBPwHUV//EABwQAAICAgMAAAAAAAAAAAAAAAABAiERURAiMf/aAAgBAQAGPwLo1uzDlW0LCI1x6f/EABkQAQEBAQEBAAAAAAAAAAAAAAERACExQf/aAAgBAQABPyGQPMCouMIsqTRkIn3JOeTzXAUu/9oADAMBAAIAAwAAABBP7//EABcRAQEBAQAAAAAAAAAAAAAAAAEAESH/2gAIAQMBAT8QI+yNv//EABgRAAMBAQAAAAAAAAAAAAAAAAABETFB/9oACAECAQE/EIVzo1Wn/8QAGxABAAMBAQEBAAAAAAAAAAAAAQARITFBgWH/2gAIAQEAAT8QsV7K4YmVfvkuVk0BSPKr7kYlus7yD14oLHP2K12AIOEUPDB8J//Z"
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="assets/2/srila-prabhupada.jpg 717w"
                                            sizes="(min-width: 717px) 717px, 100vw"><img width="717" height="400"
                                            data-main-image="" style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 717px) 717px, 100vw" decoding="async" loading="lazy"
                                            src="/static/76c8b2fd9235f59369914d8e714201cf/0fe12/srila-prabhupada.jpg"
                                            srcset="/static/76c8b2fd9235f59369914d8e714201cf/0fe12/srila-prabhupada.jpg 717w"
                                            alt="Srimad Bhagavatam 8.19.41">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp" srcSet="assets/2/srila-prabhupada.jpg 717w"
                                                sizes="(min-width: 717px) 717px, 100vw" /><img width="717" height="400"
                                                data-main-image="" style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 717px) 717px, 100vw" decoding="async" loading="lazy"
                                                src="/static/76c8b2fd9235f59369914d8e714201cf/0fe12/srila-prabhupada.jpg"
                                                srcSet="/static/76c8b2fd9235f59369914d8e714201cf/0fe12/srila-prabhupada.jpg 717w"
                                                alt="Srimad Bhagavatam 8.19.41" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Srimad Bhagavatam 8.19.41</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">If one has money, it should be used to push
                                            forward the
                                            Krishna consciousness movement so that all of human society will become
                                            happy, prosperous
                                            and hopeful of being promoted back home, back to Godhead.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="react-horizontal-scrolling-menu--separator " data-key="3-separator"
                            data-index="3.1">
                        </div>
                        <div class="react-horizontal-scrolling-menu--item " data-key="4" data-index="4">
                            <div itemid="4" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:1005px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='1030'%20width='1005'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAUABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAAMEBf/EABgBAAMBAQAAAAAAAAAAAAAAAAECAwAE/9oADAMBAAIQAxAAAAHBOsY6jSSXPuP2AB//xAAcEAACAgIDAAAAAAAAAAAAAAABAgMRACESE0H/2gAIAQEAAQUCWTYLcBIVEdOkaHtIYN6rtZ3n/8QAGREAAwADAAAAAAAAAAAAAAAAAAEREBIh/9oACAEDAQE/AdR8cxT/xAAXEQADAQAAAAAAAAAAAAAAAAAAASEQ/9oACAECAQE/AYQef//EABsQAAMAAgMAAAAAAAAAAAAAAAABESExAhJB/9oACAEBAAY/AsrrxHNEhnwVo5YI3DbP/8QAGxABAAIDAQEAAAAAAAAAAAAAAQARITFBcVH/2gAIAQEAAT8htytl7CKbc1uWxJoMB97DEKbH7CgrjFzA1DXGIvbxAq1H2f/aAAwDAQACAAMAAAAQ7AC8/8QAGBEBAQEBAQAAAAAAAAAAAAAAAQARUTH/2gAIAQMBAT8QEg9tovSHDS12/8QAGREAAgMBAAAAAAAAAAAAAAAAAREAECFR/9oACAECAQE/EEDPIy1Car//xAAfEAEBAAIBBAMAAAAAAAAAAAABEQAhUTFBYXGBkcH/2gAIAQEAAT8Qaa5WhbNTxTzjqgBhbzo6/OFNg5JliiKaCT8yaVYRAXSPGHkTVzbl9uFROsKfWKgwE7dcesseDa4//9k="
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="assets/2/gita-mahatmya.jpg 1005w"
                                            sizes="(min-width: 1005px) 1005px, 100vw"><img width="1005" height="1030"
                                            data-main-image="" style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 1005px) 1005px, 100vw" decoding="async" loading="lazy"
                                            src="/static/3ebb84db97397685727ed5a4dc87a132/6db82/gita-mahatmya.jpg"
                                            srcset="/static/3ebb84db97397685727ed5a4dc87a132/de0b1/gita-mahatmya.jpg 750w,
/static/3ebb84db97397685727ed5a4dc87a132/6db82/gita-mahatmya.jpg 1005w" alt="Gita Mahatmya 68">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp" srcSet="assets/2/gita-mahatmya.jpg 1005w"
                                                sizes="(min-width: 1005px) 1005px, 100vw" />
                                            <img width="1005" height="1030" data-main-image=""
                                                style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 1005px) 1005px, 100vw" decoding="async"
                                                loading="lazy"
                                                src="/static/3ebb84db97397685727ed5a4dc87a132/6db82/gita-mahatmya.jpg"
                                                srcSet="/static/3ebb84db97397685727ed5a4dc87a132/de0b1/gita-mahatmya.jpg 750w,
/static/3ebb84db97397685727ed5a4dc87a132/6db82/gita-mahatmya.jpg 1005w" alt="Gita Mahatmya 68" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Gita Mahatmya 68</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">One who makes a gift of one hundred copies of
                                            the Gita
                                            attains to the plane of the Absolute wherefrom rebirth practically never
                                            occurs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="react-horizontal-scrolling-menu--separator " data-key="4-separator"
                            data-index="4.1">
                        </div>
                        <div class="react-horizontal-scrolling-menu--item " data-key="5" data-index="5">
                            <div itemid="5" class="card border-0 rounded-1 my-3" style="width: 320px;">
                                <div data-gatsby-image-wrapper=""
                                    class="gatsby-image-wrapper gatsby-image-wrapper-constrained card-img-top"
                                    style="height: 220px;">
                                    <div style="max-width:1280px;display:block"><img alt="" role="presentation"
                                            aria-hidden="true"
                                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20height='708'%20width='1280'%20xmlns='http://www.w3.org/2000/svg'%20version='1.1'%3E%3C/svg%3E"
                                            style="max-width:100%;display:block;position:static"></div>
                                    <img aria-hidden="true" data-placeholder-image=""
                                        style="opacity: 0; transition: opacity 500ms linear; background-color: transparent; position: absolute; inset: 0px; object-fit: cover;"
                                        decoding="async"
                                        src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAMEAv/EABUBAQEAAAAAAAAAAAAAAAAAAAEC/9oADAMBAAIQAxAAAAHc70zTicH/xAAaEAACAgMAAAAAAAAAAAAAAAAAAQIhAxIy/9oACAEBAAEFApm1qaJOzHx//8QAFhEBAQEAAAAAAAAAAAAAAAAAABFB/9oACAEDAQE/AcR//8QAFREBAQAAAAAAAAAAAAAAAAAAABH/2gAIAQIBAT8BV//EABgQAAIDAAAAAAAAAAAAAAAAAAABESAx/9oACAEBAAY/AkSjaf/EABwQAAICAgMAAAAAAAAAAAAAAAABESExQXGx0f/aAAgBAQABPyHFI2PeKXZBsOlyencz/9oADAMBAAIAAwAAABCU7//EABcRAAMBAAAAAAAAAAAAAAAAAAABITH/2gAIAQMBAT8QxGXT/8QAFxEAAwEAAAAAAAAAAAAAAAAAAAEhEf/aAAgBAgEBPxBvWTD/xAAcEAEBAAMBAAMAAAAAAAAAAAABEQAhMUFhcfD/2gAIAQEAAT8Q2BWm3x8xIoSlqfn3IOxOq3JWkBNGPQ+BnKgzp95//9k="
                                        alt="">
                                    <picture>
                                        <source type="image/webp" srcset="/assets/2/annadaan-image.jpg 1080w,
assets/2/annadaan-image.jpg" sizes="(min-width: 1280px) 1280px, 100vw">
                                        <img width="1280" height="708" data-main-image=""
                                            style="object-fit: cover; opacity: 1;"
                                            sizes="(min-width: 1280px) 1280px, 100vw" decoding="async" loading="lazy"
                                            src="/static/47c665fabf38cd286bcffdc01894e372/d83ff/annadaan-image.jpg"
                                            srcset="/static/47c665fabf38cd286bcffdc01894e372/5beb0/annadaan-image.jpg 750w,
/static/47c665fabf38cd286bcffdc01894e372/94638/annadaan-image.jpg 1080w,
/static/47c665fabf38cd286bcffdc01894e372/d83ff/annadaan-image.jpg 1280w" alt="Srimad Bhagavatam 10.22.35">
                                    </picture>
                                    <noscript>
                                        <picture>
                                            <source type="image/webp" srcSet="/assets/2/annadaan-image.jpg 1080w,
assets/2/annadaan-image.jpg" sizes="(min-width: 1280px) 1280px, 100vw" />
                                            <img width="1280" height="708" data-main-image=""
                                                style="object-fit:cover;opacity:0"
                                                sizes="(min-width: 1280px) 1280px, 100vw" decoding="async"
                                                loading="lazy"
                                                src="/static/47c665fabf38cd286bcffdc01894e372/d83ff/annadaan-image.jpg"
                                                srcSet="/static/47c665fabf38cd286bcffdc01894e372/5beb0/annadaan-image.jpg 750w,
/static/47c665fabf38cd286bcffdc01894e372/94638/annadaan-image.jpg 1080w,
/static/47c665fabf38cd286bcffdc01894e372/d83ff/annadaan-image.jpg 1280w" alt="Srimad Bhagavatam 10.22.35" />
                                        </picture>
                                    </noscript>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title mt-2">Srimad Bhagavatam 10.22.35</h5>
                                    <div class="overflow-auto hkm-scrollbar mb-2" style="height: 172px;">
                                        <p class="card-text bt-1_5 mt-2">एतावज्जन्मसाफल्यं देहिनामिह देहिषु ।
                                            <br>प्राणैरर्थैर्धिया वाचा श्रेयआचरणं सदा ॥
                                        </p>
                                        <p class="card-text bt-1_5 mt-2">It is the duty of every living being to perform
                                            welfare
                                            activities for the benefit of others with his life, wealth, intelligence and
                                            words.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="react-horizontal-scrolling-menu--arrow-right">
                        <button class="b-right" aria-label="next">
                            <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em"
                                class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh rgmg9uty b73ngqbp">
                                <path
                                    d="M7.8 4.53 13.273 10 7.8 15.47a.75.75 0 0 0 1.061 1.06l6-6a.751.751 0 0 0 0-1.06l-6-6A.75.75 0 0 0 7.8 4.53z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="react-horizontal-scrolling-menu--footer"></div>
            </div>
        </div>

        <div class="text-center my-3 "><a class="btn btn-outline-hkm button" href="/contact/"
                style="background-color: #ebde5b;">For any queries, please
                contact us.</a></div>
    </div>
</section>
</div>

</div>
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

<style>
    /* .donate-btn.selected {
    background-color: #28a745 !important;
    color: #fff !important;
    font-weight: bold;
} */

    /* Force all cards same height */
    .react-horizontal-scrolling-menu--item .card {
        height: 500px;
        /* set your desired total card height */
        display: flex;
        flex-direction: column;
    }

    /* Make sure image container takes fixed height */
    .card .gatsby-image-wrapper {
        height: 220px;
        /* keep your current image height */
        flex-shrink: 0;
    }

    /* Make body take remaining height */
    .card .card-body {
        flex: 1;
        /* fill remaining space */
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .text-center my-3 {
        background-color: #ebde5b !important;
    }

    .footer p {
        /* margin-right: 0px !important; */
        display: flex;
    }

    .button {
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.8s ease;
    }

    .button:hover {
        background-color: #28a745 !important;
        color: #fff !important;
    }

    /* 👇 Entry Animation */
    @keyframes slideUpFade {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-checkout {
        animation: slideUpFade 0.6s ease-out;
    }

    /* 👇 Hover Animation */
    .checkout-btn {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .checkout-btn:hover {
        transform: translateY(-4px) scale(1.05);
        /* small lift + zoom */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

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
        /* Fill container nicely */
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
        /* color: white; */
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

@endsection