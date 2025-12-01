@extends('main')
@section('title', 'Hare Krishna Movement - Dehradun | Secrets of Life')
@section('content')

<style>
    .main-heading {
        font-size: 28px;
        font-weight: 700;
        color: #1580e8;
        margin: 35px 0 20px;
    }

    .features-list {
        font-size: 16px;
        line-height: 28px;
        margin-left: 20px;
    }

    .register-card {
        background: #1e88e5;
        border-radius: 12px;
        padding: 25px;
        color: #fff;
        width: 100%;
    }

    .register-card .form-control {
        border-radius: 8px;
    }

    .register-card label {
        font-weight: 500;
        margin-bottom: 3px;
    }

    .donation-box {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 18px;
        border: 1px solid #dce8ff;
    }

    .donation-box strong {
        color: #000;
        font-weight: 600;
    }

    .topic-title {
        font-size: 22px;
        font-weight: 700;
        color: #1580e8;
        margin-top: 20px;
    }

    .topic-text {
        font-size: 15px;
        line-height: 26px;
        color: #333;
        margin-bottom: 10px;
    }

    ul.topic-text li {
        margin-bottom: 6px;
    }
</style>

<img class="w-full" data-src="uploads/festival_banner/festival_banner7567838.webp" alt="Secrets of Life" src="assets/12/secrets-of-life.png" style="width: 100%;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;">

<div class="container">

    <h2 class="main-heading">Features of the Course</h2>

    <ul class="features-list">
        <li>Gift voucher for every session</li>
        <li>Meditation kit</li>
        <li>Session recordings available</li>
        <li>Personal counseling</li>
    </ul>

    <div class="row mt-4">

        <!-- LEFT SIDE – REGISTER CARD -->
        <div class="col-lg-5 mb-4">

            <div class="register-card">

                <h5 class="fw-bold mb-2">Register Here</h5>

                <div class="d-flex justify-content-between mb-3">
                    <span>Total Donation Amount:</span>
                    <strong>₹ 0.00</strong>
                </div>

                <!-- Donation Item -->
                <div class="donation-box">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>Single Pass</strong>
                        <div class="d-flex align-items-center">
                            <span class="fw-bold me-2">₹ 600.00</span>
                            <button class="btn btn-outline-light btn-sm">-</button>
                            <button class="btn btn-outline-light btn-sm ms-1">+</button>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form>
                    <div class="mb-3">
                        <label>Full Name *</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Phone Number *</label>
                        <div class="input-group">
                            <span class="input-group-text">+91</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Email ID *</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>PAN Number (Optional)</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Message (Puja will be performed for you)</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Receive Prasadam (Only within India)
                        </label>
                    </div>

                    <button type="button" class="btn btn-light fw-bold w-100">
                        Donate ₹ 0.00
                    </button>
                </form>

            </div>
        </div>

        <!-- RIGHT SIDE CONTENT -->
        <div class="col-lg-7">

            <h3 class="topic-title">Secrets of Relationship Management</h3>
            <p class="topic-text">
                Practical tips to build strong, trustworthy, productive, healthy, and meaningful relationships.
            </p>

            <h3 class="topic-title">Secrets of Happiness</h3>
            <ul class="topic-text">
                <li>Everyone in the world is searching for happiness—learn how to achieve unlimited happiness.</li>
                <li>Understand the real and eternal sources of true happiness.</li>
            </ul>

            <h3 class="topic-title">Secrets of Self-Control</h3>
            <ul class="topic-text">
                <li>How to control anger</li>
                <li>How to overcome negativity</li>
                <li>How to stay positive every day</li>
                <li>How to remain focused on goals</li>
                <li>How to develop self-discipline</li>
            </ul>

            <h3 class="topic-title">Why Spirituality in My Life – The Topmost Secret</h3>
            <ul class="topic-text">
                <li>What is spirituality?</li>
                <li>If I have everything in life, why do I still need spirituality?</li>
                <li>Is spirituality practical in everyday life?</li>
            </ul>

        </div>

    </div>

</div>

@endsection