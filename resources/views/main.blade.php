<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="JjmBf-LWOULqKvBh4QmIEuWRsAjKm6rU8p6iENduUyw" />
    @stack('styles')
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Hare Krishna Movement Dehradun - ISKCON Temple in Dehradun" name="keywords">
    <meta name="description"
        content="Donate to HKM Dehradun and support prasadam distribution, spiritual education, and temple activities. Your contribution brings positive change.">
    <meta name="keywords"
        content="donate NGO Dehradun, temple donation, food donation, spiritual charity India, online donation NGO, donation for NGO India, charity in Dehradun, online donation Dehradun, support Hare Krishna movement, temple donation Dehradun, food donation NGO, prasadam donation, donate for education, NGO food distribution Dehradun, donate online India, charity organization Dehradun, help poor Dehradun, spiritual donation NGO, religious charity India, support temple activities, fundraising NGO Dehradun, donation for social cause, help children education NGO, charity trust Dehradun, NGO for food and education, ISKCON donation India, support Hare Krishna temple">
    <meta name="keywords"
        content="environment NGO in Dehradun, NGO job in Vikasnagar Dehradun Uttarakhand, Samadhan NGO Dehradun Uttarakhand, Astitva NGO Dehradun, dog NGO Dehradun, latest NGO jobs in Dehradun, ANM vacancy in NGO Dehradun, NGO in Dehradun for animals, NGO jobs in Dehradun Uttarakhand, Reach NGO Dehradun, volunteer for NGO in Dehradun, health NGO in Dehradun, Joy NGO Dehradun, NGO in Dehradun for girl child, NGO in Dehradun for internship, Dehradun NGO list, Goonj NGO in Dehradun, Apna Ghar NGO Dehradun, NGO in Dehradun for environment, NGO in Dehradun for law internship">
    <meta content="" name=" description">

    <link href="https://hkmdehradun.org/assets/img/favicon.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://hkmdehradun.org/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://hkmdehradun.org/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://hkmdehradun.org/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<style>
    body {
        overflow-x: hidden;
        color: #000000;
    }

    .firefly {
        position: fixed;
        left: 50%;
        top: 50%;
        width: 0.4vw;
        height: 0.4vw;
        margin: -0.2vw 0 0 9.8vw;
        animation: ease 200s alternate infinite;
        pointer-events: none;
        z-index: 99;
    }

    .firefly::before,
    .firefly::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        transform-origin: -10vw;
    }

    .firefly::before {
        background: whitesmoke;
        opacity: 0.4;
        animation: drift ease alternate infinite;
    }

    .firefly::after {
        background: white;
        opacity: 0;
        box-shadow: 0 0 0vw 0vw yellow;
        animation: drift ease alternate infinite, flash ease infinite;
    }


    @keyframes drift {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes flash {

        0%,
        30%,
        100% {
            opacity: 0;
            box-shadow: 0 0 0vw 0vw yellow;
        }

        5% {
            opacity: 1;
            box-shadow: 0 0 2vw 0.4vw yellow;
        }
    }

    .firefly:nth-child(1) {
        animation-name: move1;
    }

    .firefly:nth-child(1)::before {
        animation-duration: 12s;
    }

    .firefly:nth-child(1)::after {
        animation-duration: 12s, 5500ms;
        animation-delay: 0ms, 4000ms;
    }

    @keyframes move1 {
        0% {
            transform: translateX(40vw) translateY(10vh) scale(0.5);
        }

        100% {
            transform: translateX(-30vw) translateY(-40vh) scale(0.9);
        }
    }

    .firefly:nth-child(2) {
        animation-name: move2;
    }

    .firefly:nth-child(2)::before {
        animation-duration: 15s;
    }

    .firefly:nth-child(2)::after {
        animation-duration: 15s, 7000ms;
        animation-delay: 0ms, 2500ms;
    }

    @keyframes move2 {
        0% {
            transform: translateX(-20vw) translateY(30vh) scale(0.8);
        }

        100% {
            transform: translateX(50vw) translateY(-10vh) scale(0.4);
        }
    }

    .firefly:nth-child(3) {
        animation-name: move3;
    }

    .firefly:nth-child(3)::before {
        animation-duration: 10s;
    }

    .firefly:nth-child(3)::after {
        animation-duration: 10s, 6000ms;
        animation-delay: 0ms, 5000ms;
    }

    @keyframes move3 {
        0% {
            transform: translateX(10vw) translateY(-20vh) scale(0.6);
        }

        100% {
            transform: translateX(-45vw) translateY(25vh) scale(1);
        }
    }

    .firefly:nth-child(4) {
        animation-name: move4;
    }

    .firefly:nth-child(4)::before {
        animation-duration: 18s;
    }

    .firefly:nth-child(4)::after {
        animation-duration: 18s, 5800ms;
        animation-delay: 0ms, 7200ms;
    }

    @keyframes move4 {
        0% {
            transform: translateX(35vw) translateY(22vh) scale(0.3);
        }

        100% {
            transform: translateX(-15vw) translateY(-35vh) scale(0.85);
        }
    }

    .firefly:nth-child(5) {
        animation-name: move5;
    }

    .firefly:nth-child(5)::before {
        animation-duration: 9s;
    }

    .firefly:nth-child(5)::after {
        animation-duration: 9s, 8000ms;
        animation-delay: 0ms, 1000ms;
    }

    @keyframes move5 {
        0% {
            transform: translateX(-10vw) translateY(15vh) scale(0.9);
        }

        100% {
            transform: translateX(48vw) translateY(-18vh) scale(0.5);
        }
    }

    .firefly:nth-child(6) {
        animation-name: move6;
    }

    .firefly:nth-child(6)::before {
        animation-duration: 13s;
    }

    .firefly:nth-child(6)::after {
        animation-duration: 13s, 5000ms;
        animation-delay: 0ms, 3300ms;
    }

    @keyframes move6 {
        0% {
            transform: translateX(5vw) translateY(40vh) scale(0.7);
        }

        100% {
            transform: translateX(-33vw) translateY(-20vh) scale(0.4);
        }
    }

    .firefly:nth-child(7) {
        animation-name: move7;
    }

    .firefly:nth-child(7)::before {
        animation-duration: 16s;
    }

    .firefly:nth-child(7)::after {
        animation-duration: 16s, 6200ms;
        animation-delay: 0ms, 6100ms;
    }

    @keyframes move7 {
        0% {
            transform: translateX(42vw) translateY(-12vh) scale(0.6);
        }

        100% {
            transform: translateX(-25vw) translateY(38vh) scale(0.95);
        }
    }

    .firefly:nth-child(8) {
        animation-name: move8;
    }

    .firefly:nth-child(8)::before {
        animation-duration: 11s;
    }

    .firefly:nth-child(8)::after {
        animation-duration: 11s, 7100ms;
        animation-delay: 0ms, 800ms;
    }

    @keyframes move8 {
        0% {
            transform: translateX(-18vw) translateY(5vh) scale(0.8);
        }

        100% {
            transform: translateX(33vw) translateY(28vh) scale(0.6);
        }
    }

    .firefly:nth-child(9) {
        animation-name: move9;
    }

    .firefly:nth-child(9)::before {
        animation-duration: 14s;
    }

    .firefly:nth-child(9)::after {
        animation-duration: 14s, 5400ms;
        animation-delay: 0ms, 4500ms;
    }

    @keyframes move9 {
        0% {
            transform: translateX(28vw) translateY(18vh) scale(0.4);
        }

        100% {
            transform: translateX(-40vw) translateY(-5vh) scale(0.7);
        }
    }

    .firefly:nth-child(10) {
        animation-name: move10;
    }

    .firefly:nth-child(10)::before {
        animation-duration: 17s;
    }

    .firefly:nth-child(10)::after {
        animation-duration: 17s, 6800ms;
        animation-delay: 0ms, 2200ms;
    }

    @keyframes move10 {
        0% {
            transform: translateX(-35vw) translateY(32vh) scale(1);
        }

        100% {
            transform: translateX(10vw) translateY(-15vh) scale(0.5);
        }
    }

    .firefly:nth-child(11) {
        animation-name: move11;
    }

    .firefly:nth-child(11)::before {
        animation-duration: 10s;
    }

    .firefly:nth-child(11)::after {
        animation-duration: 10s, 5100ms;
        animation-delay: 0ms, 7500ms;
    }

    @keyframes move11 {
        0% {
            transform: translateX(45vw) translateY(-25vh) scale(0.75);
        }

        100% {
            transform: translateX(-22vw) translateY(45vh) scale(0.9);
        }
    }

    .firefly:nth-child(12) {
        animation-name: move12;
    }

    .firefly:nth-child(12)::before {
        animation-duration: 19s;
    }

    .firefly:nth-child(12)::after {
        animation-duration: 19s, 7500ms;
        animation-delay: 0ms, 1500ms;
    }

    @keyframes move12 {
        0% {
            transform: translateX(-28vw) translateY(12vh) scale(0.6);
        }

        100% {
            transform: translateX(38vw) translateY(-28vh) scale(0.8);
        }
    }

    .firefly:nth-child(13) {
        animation-name: move13;
    }

    .firefly:nth-child(13)::before {
        animation-duration: 12s;
    }

    .firefly:nth-child(13)::after {
        animation-duration: 12s, 6300ms;
        animation-delay: 0ms, 5800ms;
    }

    @keyframes move13 {
        0% {
            transform: translateX(15vw) translateY(35vh) scale(0.9);
        }

        100% {
            transform: translateX(-38vw) translateY(-10vh) scale(0.5);
        }
    }

    .firefly:nth-child(14) {
        animation-name: move14;
    }

    .firefly:nth-child(14)::before {
        animation-duration: 15s;
    }

    .firefly:nth-child(14)::after {
        animation-duration: 15s, 5700ms;
        animation-delay: 0ms, 3800ms;
    }

    @keyframes move14 {
        0% {
            transform: translateX(30vw) translateY(-30vh) scale(0.45);
        }

        100% {
            transform: translateX(-48vw) translateY(15vh) scale(0.8);
        }
    }

    .firefly:nth-child(15) {
        animation-name: move15;
    }

    .firefly:nth-child(15)::before {
        animation-duration: 11s;
    }

    .firefly:nth-child(15)::after {
        animation-duration: 11s, 7200ms;
        animation-delay: 0ms, 6800ms;
    }

    @keyframes move15 {
        0% {
            transform: translateX(-12vw) translateY(25vh) scale(0.7);
        }

        100% {
            transform: translateX(42vw) translateY(5vh) scale(1);
        }
    }



    .footer {
        border-top: 1px solid #e6e6e6;
    }

    .footer h5 {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .footer .form-control {
        border-radius: 10px;
        border: 1px solid #dcdcdc;
        font-size: 0.95rem;
        padding: 10px 12px;
    }

    .footer .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.15);
    }

    .input-group-text {
        font-size: 0.95rem;
        color: #333;
    }

    .icon-hover {
        transition: all 0.3s ease;
    }

    .icon-hover:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
    }
</style>


<body>

    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>


    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/harekrishnadehradun/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/hkmdehradun/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="https://wa.me/+918123037733"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light"
                        href="https://www.youtube.com/channel/UC3qEhxfLAujU2g7PxBzzJNA"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span><a href="tel:8123037733" style="color: #404A3D;">+91 8123037733</a></span>
                </div>
            </div>
        </div>
        <div class="row g-0 d-flex d-lg-none">
            <div class="col-12 text-start py-2 ps-3">
                <div class="d-inline-flex align-items-center text-light flex-wrap">
                    <span class="me-2">Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/harekrishnadehradun/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/hkmdehradun/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="https://wa.me/+918123037733"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-link text-light"
                        href="https://www.youtube.com/channel/UC3qEhxfLAujU2g7PxBzzJNA"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- FONT AWESOME (keep this) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* ------------------ Your original desktop / dropdown styles (kept) ------------------ */
        /* (I included your existing CSS mostly unchanged, then appended mobile drawer rules) */

        .nav {
            --bs-nav-link-padding-x: 1rem;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-link-color);
            --bs-nav-link-hover-color: var(--bs-link-hover-color);
            --bs-nav-link-disabled-color: var(--bs-secondary-color);
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0
        }

        .nav-link {
            background: none;
            border: 0;
            color: var(--bs-nav-link-color);
            display: block;
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
        }

        @media(prefers-reduced-motion:reduce) {
            .nav-link {
                transition: none
            }
        }

        .nav-link:focus,
        .nav-link:hover {
            color: var(--bs-nav-link-hover-color)
        }

        .nav-link:focus-visible {
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25);
            outline: 0
        }

        .nav-link.disabled {
            color: var(--bs-nav-link-disabled-color);
            cursor: default;
            pointer-events: none
        }

        .nav-tabs {
            --bs-nav-tabs-border-width: var(--bs-border-width);
            --bs-nav-tabs-border-color: var(--bs-border-color);
            --bs-nav-tabs-border-radius: var(--bs-border-radius);
            --bs-nav-tabs-link-hover-border-color: var(--bs-secondary-bg) var(--bs-secondary-bg) var(--bs-border-color);
            --bs-nav-tabs-link-active-color: var(--bs-emphasis-color);
            --bs-nav-tabs-link-active-bg: var(--bs-body-bg);
            --bs-nav-tabs-link-active-border-color: var(--bs-border-color) var(--bs-border-color) var(--bs-body-bg);
            border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color)
        }

        .nav-tabs .nav-link {
            border: var(--bs-nav-tabs-border-width) solid transparent;
            border-top-left-radius: var(--bs-nav-tabs-border-radius);
            border-top-right-radius: var(--bs-nav-tabs-border-radius);
            margin-bottom: calc(var(--bs-nav-tabs-border-width)*-1)
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: var(--bs-nav-tabs-link-hover-border-color);
            isolation: isolate
        }

        .nav-tabs .nav-link.disabled,
        .nav-tabs .nav-link:disabled {
            background-color: transparent;
            border-color: transparent;
            color: var(--bs-nav-link-disabled-color)
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: var(--bs-nav-tabs-link-active-bg);
            border-color: var(--bs-nav-tabs-link-active-border-color);
            color: var(--bs-nav-tabs-link-active-color)
        }

        .nav-tabs .dropdown-menu {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top: calc(var(--bs-nav-tabs-border-width)*-1)
        }

        .nav-pills {
            --bs-nav-pills-border-radius: var(--bs-border-radius);
            --bs-nav-pills-link-active-color: #fff;
            --bs-nav-pills-link-active-bg: #0d6efd
        }

        .nav-pills .nav-link {
            border-radius: var(--bs-nav-pills-border-radius)
        }

        .nav-pills .nav-link:disabled {
            background-color: transparent;
            border-color: transparent;
            color: var(--bs-nav-link-disabled-color)
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: var(--bs-nav-pills-link-active-bg);
            color: var(--bs-nav-pills-link-active-color)
        }

        .nav-underline {
            --bs-nav-underline-gap: 1rem;
            --bs-nav-underline-border-width: 0.125rem;
            --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
            gap: var(--bs-nav-underline-gap)
        }

        .nav-underline .nav-link {
            border-bottom: var(--bs-nav-underline-border-width) solid transparent;
            padding-left: 0;
            padding-right: 0
        }

        .nav-underline .nav-link:focus,
        .nav-underline .nav-link:hover {
            border-bottom-color: currentcolor
        }

        .nav-underline .nav-link.active,
        .nav-underline .show>.nav-link {
            border-bottom-color: currentcolor;
            color: var(--bs-nav-underline-link-active-color);
            font-weight: 700
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
            --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
            --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
            --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-padding-y: 0.3125rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.25rem;
            --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.25rem;
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(33, 37, 41, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
            --bs-navbar-toggler-border-radius: var(--bs-border-radius);
            --bs-navbar-toggler-focus-width: 0.25rem;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-lg,
        .navbar>.container-md,
        .navbar>.container-sm,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            align-items: center;
            display: flex;
            flex-wrap: inherit;
            justify-content: space-between
        }

        .navbar-brand {
            color: var(--bs-navbar-brand-color);
            font-size: var(--bs-navbar-brand-font-size);
            margin-right: var(--bs-navbar-brand-margin-end);
            padding-bottom: var(--bs-navbar-brand-padding-y);
            padding-top: var(--bs-navbar-brand-padding-y);
            text-decoration: none;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            color: var(--bs-navbar-brand-hover-color)
        }

        .navbar-nav {
            --bs-nav-link-padding-x: 0;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-navbar-color);
            --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
            --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
            display: flex;
            flex-direction: column;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.show {
            color: var(--bs-navbar-active-color)
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-text {
            color: var(--bs-navbar-color);
            padding-bottom: .5rem;
            padding-top: .5rem
        }

        .navbar-text a,
        .navbar-text a:focus,
        .navbar-text a:hover {
            color: var(--bs-navbar-active-color)
        }

        .navbar-collapse {
            align-items: center;
            flex-basis: 100%;
            flex-grow: 1
        }

        .navbar-toggler {
            background-color: transparent;
            border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
            border-radius: var(--bs-navbar-toggler-border-radius);
            color: var(--bs-navbar-color);
            font-size: var(--bs-navbar-toggler-font-size);
            line-height: 1;
            padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
            transition: var(--bs-navbar-toggler-transition)
        }

        @media(prefers-reduced-motion:reduce) {
            .navbar-toggler {
                transition: none
            }
        }

        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
            outline: 0;
            text-decoration: none
        }

        .navbar-toggler-icon {
            background-image: var(--bs-navbar-toggler-icon-bg);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 100%;
            display: inline-block;
            height: 1.5em;
            vertical-align: middle;
            width: 1.5em
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto
        }

        /* ---------- NAVBAR & TOGGLER ---------- */
        .navbar {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
            padding: 6px 20px !important;
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(10px);
            z-index: 1200;
        }

        /* TOP NAV LINKS */
        .navbar-nav .nav-link {
            font-size: 12.5px;
            font-weight: 500;
            padding: 10px 16px !important;
            color: #000 !important;
            border-radius: 8px;
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            transition: all 0.25s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: #eef2ff !important;
            color: #4a63e7 !important;
            transform: translateY(-5px);
        }

        /* DROPDOWN MENU BASE */
        .dropdown-menu {
            border-radius: 8px;
            border: none;
            padding: 5px 0;
            min-width: 220px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.25s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        /* desktop: hover opens dropdown */
        .nav-item.dropdown:hover>.dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* make .show visible by default (we will toggle .show with JS on mobile) */
        .dropdown-menu.show {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        /* SUBMENU (desktop) */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            position: absolute;
            top: 0 !important;
            left: 100%;
            margin-left: 3px;
            opacity: 0;
            visibility: hidden;
        }

        /* DESKTOP: hover opens submenu */
        @media (min-width: 992px) {
            .dropdown-submenu:hover>.dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateX(0);
            }
        }

        /* MOBILE: show submenu when .show added; display inline in flow (accordion style) */
        @media (max-width: 991px) {
            .dropdown-menu {
                min-width: 100%;
            }

            .dropdown-menu.show {
                display: block;
                position: relative;
                box-shadow: none;
                transform: none;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .dropdown-submenu>.dropdown-menu {
                position: relative;
                left: 0;
                margin-left: 0;
                transform: none;
            }

            .dropdown-submenu>.dropdown-menu .dropdown-item {
                padding-left: 28px;
            }

            .dropdown-toggle {
                cursor: pointer;
            }

            .btn-blue {
                margin-bottom: 10px;
                display: inline-block;
            }
        }

        .dropdown-item {
            font-size: 16px;
            font-weight: 500;
            padding: 10px 18px;
        }

        .dropdown-item:hover,
        .dropdown-item.active {
            background: #eef2ff !important;
            color: #4a63e7 !important;
        }

        .dropdown-submenu>.dropdown-item.dropdown-toggle {
            font-size: 16px !important;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
        }

        /* ARROWS (uses Font Awesome 5 Free) */
        .navbar .dropdown-toggle::after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 8px;
            transition: transform 0.35s ease, color 0.25s ease;
        }

        .navbar .dropdown:hover>.dropdown-toggle::after,
        .navbar .dropdown>.nav-link.active::after {
            transform: rotate(180deg);
            color: #4a63e7 !important;
        }

        /* SUBMENU ARROWS */
        .dropdown-submenu>.dropdown-item.dropdown-toggle::after {
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 10px;
            transition: transform 0.35s ease, color 0.25s ease;
        }

        /* DONATE BUTTON WITH HEART */
        .btn-blue {
            background: #007bff;
            color: #fff !important;
            padding: 8px 18px 8px 38px;
            border-radius: 30px;
            margin-left: 10px;
            position: relative;
            border: 2px solid transparent;
        }

        .btn-blue::before {
            content: "\f004";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 15px;
            color: #fff;
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
        }

        .btn-blue:hover::before {
            color: #007bff;
        }

        .btn-blue:hover {
            background: white;
            color: #007bff !important;
            border: 2px solid #007bff;
            transform: translateZ(5px);
            transition: all 0.25s ease;
        }

        /* small helper to avoid dropdown items being transformed (so they don't move up on hover in mobile) */
        @media (max-width: 991px) {
            .dropdown-item:hover {
                transform: none;
            }
        }

        /* BORDER AROUND DROPDOWN MENU */
        .dropdown-menu {
            border: 1px solid #d9d9d9 !important;
            background: #ffffff !important;
        }

        /* BORDER AROUND SUBMENU */
        .dropdown-submenu>.dropdown-menu {
            border: 1px solid #d9d9d9 !important;
        }

        /* SEPARATOR LINES IN DROPDOWN */
        .dropdown-menu .dropdown-item {
            border-bottom: 1px solid #eaeaea;
        }

        /* Remove line from last item */
        .dropdown-menu .dropdown-item:last-child {
            border-bottom: none;
        }

        /* Separator lines in SUBMENUS also */
        .dropdown-submenu>.dropdown-menu .dropdown-item {
            border-bottom: 1px solid #eaeaea;
        }

        .dropdown-submenu>.dropdown-menu .dropdown-item:last-child {
            border-bottom: none;
        }

        /* Hover effect stays clean */
        .dropdown-item:hover {
            background: #eef2ff !important;
            color: #4a63e7 !important;
        }

        /* ------------------ MOBILE DRAWER + HAMBURGER ANIMATION ------------------ */
        @media (max-width: 991px) {

            /* Drawer panel */
            .navbar-collapse {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 80%;
                background: #ffffff;
                padding: 20px;
                overflow-y: auto;
                transform: translateX(-100%);
                transition: transform 0.35s cubic-bezier(.2, .9, .2, 1);
                z-index: 10000;
                box-shadow: 4px 0 20px rgba(0, 0, 0, 0.12);
                -webkit-overflow-scrolling: touch;
            }

            .navbar-collapse.show {
                transform: translateX(0);
            }

            /* Top logo inside the drawer */
            .mobile-logo {
                width: 140px;
                margin-bottom: 18px;
                display: block;
            }

            /* Backdrop area = right 20% */
            .mobile-backdrop {
                position: fixed;
                top: 0;
                left: 80%;
                width: 20%;
                height: 100vh;
                background: rgba(0, 0, 0, 0.28);
                opacity: 0;
                pointer-events: none;
                transition: opacity 0.25s ease;
                z-index: 9995;
            }

            .mobile-backdrop.active {
                opacity: 1;
                pointer-events: auto;
            }

            /* Hamburger bar (3 lines) */
            .navbar-toggler {
                border: none !important;
                background: transparent !important;
                z-index: 11000;
                position: relative;
                padding: 6px;
            }

            .hamburger {
                width: 26px;
                height: 2px;
                background: #111;
                display: inline-block;
                border-radius: 2px;
                position: relative;
                transition: all 0.35s ease;
            }

            .hamburger::before,
            .hamburger::after {
                content: "";
                position: absolute;
                left: 0;
                width: 26px;
                height: 2px;
                background: #111;
                border-radius: 2px;
                transition: all 0.35s ease;
            }

            .hamburger::before {
                top: -8px;
            }

            .hamburger::after {
                top: 8px;
            }

            /* toggled -> X */
            .navbar-toggler.open .hamburger {
                background: transparent;
            }

            .navbar-toggler.open .hamburger::before {
                transform: translateY(8px) rotate(45deg);
            }

            .navbar-toggler.open .hamburger::after {
                transform: translateY(-8px) rotate(-45deg);
            }

            /* Ensure dropdown menus behave accordion-style on mobile */
            .dropdown-menu {
                display: none !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
                position: relative !important;
                box-shadow: none !important;
                border: none !important;
                padding-left: 0;
            }

            .dropdown-menu.show {
                display: block !important;
            }

            /* Make nav links block-level in drawer */
            .navbar-nav {
                padding-top: 8px;
            }

            .navbar-nav .nav-link {
                width: 100%;
                padding: 12px 8px !important;
                margin-bottom: 6px;
                border-radius: 6px;
            }

            /* submenu items indentation */
            .dropdown-submenu>.dropdown-menu .dropdown-item {
                padding-left: 26px;
            }

            /* donate button inside drawer */
            .btn-blue {
                display: inline-block;
                margin-top: 10px;
            }
        }

        /* prevent body scroll when drawer is open */
        body.nav-drawer-open {
            overflow: hidden;
            touch-action: none;
        }
    </style>

    <!-- ---------- NAVBAR: full markup with your routes/content preserved ---------- -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="https://hkmdehradun.org/assets/10/HKM-Dehradun-Logo-1024x617.jpg" style="height: 60px;">
        </a>

        <!-- toggler: unchanged aria attributes but custom markup and no data-bs toggling -->
        <button class="navbar-toggler" type="button" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger" aria-hidden="true"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Mobile top logo (inside drawer) -->
            <img src="https://hkmdehradun.org/assets/10/HKM-Dehradun-Logo-1024x617.jpg" class="mobile-logo d-lg-none" alt="logo">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
            {{ request()->is(
                'our-mission','objective','governance',
                'srila-prabhupada-life-story','krishna-life-story',
                'chaitanya-mahaprabhu','bhagavad-gita','krishna-consciousness',
                'blogs','gallery-images'
            ) ? 'active' : '' }}" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">About Us</a>

                    <ul class="dropdown-menu" aria-label="About Us sub-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)" aria-haspopup="true"
                                aria-expanded="false">Philosophy</a>
                            <ul class="dropdown-menu" aria-label="Philosophy sub-menu">
                                <li><a href="{{ route('srila-prabhupada-life-story') }}"
                                        class="dropdown-item {{ request()->routeIs('srila-prabhupada-life-story') ? 'active' : '' }}">Srila
                                        Prabhupada</a></li>
                                <li><a href="{{ route('krishna-life-story') }}"
                                        class="dropdown-item {{ request()->routeIs('krishna-life-story') ? 'active' : '' }}">Krishna</a>
                                </li>
                                <li><a href="{{ route('chaitanya-mahaprabhu') }}"
                                        class="dropdown-item {{ request()->routeIs('chaitanya-mahaprabhu') ? 'active' : '' }}">Chaitanya
                                        Mahaprabhu</a></li>
                                <li><a href="{{ route('bhagavad-gita') }}"
                                        class="dropdown-item {{ request()->routeIs('bhagavad-gita') ? 'active' : '' }}">Bhagavad
                                        Gita</a></li>
                                <li><a href="{{ route('krishna-consciousness') }}"
                                        class="dropdown-item {{ request()->routeIs('krishna-consciousness') ? 'active' : '' }}">Krishna
                                        Consciousness</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)" aria-haspopup="true"
                                aria-expanded="false">Media</a>
                            <ul class="dropdown-menu" aria-label="Media sub-menu">
                                <li><a href="{{ route('blogs') }}"
                                        class="dropdown-item {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a>
                                </li>
                                <li><a href="{{ route('gallery-images') }}"
                                        class="dropdown-item {{ request()->routeIs('gallery-images') ? 'active' : '' }}">Gallery
                                        Images</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('our-mission') }}"
                                class="dropdown-item {{ request()->routeIs('our-mission') ? 'active' : '' }}">Our
                                Mission</a></li>
                        <li><a href="{{ route('objective') }}"
                                class="dropdown-item {{ request()->routeIs('objective') ? 'active' : '' }}">Objectives</a>
                        </li>
                        <li><a href="{{ route('governance') }}"
                                class="dropdown-item {{ request()->routeIs('governance') ? 'active' : '' }}">Governance</a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
            {{ request()->is(
                'gita-life-course','secrets-of-life','gita-advance-course',
                'gita-shloka-course','spiritual-retreat','folk','basilwoods-juniors-preschool',
                'kids-club','volunteer','heritage-fest','krishna-shringa','dham-yatra',
                'gita-daan','gita-for-youth'
            ) ? 'active' : '' }}" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">Activities</a>

                    <ul class="dropdown-menu" aria-label="About Us sub-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)" aria-haspopup="true"
                                aria-expanded="false">BLISS Courses</a>
                            <ul class="dropdown-menu" aria-label="Philosophy sub-menu">
                                <li><a href="{{ route('gita-life-course') }}"
                                        class="dropdown-item {{ request()->routeIs('gita-life-course') ? 'active' : '' }}">Gita Life Course</a></li>
                                <li><a href="{{ route('secrets-of-life') }}"
                                        class="dropdown-item {{ request()->routeIs('secrets-of-life') ? 'active' : '' }}">Secrets of Life</a>
                                </li>
                                <li><a href="{{ route('gita-advance-course') }}"
                                        class="dropdown-item {{ request()->routeIs('gita-advance-course') ? 'active' : '' }}">Gita Advance Cources</a></li>
                                <li><a href="{{ route('gita-shloka-course') }}"
                                        class="dropdown-item {{ request()->routeIs('gita-shloka-course') ? 'active' : '' }}">Gita Shloka Course</a></li>
                                <li><a href="{{ route('spiritual-retreat') }}"
                                        class="dropdown-item {{ request()->routeIs('spiritual-retreat') ? 'active' : '' }}">Spiritual Retreat</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('folk') }}"
                                class="dropdown-item {{ request()->routeIs('folk') ? 'active' : '' }}">For Youth</a></li>
                        <li><a href="{{ route('gita-for-youth') }}"
                                class="dropdown-item {{ request()->routeIs('gita-for-youth') ? 'active' : '' }}">Gita For Youth</a>
                        </li>
                        <li><a href="{{ route('volunteer') }}"
                                class="dropdown-item {{ request()->routeIs('volunteer') ? 'active' : '' }}">Become Volunteer</a>
                        </li>
                        <li><a href="{{ route('gita-daan') }}"
                                class="dropdown-item {{ request()->routeIs('gita-daan') ? 'active' : '' }}">Bhagavad Gita Book Distribution</a>
                        </li>



                    </ul>
                </li>





                <li class="nav-item"><a href="{{ route('our-centers') }}"
                        class="nav-link {{ request()->routeIs('our-centers') ? 'active' : '' }}">Our Centers</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
            {{ request()->is(
                'checkout/11','checkout/12','checkout/13','checkout/14','checkout/15','deepotsava','annadaan-seva'
            ) ? 'active' : '' }}" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">Donate</a>

                    <ul class="dropdown-menu">

                        <li>
                            <a href="{{ route('checkout', ['id' => 11]) }}"
                                class="dropdown-item {{ request()->is('checkout/11') ? 'active' : '' }}">
                                Archana Seva
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('checkout', ['id' => 12]) }}"
                                class="dropdown-item {{ request()->is('checkout/12') ? 'active' : '' }}">
                                Makhan Mishri Seva
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('checkout', ['id' => 13]) }}"
                                class="dropdown-item {{ request()->is('checkout/13') ? 'active' : '' }}">
                                Pushpa Seva
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('checkout', ['id' => 14]) }}"
                                class="dropdown-item {{ request()->is('checkout/14') ? 'active' : '' }}">
                                Abhishekam Seva
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('checkout', ['id' => 15]) }}"
                                class="dropdown-item {{ request()->is('checkout/15') ? 'active' : '' }}">
                                Chappan Bhog Seva
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('deepotsava') }}"
                                class="dropdown-item {{ request()->routeIs('deepotsava') ? 'active' : '' }}">
                                Deepotsava
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('annadaan-seva') }}"
                                class="dropdown-item {{ request()->routeIs('annadaan-seva') ? 'active' : '' }}">
                                See More ...
                            </a>
                        </li>

                    </ul>


                </li>

                <li class="nav-item"><a href="{{ route('contact') }}"
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

            </ul>

            <a href="{{ route('annadaan-seva') }}" class="btn-blue">Donate</a>

        </div>

        <!-- BACKDROP: right 20% click-to-close area -->
        <div class="mobile-backdrop" id="mobileBackdrop" aria-hidden="true"></div>
    </nav>

    <script>
        /*
  Unified script:
  - toggles drawer open/close (hamburger -> X)
  - opens/closes submenus on mobile (accordion)
  - backdrop and outside-click close
  - Escape key closes
  - prevents body scroll when open
*/
        (function() {
            const MOBILE_BREAKPOINT = 991;
            const collapse = document.getElementById('navbarCollapse');
            const backdrop = document.getElementById('mobileBackdrop');
            const toggler = document.querySelector('.navbar-toggler');

            // helper
            function isMobile() {
                return window.innerWidth <= MOBILE_BREAKPOINT;
            }

            function openDrawer() {
                collapse.classList.add('show');
                backdrop.classList.add('active');
                toggler.classList.add('open');
                document.body.classList.add('nav-drawer-open');
                toggler.setAttribute('aria-expanded', 'true');
            }

            function closeDrawer() {
                collapse.classList.remove('show');
                backdrop.classList.remove('active');
                toggler.classList.remove('open');
                document.body.classList.remove('nav-drawer-open');
                toggler.setAttribute('aria-expanded', 'false');
                // close any open submenus
                collapse.querySelectorAll('.dropdown-menu.show').forEach(dm => dm.classList.remove('show'));
            }

            // toggler click (we avoid bootstrap data-bs toggle on mobile)
            toggler.addEventListener('click', function(ev) {
                if (!isMobile()) {
                    // let bootstrap handle desktop if it's loaded
                    return;
                }
                ev.preventDefault();
                if (collapse.classList.contains('show')) closeDrawer();
                else openDrawer();
            });

            // backdrop click closes
            backdrop.addEventListener('click', function() {
                closeDrawer();
            });

            // click outside drawer closes as robust fallback
            document.addEventListener('click', function(e) {
                if (!isMobile()) return;
                if (!collapse.classList.contains('show')) return;
                // if clicked inside drawer, ignore
                if (collapse.contains(e.target)) return;
                // if clicked toggler, ignore (toggler handler already)
                if (toggler.contains(e.target)) return;
                // otherwise close
                closeDrawer();
            }, {
                passive: true
            });

            // mobile submenu accordion behavior
            document.addEventListener('click', function(e) {
                if (!isMobile()) return;

                // target a dropdown-toggle inside nav (top-level or submenu)
                const toggle = e.target.closest('.dropdown-toggle');
                if (!toggle) return;

                // prevent default navigation
                e.preventDefault();

                // find the related menu (next sibling .dropdown-menu)
                let menu = toggle.nextElementSibling;
                if (!menu || !menu.classList.contains('dropdown-menu')) return;

                // toggle it (close other open siblings at same level)
                const parentMenu = toggle.closest('.dropdown-menu') || collapse;
                parentMenu.querySelectorAll(':scope > .dropdown-submenu > .dropdown-menu.show, :scope > .dropdown-menu.show, :scope > .dropdown-submenu > .dropdown-menu.show').forEach(m => {
                    if (m !== menu) m.classList.remove('show');
                });

                menu.classList.toggle('show');
            });

            // keyboard: Esc closes
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && collapse.classList.contains('show')) {
                    closeDrawer();
                }
            });

            // resize: if switching to desktop, ensure closed
            window.addEventListener('resize', function() {
                if (!isMobile()) {
                    // allow bootstrap to show collapse if used, but ensure our classes removed
                    collapse.classList.remove('show');
                    backdrop.classList.remove('active');
                    toggler.classList.remove('open');
                    document.body.classList.remove('nav-drawer-open');
                }
            });

            // accessibility: ensure focus isn't lost (basic)
            // When opening, focus first focusable element inside drawer
            const observer = new MutationObserver(function() {
                if (collapse.classList.contains('show')) {
                    const firstLink = collapse.querySelector('a, button, input, [tabindex]:not([tabindex="-1"])');
                    if (firstLink) firstLink.focus();
                }
            });
            observer.observe(collapse, {
                attributes: true,
                attributeFilter: ['class']
            });

        })();
    </script>






    @yield('content')

    <footer class="container-fluid footer-bg py-3 text-dark footer position-relative overflow-hidden wow fadeIn"
        data-wow-delay="0.1s">

        <!-- <dotlottie-wc src="https://lottie.host/9c5dad69-e0e4-42ce-aaa5-79ffcfbad315/2NDzucYL08.lottie" autoplay loop
            class="footer-lottie"></dotlottie-wc> -->

        <div class="container py-2 position-relative" style="z-index: 1;">
            <div class="row g-5 align-items-start">

                <!-- Address Section -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Address</h5>

                    <p class="footer-list">
                        <i class="fa fa-phone-alt  me-3"></i>
                        <a href="tel:+918123037733">+91 8123037733</a>
                    </p>

                    <p class="footer-list">
                        <i class="fa fa-envelope  me-3"></i>
                        <a href="mailto:contact@hkmdehradun.org">contact@hkmdehradun.org</a>
                    </p>

                    <p class="footer-list">
                        <i class="fa fa-map-marker-alt me-3"></i>
                        <a href="#" target="_blank">
                            Khasra No. 801, Suddhowala, Near IIM Kashipur Satellite Campus, Dehradun 248015
                        </a>
                    </p>

                    <p class="footer-desc">
                        Hare Krishna Mandir is run by Hare Krishna Movement Dehradun, a registered trust.
                    </p>

                    <div class="d-flex pt-2 footer-social">
                        <a class="footer-icon" href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="footer-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="footer-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="footer-icon" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Important Links -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Important Links</h5>

                    <ul class="footer-links">
                        <li><a href="{{route('our-mission')}}">About Us</a></li>
                        <li><a href="{{route('be-a-monk')}}">Become a Monk</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{route('terms-and-conditions')}}">Terms & Conditions</a></li>
                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('refund-policy')}}">Refund Policy</a></li>
                    </ul>
                </div>

                <!-- NEWSLETTER SECTION -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Join Our Newsletter</h5>

                    <form id="newsletter-form" novalidate>

                        <!-- Name -->
                        <div class="mb-3">
                            <input
                                type="text"
                                class="footer-input"
                                id="newsletter-name"
                                placeholder="Full Name"
                                required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <input
                                type="email"
                                class="footer-input"
                                id="newsletter-email"
                                placeholder="Email Address"
                                inputmode="email"
                                autocomplete="email"
                                required>
                            <small id="email-error" class="text-danger mt-1 d-none">
                                Please enter a valid email address
                            </small>
                        </div>

                        <!-- Mobile Number -->
                        <div class="mb-3">
                            <input
                                type="tel"
                                class="footer-input"
                                id="newsletter-mobile"
                                placeholder="Mobile Number"
                                inputmode="numeric"
                                maxlength="10"
                                autocomplete="tel"
                                required>
                            <small id="mobile-error" class="text-danger mt-1 d-none">
                                Only 10 digit numbers are allowed
                            </small>
                        </div>

                        <!-- Date of Birth -->
                        <div class="mb-3 position-relative">
                            <input
                                type="text"
                                class="footer-input"
                                id="newsletter-date"
                                placeholder="dd/mm/yyyy"
                                maxlength="10"
                                autocomplete="off"
                                required>
                            <small id="date-error" class="text-danger mt-1 d-none">
                                Please enter a valid date (dd/mm/yyyy)
                            </small>
                        </div>

                        <!-- Terms Checkbox -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="newsletter-agree" required>
                            <label class="form-check-label footer-agree" for="newsletter-agree">
                                I agree to <a href="#">Terms & Conditions</a>,
                                <a href="#">Privacy Policy</a> & agree to receive updates.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="footer-submit-btn w-100">
                            SUBSCRIBE
                        </button>

                    </form>
                </div>


            </div>
        </div>

    </footer>
    <style>
        .footer-input.invalid {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.15rem rgba(220, 53, 69, 0.25);
        }

        #newsletter-form small.text-danger {
            font-size: 0.80rem;
        }


        .footer-bg {
            background: #ffffff;
            border-top: 1px solid #e5e5e5;
        }

        /* Lottie BG */
        .footer-lottie {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 150%;
            opacity: 1;
            z-index: 0;
        }

        /* Section Titles */
        .footer-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2186d9;
            margin-bottom: 1.2rem;
        }

        /* Footer Paragraphs */
        .footer-list a,
        .footer-list {
            color: #555 !important;
            font-size: 0.95rem;
            line-height: 1.6;
            text-decoration: none;
        }

        .footer-list i {
            color: #2186d9;
        }

        .footer-desc {
            font-size: 0.9rem;
            color: #777;
            margin-top: 10px;
        }

        /* Social Icons */
        .footer-social .footer-icon {
            width: 38px;
            height: 38px;
            background: #ffffff;
            border: 1px solid #dcdcdc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.7rem;
            transition: 0.3s;
        }

        .footer-social .footer-icon i {
            font-size: 1rem;
            color: #2186d9;
        }

        .footer-social .footer-icon:hover {
            background: #2186d9;
            border-color: #2186d9;
        }

        .footer-social .footer-icon:hover i {
            color: #fff;
        }

        /* Important Links Column */
        .footer-links {
            list-style: none;
            padding: 0;
            column-count: 2;
        }

        .footer-links li a {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 0.95rem;
            text-decoration: none;
        }

        .footer-links li a:hover {
            color: #2186d9;
        }

        /* Inputs */
        .footer-input {
            width: 100%;
            border-radius: 10px;
            border: 1px solid #dcdcdc;
            padding: 10px 12px;
            font-size: 0.95rem;
        }

        .footer-input:focus {
            border-color: #2186d9;
            box-shadow: 0 0 0 0.1rem rgba(33, 134, 217, 0.2);
        }

        /* Checkbox Text */
        .footer-agree {
            font-size: 0.85rem;
            color: #666;
        }

        .footer-agree a {
            color: #2186d9;
            font-weight: 600;
        }

        /* Subscribe Button */
        .footer-submit-btn {
            width: 100%;
            padding: 12px;
            background: #2186d9;
            color: #fff;
            font-weight: 700;
            border-radius: 50px;
            border: none;
            font-size: 1rem;
            letter-spacing: 1px;
            transition: 0.3s ease;
        }

        .footer-submit-btn:hover {
            background: #0d6fd0;
            transform: translateY(-3px);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            /* ------------------ MOBILE NUMBER VALIDATION ------------------- */
            const mobileInput = document.getElementById("newsletter-mobile");
            const mobileError = document.getElementById("mobile-error");

            mobileInput.addEventListener("input", function() {
                this.value = this.value.replace(/\D/g, ""); // allow only numbers

                if (this.value.length === 10) {
                    mobileError.classList.add("d-none");
                    this.classList.remove("invalid");
                } else {
                    mobileError.classList.remove("d-none");
                    this.classList.add("invalid");
                }
            });

            /* ------------------ EMAIL VALIDATION ------------------- */
            const emailInput = document.getElementById("newsletter-email");
            const emailError = document.getElementById("email-error");

            emailInput.addEventListener("input", function() {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (emailPattern.test(this.value)) {
                    emailError.classList.add("d-none");
                    this.classList.remove("invalid");
                } else {
                    emailError.classList.remove("d-none");
                    this.classList.add("invalid");
                }
            });


            /* ------------------ DATE INPUT VALIDATION ------------------- */
            const dateInput = document.getElementById("newsletter-date");
            const dateError = document.getElementById("date-error");

            dateInput.addEventListener("input", function() {
                let value = this.value.replace(/\D/g, ""); // Only numbers

                // Auto-format dd/mm/yyyy
                if (value.length >= 3 && value.length <= 4) {
                    value = value.replace(/(\d{2})(\d{1,2})/, "$1/$2");
                } else if (value.length >= 5) {
                    value = value.replace(/(\d{2})(\d{2})(\d{1,4})/, "$1/$2/$3");
                }

                this.value = value;
                validateDate();
            });

            function validateDate() {
                const dateValue = dateInput.value;
                const regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;

                if (!regex.test(dateValue)) return showDateError();

                const [_, dd, mm, yyyy] = dateValue.match(regex);

                const day = parseInt(dd);
                const month = parseInt(mm);
                const year = parseInt(yyyy);

                if (month < 1 || month > 12) return showDateError();

                const daysInMonth = new Date(year, month, 0).getDate();
                if (day < 1 || day > daysInMonth) return showDateError();

                if (year < 1900 || year > 2099) return showDateError();

                hideDateError();
                return true;
            }

            function showDateError() {
                dateError.classList.remove("d-none");
                dateInput.classList.add("invalid");
            }

            function hideDateError() {
                dateError.classList.add("d-none");
                dateInput.classList.remove("invalid");
            }

        });
    </script>




    <div class="container-fluid copyright-bar">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    © <a class="fw-semi-bold text-dark" href="https://www.hkmdehradun.org/">
                        Hare Krishna Movement Dehradun
                    </a>
                    All Rights Reserved.
                </div>
            </div>
        </div>
    </div>


    <!-- Loader Start -->
    <div class="loader-cont d-flex justify-content-center align-items-center" id="loader">
        <div class="loader-box text-center">

            <!-- Logo -->
            <img src="{{ asset('assets/10/HKM-Dehradun-Logo-1024x617.jpg') }}" alt="Hare Krishna Movement Dehradun Logo"
                class="loader-logo">

            <!-- Loading Bar -->
            <div class="progress-container mt-4">
                <div class="progress-bar" id="progressBar"></div>
            </div>

        </div>
    </div>
    <!-- Loader End -->
    <!-- Styles -->
    <style>
        /* Fullscreen container */
        .loader-cont {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            /* Same white background as screenshot */
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Logo size */
        .loader-logo {
            max-width: 250px;
            height: auto;
        }

        /* Progress Bar Holder */
        .progress-container {
            width: 200px;
            height: 6px;
            background: #d9d9d9;
            border-radius: 4px;
            margin: 15px auto 0;
            overflow: hidden;
        }

        /* Actual loading bar */
        .progress-bar {
            height: 6px;
            width: 0%;
            background: #0076ba;
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        /* FadeOut animation */
        .fade-out {
            animation: fadeOut 0.7s ease forwards;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                visibility: hidden;
            }
        }

        .product-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 250px;
            border-radius: 8px;
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: 0.3s;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .product-item:hover .product-overlay {
            opacity: 1;
        }

        .product-overlay .btn {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        @media (max-width: 576px) {
            .product-overlay .btn {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }

        .copyright-bar {
            background: #f1f1f1;
            /* clean light gray */
            color: #444;
            /* dark readable text */
            text-align: center;
            /* center alignment */
            padding: 15px 0;
            font-size: 0.95rem;
        }

        .copyright-bar a {
            color: #0d6efd;
            text-decoration: none;
        }

        /* Button position + style */
        .back-to-top-circle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 55px;
            height: 55px;
            background: transparent;
            border: none;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
        }

        /* Background circle */
        .bg-circle {
            fill: none;
            stroke: #1f7bd8;
            stroke-width: 3;
        }

        /* Animated progress circle */
        .arrow-up {
            position: absolute;
            color: #1f7bd8;
            /* updated */
            font-size: 22px;
            font-weight: bold;
            z-index: 5;
        }

        .progress-circle {
            fill: none;
            stroke: #ffc107;
            /* updated */
            stroke-width: 3;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transform: rotate(-90deg);
            transform-origin: center;
        }
    </style>

    @include('chatbot')



    <button id="backToTopBtn"
        class="back-to-top-circle"
        aria-label="scroll to top">
        <svg width="50" height="50" viewBox="0 0 36 36">
            <circle class="bg-circle" cx="18" cy="18" r="16" />
            <circle class="progress-circle" cx="18" cy="18" r="16" />
        </svg>
        <span class="arrow-up">↑</span>
    </button>

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/parallax/parallax.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
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
        document.addEventListener("DOMContentLoaded", function() {
            let progress = 0;
            let bar = document.getElementById("progressBar");
            let loader = document.getElementById("loader");

            // Fake progress simulation while the page loads
            let simulate = setInterval(() => {
                if (progress < 90) { // progress reaches max 90% before full load
                    progress += 2;
                    bar.style.width = progress + "%";
                }
            }, 100);

            // When the site is fully loaded
            window.addEventListener("load", () => {
                clearInterval(simulate);

                // Jump to 100%
                bar.style.width = "100%";

                // Fade out loader
                setTimeout(() => {
                    loader.classList.add("fade-out");
                }, 500);
            });
        });
    </script>
    <script>
        const btn = document.getElementById("backToTopBtn");
        const progressCircle = document.querySelector(".progress-circle");
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

        window.addEventListener("scroll", () => {
            const scrollVal = window.scrollY;

            // show button after 5% scroll
            if (scrollVal > window.innerHeight * 0.05) {
                btn.style.display = "flex";
            } else {
                btn.style.display = "none";
            }

            // progress animation
            const progress = scrollVal / maxScroll;
            const offset = 100 - progress * 100;
            progressCircle.style.strokeDashoffset = offset;
        });

        btn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('scripts')

</body>

</html>