@extends('main')

@section('title', 'Humility in Devotional Life | Hare Krishna Movement Dehradun')

@section('meta')
<meta name="description"
    content="Discover the importance of humility in devotional life. Learn how humility strengthens Krishna consciousness, fosters empathy, and helps us progress in spiritual practice.">
<meta name="keywords"
    content="humility in devotional life, Krishna consciousness humility, spiritual humility, devotee humility, Hare Krishna Dehradun, humility in bhakti, devotional service">
<meta property="og:title" content="Humility in Devotional Life | Hare Krishna Movement Dehradun">
<meta property="og:description"
    content="Discover the importance of humility in devotional life. Learn how humility strengthens Krishna consciousness, fosters empathy, and helps us progress in spiritual practice.">
<meta property="og:image" content="{{ asset('assets/images/blog/humility-hero.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
@endsection

@section('content')

<!-- Hero Section Start -->
<div class="bg-dark text-white text-center py-5"
    style="background: url('{{ asset('assets/images/blog/humility-hero.png') }}') center/cover no-repeat;">
    <div class="container py-5">
        <h1 class="display-4 fw-bold" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);">
            Humility in Devotional Life
        </h1>
        <p class="lead fst-italic">The Foundation of Bhakti and Spiritual Progress</p>
    </div>
</div>
<!-- Hero Section End -->

<!-- Blog Content Start -->
<div class="container my-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            {{-- Section 1 --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/blog/humility-service.png') }}" class="img-fluid rounded"
                        alt="Devotee practicing humility in service">
                </div>
                <div class="col-md-6">
                    <p>
                        In the journey of Krishna consciousness, humility is the key that unlocks the door to true
                        bhakti.
                        A humble heart allows us to surrender fully, accept guidance, and serve without pride or
                        expectation.
                    </p>
                    <p>
                        Srila Prabhupada often emphasized that humility is not weakness—it is strength. By lowering
                        ourselves before Krishna,
                        we rise spiritually and gain the power to overcome ego, anger, and envy.
                    </p>
                </div>
            </div>

            {{-- Section 2 (Reversed) --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/blog/humility-prayer.png') }}" class="img-fluid rounded"
                        alt="Devotee praying with humility">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="h4 fw-bold mb-3">Why Humility is Essential</h2>
                    <p>
                        Without humility, even advanced sadhana can turn into pride. A humble devotee, however, sees
                        everyone as a servant of Krishna and never considers themselves superior.
                    </p>
                    <p>
                        As Lord Chaitanya Mahaprabhu taught:
                        <em>“One should chant the holy name of the Lord in a humble state of mind,
                            considering oneself lower than the straw in the street; one should be more tolerant than a
                            tree...”</em>
                        (Śikṣāṣṭaka 3).
                    </p>
                </div>
            </div>

            {{-- Quote --}}
            <blockquote class="blockquote border-start border-3 ps-3 mb-5 fst-italic text-muted">
                “Humility is the ornament of a devotee. Without it, devotion cannot remain steady.”
                <footer class="blockquote-footer mt-1">Śrīla Rūpa Gosvāmī</footer>
            </blockquote>

            {{-- Section 3 --}}
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="bg-light p-3 rounded border-start border-secondary border-3 mb-3">
                        <strong>Bhagavad-gītā 13.8</strong><br>
                        Humility, pridelessness, nonviolence, tolerance... these are knowledge.
                    </div>
                    <div class="bg-light p-3 rounded border-start border-secondary border-3">
                        <strong>Cc. Antya 20.22</strong><br>
                        One should be more tolerant than a tree, devoid of all sense of false prestige, and ready to
                        offer all respect to others.
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/blog/humility-scripture.png') }}" class="img-fluid rounded"
                        alt="Scriptural references about humility">
                </div>
            </div>

            {{-- Section 4 --}}
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h2 class="h4 fw-bold mb-3">How to Cultivate Humility</h2>
                    <ul>
                        <li>Engage in service without seeking recognition.</li>
                        <li>See Krishna as the doer and ourselves as instruments.</li>
                        <li>Regularly hear from scriptures and senior devotees.</li>
                        <li>Practice introspection and self-correction.</li>
                    </ul>

                    <p class="fw-bold text-dark">
                        Humility is not thinking less of yourself—it is thinking of yourself less and Krishna more.
                    </p>

                    {{-- YouTube Embed --}}
                    <div class="ratio ratio-16x9 mt-3">
                        <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="Humility in Devotional Life"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            {{-- Internal Links --}}
            <div class="mt-5">
                <p>👉 Read more on <a href="/blog/fault-finding">The Subtle Poison of Fault-Finding</a></p>
                <p>🙏 Support our mission through our <a href="/donate">Donation Page</a></p>
            </div>

        </div>
    </div>
</div>
<!-- Blog Content End -->

@endsection