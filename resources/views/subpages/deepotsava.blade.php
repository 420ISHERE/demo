@extends('main')

@section('title', 'Kartika Deepotsava 2025 | The Hare Krishna Movement - Dehradun')

@section('meta')
<meta name="description"
    content="Join the sacred month-long celebrations of Kartika Deepotsava 2025 at The Hare Krishna Movement – Dehradun. Experience Damodara Arati, lamp offerings, bhajans, and divine blessings.">
<meta name="keywords"
    content="Kartika Deepotsava 2025, Hare Krishna Movement Dehradun, Lord Damodara, Damodara Arati, Deepotsava Festival of Lights, Kartika Seva, Annadana, Pushpalankara, Spiritual Festival Dehradun">
@endsection

@section('content')

<style>
.calligraphy-text {
    font-family: 'Great Vibes', cursive;
    font-size: 4rem;
    color: #fff;
    text-align: center;
    position: relative;
    padding: 50px;
    background: url('/assets/brush-stroke.png') no-repeat center;
    background-size: contain;
    -webkit-background-clip: text;
}

.hero-section {
    background: url('assets/festivals/deepotsava-banner.jpg') center top / cover no-repeat;
}

/* Large screens and above */
@media (min-width: 1501px) {
    .hero-section {
        background-position: center top -550px;
    }
}

@media (min-width: 1401px) {
    .hero-section {
        background-position: center top -450px;
    }
}

/* Medium and small screens */
@media (max-width: 991.98px) {
    .hero-section {
        background-position: center top;
    }
}

@media (max-width: 1000px) {
    #deepotsavaCarousel {
        width: 100% !important;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section bg-dark text-white text-center py-5" role="banner">
    <div class="container py-5">
        <h1 class="display-4 fw-bold calligraphy-text">Kartika Deepotsava 2025</h1>
        <p class="lead" style="background-color: rgba(0, 0, 0, 0.5); display: inline-block; border-radius: 6px;">
            7th October – 5th November 2025
        </p>
        <p class="mt-3" style="background-color: rgba(0, 0, 0, 0.5); display: inline-block; border-radius: 6px;">
            Join us at <strong>The Hare Krishna Movement – Dehradun</strong> for the sacred month-long celebrations
            of Kartika Deepotsava and receive the blessings of Lord Damodara.
        </p>
        <a href="#donate" class="btn btn-warning btn-lg mt-3">Sponsor a Lamp or Seva</a>
    </div>
</section>

<!-- Intro Section -->
<section class="py-5 text-center" role="region" aria-labelledby="intro-heading">
    <div class="container">
        <h2 id="intro-heading" class="mb-4 text-primary">Experience the Divine Light of Kartika Deepotsava</h2>
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

<!-- Deepotsava Highlights & Story Section -->
<section class="py-5 bg-light" role="region" aria-labelledby="deepotsava-heading">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gallery Carousel (Left Side) -->
            <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-center">
                <div id="deepotsavaCarousel" class="carousel slide carousel-fade w-100 w-md-75" data-bs-ride="carousel"
                    data-bs-interval="3000" role="region" aria-label="Deepotsava Image Gallery">

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
                    <div class="carousel-inner rounded shadow text-center">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/festivals/deepotsava3.jpg') }}"
                                class="img-fluid d-block mx-auto rounded"
                                alt="Damodara Arati Darshan at Kartika Deepotsava 2025" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava5.jpg') }}"
                                class="img-fluid d-block mx-auto rounded"
                                alt="Public Offering Arati at Kartika Deepotsava 2025" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava6.jpg') }}"
                                class="img-fluid d-block mx-auto rounded"
                                alt="Lighting the Lamp at Kartika Deepotsava 2025" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava7.jpg') }}"
                                class="img-fluid d-block mx-auto rounded"
                                alt="Devotees Offering Lamps at Kartika Deepotsava 2025" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/festivals/deepotsava8.jpg') }}"
                                class="img-fluid d-block mx-auto rounded"
                                alt="Shayana Pallakki Utsava at Kartika Deepotsava 2025" loading="lazy">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Damodara Story (Right Side) -->
            <div class="col-12 col-md-6">
                <h2 id="deepotsava-heading" class="text-primary mb-4">The Story of Lord Damodara</h2>
                <article>
                    <p>
                        The name “Damodara” originates from two Sanskrit words — “<em>dama</em>” meaning rope, and
                        “<em>udara</em>” meaning belly. On one occasion, after Krishna mischievously stole butter, His
                        affectionate mother Yashoda tied Him with a rope around His belly. Hence, He became known as
                        Damodara. This episode shows how the Supreme Lord, though unconquerable, allows Himself to be
                        bound by the love of His devotees.
                    </p>

                    <h3 class="mt-3 text-secondary">Krishna Bound by His Mother’s Love</h3>
                    <p>
                        Once, Lord Krishna broke a pot of butter and began eating the butter in a secluded place. Mother
                        Yashoda found Him seated on an overturned mortar, feeding butter to monkeys. Seeing His mother
                        approach, Krishna ran in fear, but Yashoda lovingly chased and captured Him. She tried to bind
                        Him to a mortar as gentle chastisement, but the rope was always two inches short. Finally,
                        seeing her exhaustion and devotion, Krishna allowed Himself to be bound — showing that only love
                        can bind the Supreme Lord.
                    </p>

                    <h3 class="mt-3 text-secondary">Deliverance of Nalakuvara and Manigriva</h3>
                    <p>
                        Bound to the mortar, Krishna crawled between two arjuna trees, pulling the mortar and causing
                        the trees to fall. From them emerged Nalakuvara and Manigriva, sons of Kuvera, who had been
                        cursed
                        to become trees by sage Narada. Krishna delivered them, granting them liberation and devotion.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>



<!-- Glories Section -->
<section class="bg-light py-5">
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
<section class="py-5">
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

<!-- Audio/Video Section -->
<!-- <section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h2 class="mb-3">Listen to the Damodarashtaka</h2>
        <audio controls class="w-75">
            <source src="/media/damodarashtaka.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <h2 class="mt-5 mb-3">Watch the Deepotsava Moments</h2>
        <video controls class="w-75 rounded">
            <source src="/media/deepotsava-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section> -->

<!-- Donation Section -->
<section id="donate" class="py-5 bg-light text-center">
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