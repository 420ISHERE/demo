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
                    <span><a href="tel:8121151508" style="color: #404A3D;">+91 8121151508</a></span>
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
        /* NAVBAR */
        .navbar {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
            padding: 6px 20px !important;
            background: rgba(255, 255, 255, 0.55);

            backdrop-filter: blur(10px);
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
            /* font-weight: 700; */
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
                /* make dropdown menus full-width or auto as desired */
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

            /* indent submenu items for clarity */
            .dropdown-submenu>.dropdown-menu .dropdown-item {
                padding-left: 28px;
            }

            /* make toggles clickable and show pointer */
            .dropdown-toggle {
                cursor: pointer;
            }
        }

        /* DROPDOWN ITEMS (BIGGER FONT) */
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

        /* SUBMENU TITLE */
        .dropdown-submenu>.dropdown-item.dropdown-toggle {
            font-size: 16px !important;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
        }

        /* ARROWS */
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
            /* right arrow */
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

        /* Add spacing for Donate button on mobile only */
        @media (max-width: 991px) {
            .btn-blue {
                margin-top: 12px !important;
                margin-bottom: 10px !important;
                display: inline-block;
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="https://hkmdehradun.org/assets/10/HKM-Dehradun-Logo-1024x617.jpg" style="height: 60px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
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
                                class="dropdown-item {{ request()->routeIs('gita-for-youth') ? 'active' : '' }}">Gita For Youth</a></li>
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
    </nav>

    <script>
        (function() {
            const MOBILE_BREAKPOINT = 991;

            function isMobile() {
                return window.innerWidth <= MOBILE_BREAKPOINT;
            }

            document.addEventListener('click', function(e) {
                // close all open mobile menus if click outside navbar (on mobile)
                if (!isMobile()) return;

                const navbar = document.querySelector('.navbar');
                if (!navbar) return;

                if (!navbar.contains(e.target)) {
                    // remove all .show in navbar
                    navbar.querySelectorAll('.dropdown-menu.show').forEach(function(m) {
                        m.classList.remove('show');
                    });
                    return;
                }

                // handle clicks on main dropdown toggles
                const mainToggle = e.target.closest(
                    '.nav-item.dropdown > .dropdown-toggle, .nav-item.dropdown > .nav-link.dropdown-toggle');
                if (mainToggle && isMobile()) {
                    e.preventDefault();
                    const parent = mainToggle.closest('.nav-item.dropdown');
                    const menu = parent.querySelector(':scope > .dropdown-menu');
                    if (menu) {
                        const willShow = !menu.classList.contains('show');
                        // close other sibling dropdowns
                        parent.parentElement.querySelectorAll(
                            ':scope > .nav-item.dropdown > .dropdown-menu.show').forEach(function(m) {
                            m.classList.remove('show');
                        });
                        if (willShow) menu.classList.add('show');
                        else menu.classList.remove('show');
                    }
                    return;
                }

                // handle clicks on submenu toggles (Philosophy / Media)
                const submenuToggle = e.target.closest('.dropdown-submenu > .dropdown-item.dropdown-toggle');
                if (submenuToggle && isMobile()) {
                    e.preventDefault();
                    const submenu = submenuToggle.nextElementSibling;
                    if (submenu) {
                        const willShow = !submenu.classList.contains('show');
                        // close sibling submenus in same level
                        const parentMenu = submenuToggle.closest('.dropdown-menu');
                        parentMenu.querySelectorAll(':scope > .dropdown-submenu > .dropdown-menu.show').forEach(
                            function(m) {
                                m.classList.remove('show');
                            });
                        if (willShow) submenu.classList.add('show');
                        else submenu.classList.remove('show');
                    }
                    return;
                }

                // clicks on normal links will follow naturally
            });

            // optional: close mobile menus on window resize to desktop
            window.addEventListener('resize', function() {
                if (!isMobile()) {
                    document.querySelectorAll('.dropdown-menu.show').forEach(function(m) {
                        m.classList.remove('show');
                    });
                }
            });
        })();
    </script>

    @yield('content')

    <footer class="container-fluid footer-bg py-3 text-dark footer position-relative overflow-hidden wow fadeIn"
        data-wow-delay="0.1s">

        <!-- Lottie Background -->
        <!-- <dotlottie-wc src="https://lottie.host/9c5dad69-e0e4-42ce-aaa5-79ffcfbad315/2NDzucYL08.lottie" autoplay loop
            class="footer-lottie"></dotlottie-wc> -->

        <div class="container py-2 position-relative" style="z-index: 1;">
            <div class="row g-5 align-items-start">

                <!-- Address Section -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Address</h5>

                    <p class="footer-list">
                        <i class="fa fa-phone-alt  me-3"></i>
                        <a href="tel:+918121151508">+91 8121151508</a>
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
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Become a Monk</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>

                <!-- Newsletter Section -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Join Our Newsletter</h5>

                    <form id="newsletter-form">
                        <div class="mb-3">
                            <input type="text" class="footer-input" placeholder="Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" class="footer-input" placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="tel" class="footer-input" placeholder="Mobile Number" required>
                        </div>

                        <!-- DATE FIELD -->
                        <div class="mb-3">
                            <input type="date" id="dob" class="footer-input" placeholder="dd/mm/yyyy" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="agree" required>
                            <label class="form-check-label footer-agree" for="agree">
                                I agree to <a href="#">Terms & Conditions</a>,
                                <a href="#">Privacy Policy</a> & receive updates.
                            </label>
                        </div>

                        <button type="submit" class="footer-submit-btn">SUBSCRIBE</button>
                    </form>



                </div>

            </div>
        </div>

    </footer>
    <style>
        /* Footer Background */
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
    </style>

    @include('chatbot')



    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('scripts')

</body>

</html>