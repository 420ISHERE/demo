@extends('main')

@section('title')
How to Follow Ekadashi at Home | HKM Dehradun
@endsection

@section('meta')
<meta name="description"
    content="A step-by-step guide on how to observe Ekadashi at home with fasting, prayers, chanting, and devotion to Lord Krishna. Discover the spiritual benefits of Ekadashi fasting.">
<meta name="keywords"
    content="Ekadashi fasting, Ekadashi rules, how to follow Ekadashi, Ekadashi at home, Ekadashi vrat, Krishna devotion, fasting for Krishna, HKM Dehradun blog">
<link rel="canonical" href="https://www.hkmdehradun.org/blog/how-to-follow-ekadashi" />

<!-- Open Graph for social sharing -->
<meta property="og:title" content="How to Follow Ekadashi at Home | HKM Dehradun">
<meta property="og:description"
    content="Learn how to follow Ekadashi at home through fasting, prayers, chanting, and devotion. A complete guide for spiritual growth.">
<meta property="og:image" content="{{ asset('assets/images/blog/ekadashi-hero.png') }}">
<meta property="og:url" content="https://www.hkmdehradun.org/blog/how-to-follow-ekadashi">
<meta property="og:type" content="article">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="How to Follow Ekadashi at Home | HKM Dehradun">
<meta name="twitter:description"
    content="A practical guide for devotees on how to observe Ekadashi at home with devotion and discipline.">
<meta name="twitter:image" content="{{ asset('assets/images/blog/ekadashi-hero.png') }}">
@endsection

@section('content')
<style>
.hero-section {
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

/* Large screen adjustment (≥1200px) */
@media (min-width: 1200px) {
    .hero-section {
        background-position: center -120px;
        /* shift image upward */
    }
}
</style>

<!-- Hero Section Start -->
<div class="bg-dark text-white text-center py-5 hero-section"
    style="background-image: url('{{ asset('assets/images/blog/ekadashi-hero.png') }}');">
    <div class="container py-5">
        <h1 class="display-4 fw-bold" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);">
            How to Follow Ekadashi at Home
        </h1>
        <p class="lead fst-italic">Simple Steps to Observe the Sacred Day of Fasting and Devotion</p>
    </div>
</div>


<!-- Hero Section End -->

<!-- Blog Content Start -->
<div class="container my-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            {{-- Section 1 --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-3 mb-md-0 text-center">
                    <img src="{{ asset('assets/images/blog/ekadashi-prayers.png') }}"
                        class="img-fluid rounded w-100 mx-auto d-block" alt="Devotees observing Ekadashi at home">
                </div>
                <div class="col-md-6">
                    <h2 class="h4 mb-3">What is Ekadashi?</h2>
                    <p>
                        Ekadashi is the 11th day of both the waxing and waning moon, observed twice a month. It is a
                        spiritually significant day dedicated to Lord Krishna and Vishnu. Scriptures describe Ekadashi
                        as a powerful day that purifies sins, strengthens devotion, and helps one progress on the path
                        of bhakti.
                    </p>
                </div>
            </div>

            {{-- Section 2 --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 mb-3 mb-md-0 text-center">
                    <img src="{{ asset('assets/images/blog/ekadashi-food.png') }}"
                        class="img-fluid rounded w-100 mx-auto d-block" alt="Ekadashi prasadam plate">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="h4 mb-3">Fasting Rules on Ekadashi</h2>
                    <p>
                        The main rule of Ekadashi is to avoid grains and beans. Depending on one’s capacity, devotees
                        can observe different levels of fasting:
                    </p>
                    <ul>
                        <li><strong>Nirjala:</strong> Complete fast without food or water (for the strong and healthy).
                        </li>
                        <li><strong>Phalahara:</strong> Only fruits, nuts, and water.</li>
                        <li><strong>Anukalpa:</strong> Non-grain simple food such as sabudana, potatoes, milk, and
                            vegetables.</li>
                    </ul>
                    <p class="fw-bold text-success">The essence of Ekadashi is not just fasting, but engaging more in
                        devotion and remembrance of Krishna.</p>
                </div>
            </div>

            {{-- Quote --}}
            <blockquote class="blockquote border-start border-3 ps-3 mb-5 fst-italic text-muted">
                “Of all fasts, fasting on Ekadashi is the most purifying. It destroys sins and awakens love for
                Krishna.”
                <footer class="blockquote-footer mt-1">Padma Purana</footer>
            </blockquote>

            {{-- Section 3 --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h2 class="h4 mb-3">Spiritual Practices to Follow</h2>
                    <p>
                        On Ekadashi, the focus should be on enhancing one’s devotional activities rather than merely
                        avoiding food. Some recommended practices are:
                    </p>
                    <ul>
                        <li>Chanting extra rounds of the Hare Krishna Mahamantra.</li>
                        <li>Reading Bhagavad-gita and Srimad Bhagavatam.</li>
                        <li>Listening to kirtan and lectures of devotees.</li>
                        <li>Offering special prayers and worship to Lord Krishna or Vishnu.</li>
                        <li>Associating with devotees and discussing Krishna-katha.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/blog/ekadashi-kirtan.png') }}"
                        class="img-fluid rounded w-100 mx-auto d-block" alt="Chanting on Ekadashi day">
                </div>
            </div>

            {{-- Section 4 --}}
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="h4 mb-3">Breaking the Fast (Parana)</h2>
                    <p>
                        The fast is broken on the next day, Dwadashi, within the specific time window called <em>parana
                            time</em>. Traditionally, devotees first offer grains to Lord Krishna and then honor
                        prasadam to break the fast.
                    </p>

                    <p class="fw-bold text-dark">
                        By sincerely observing Ekadashi at home, one not only strengthens discipline but also receives
                        immense spiritual benefit and Krishna’s mercy.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog Content End -->

@endsection