@extends('main')

@section('title', 'Kartika Deepotsava 2025 | The Hare Krishna Movement - Dehradun')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white text-center py-5"
    style="background: url('{{ asset('assets/festivals/deepotsava-banner.jpg') }}') center top -550px / cover no-repeat;">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Kartika Deepotsava 2025</h1>
        <p class="lead">7th October – 5th November 2025</p>
        <p class="mt-3">Join us at <strong>The Hare Krishna Movement – Dehradun</strong> for the sacred month-long
            celebrations of Kartika Deepotsava and receive the blessings of Lord Damodara.</p>
        <a href="#donate" class="btn btn-warning btn-lg mt-3">Sponsor a Lamp or Seva</a>
    </div>
</section>

<!-- Intro Section -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4 text-primary">Experience the Divine Light of Kartika Deepotsava</h2>
        <p class="lead">
            Today marks the sacred commencement of the most auspicious month of Kartika. Join us for the month-long
            grand celebrations of Kartika Deepotsava at <strong>The Hare Krishna Movement – Dehradun</strong>, and
            receive the blessings of Lord Damodara.
        </p>
        <p>
            Deepotsava, also known as the <strong>Festival of Lights</strong>, is celebrated annually during the
            auspicious month of Kartika (October–November). This festival commemorates the
            <strong>Damodara-lila</strong>, one of the most endearing childhood pastimes of Lord Krishna, highlighting
            His divine playfulness and loving relationship with His devotees.
        </p>
    </div>
</section>

<!-- Gallery + Damodara Story Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gallery Carousel (Left Side) -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div id="deepotsavaCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#deepotsavaCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#deepotsavaCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#deepotsavaCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#deepotsavaCarousel" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#deepotsavaCarousel" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>

                    <!-- Carousel Images -->
                    <div class="carousel-inner rounded shadow">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/festivals/deepotsava1.jpg') }}" class="d-block w-100 rounded"
                                alt="Damodara Arati Darshan">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava2.jpg') }}" class="d-block w-100 rounded"
                                alt="Public Offering Arati">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava3.jpg') }}" class="d-block w-100 rounded"
                                alt="Lighting the Lamp">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava4.jpg') }}" class="d-block w-100 rounded"
                                alt="Devotees Offering Lamps">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava5.jpg') }}" class="d-block w-100 rounded"
                                alt="Shayana Pallakki Utsava">
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#deepotsavaCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#deepotsavaCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Damodara Story (Right Side) -->
            <div class="col-md-6">
                <h2 class="text-primary mb-4">The Story of Lord Damodara</h2>
                <p>
                    The name “Damodara” originates from two Sanskrit words — “<em>dama</em>” meaning rope, and
                    “<em>udara</em>” meaning belly. After Lord Krishna mischievously stole butter, His affectionate
                    mother Yashoda tied Him with a rope around His belly. Hence, He became known as Damodara. This
                    pastime beautifully reveals how the Supreme Lord, though unconquerable, allows Himself to be bound
                    by
                    the love of His devotees.
                </p>

                <h5 class="mt-3 text-secondary">Krishna Bound by His Mother’s Love</h5>
                <p>
                    Once, Lord Krishna broke a pot of butter and began eating in a secluded place. Mother Yashoda caught
                    Him feeding butter to monkeys. Seeing her approach, Krishna ran in fear, but Yashoda lovingly chased
                    and captured Him. She tried to bind Him to a mortar, but the rope was always two inches short.
                    Finally, seeing her devotion, Krishna allowed Himself to be bound — showing that love conquers the
                    Supreme.
                </p>

                <h5 class="mt-3 text-secondary">Deliverance of Nalakuvara and Manigriva</h5>
                <p>
                    Bound to the mortar, Krishna crawled between two arjuna trees, pulling the mortar and causing the
                    trees to fall. From them emerged Nalakuvara and Manigriva, sons of Kuvera, who had been cursed by
                    sage Narada. Krishna delivered them, granting liberation and devotion.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Glories Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-primary mb-4 text-center">The Glories of Kartika Deepotsava</h2>
        <p>
            It is said that just as Lord Damodara is dear to His devotees, the month of Kartika is also especially dear
            to them. During this sacred month, devotees worship Lord Damodara by offering ghee lamps daily and
            celebrating many important festivals.
        </p>
        <p>
            The <em>Skanda Purana</em> mentions that offering a lamp to Lord Keshava during Kartika grants liberation to
            one’s ancestors. The <em>Padma Purana</em> states that anyone who offers a ghee lamp to Lord Damodara in
            this month is freed from sins and attains the abode of Lord Hari.
        </p>
    </div>
</section>

<!-- Experience Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-primary mb-4 text-center">Experience Deepotsava in Dehradun</h2>
        <p>
            Every evening during Deepotsava, the temple of <strong>The Hare Krishna Movement – Dehradun</strong> is
            illuminated with hundreds of lamps, filling the atmosphere with devotion and transcendental joy. The beauty
            of the Damodara arati, the chanting of <em>Damodarashtaka</em>, and the participation of devotees offering
            ghee lamps make this festival a spiritual delight.
        </p>

        <h4 class="mt-4 text-secondary">Celebrations Schedule</h4>
        <ul>
            <li><strong>Dates:</strong> 7 October – 5 November 2025</li>
            <li><strong>Timings:</strong> Daily from 7:30 PM onwards</li>
            <li><strong>Venue:</strong> The Hare Krishna Movement – Dehradun, Near Prem Nagar</li>
        </ul>

        <p>
            Join us for daily <strong>Damodara Arati</strong>, <strong>lamp offerings</strong>, and
            <strong>bhajans</strong>. Participate in this divine festival and receive unlimited blessings from Lord
            Damodara.
        </p>
    </div>
</section>

<!-- Donation Section -->
<section id="donate" class="py-5 text-center">
    <div class="container">
        <h2 class="text-primary mb-4">Offer Sevas for Kartika Deepotsava</h2>
        <p>
            Contribute towards <strong>Annadana</strong>, <strong>Go Seva</strong>, <strong>Pushpalankara</strong>, and
            <strong>Vishesha Naivedya Sevas</strong> to the Lord. Sponsor these sevas and receive special prasadam and
            divine blessings during this most auspicious month.
        </p>
        <a href="https://www.hkmdehradun.org/annadaan-seva" class="btn btn-warning btn-lg mt-3">Donate Now</a>
        <p class="mt-4">For more details, contact: <strong>+91 8121151508</strong></p>
    </div>
</section>

@endsection