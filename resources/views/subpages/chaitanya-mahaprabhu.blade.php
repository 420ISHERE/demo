@extends('main')

@section('title', 'Sri Chaitanya Mahaprabhu | HKM Dehradun')
@section('meta_description', 'Discover the divine appearance, teachings, and significance of Sri Chaitanya Mahaprabhu —
the incarnation of Lord Krishna who spread the Sankirtana movement and the chanting of the holy names.')

@push('meta')
<!-- SEO Meta Tags -->
<meta name="keywords"
    content="Sri Chaitanya Mahaprabhu, Lord Krishna, Bhakti Yoga, Gaudiya Vaishnavism, Sankirtana Movement, Hare Krishna Maha Mantra, HKM Dehradun, Chaitanya philosophy, devotion, spirituality">
<meta name="author" content="HKM Dehradun">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph / Facebook -->
<meta property="og:title" content="Sri Chaitanya Mahaprabhu | HKM Dehradun">
<meta property="og:description"
    content="Learn about Sri Chaitanya Mahaprabhu — the divine incarnation of Lord Krishna who spread Bhakti and the Sankirtana movement through chanting of the holy names.">
<meta property="og:image" content="{{ asset('assets/images/chaitanya1.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">
<meta property="og:site_name" content="HKM Dehradun">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Sri Chaitanya Mahaprabhu | HKM Dehradun">
<meta name="twitter:description"
    content="Explore the divine life and teachings of Sri Chaitanya Mahaprabhu — Lord Krishna’s incarnation who spread the message of love through chanting the holy names.">
<meta name="twitter:image" content="{{ asset('assets/images/chaitanya2.jpg') }}">
@endpush

@section('content')
<style>
    .fade-in {
        animation: fadeInUp 1.1s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
        url('{{ asset("assets/images/chaitanya-bg.jpg") }}') top/cover no-repeat;
        color: #fff;
        text-align: center;
        padding: 120px 20px;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .content-section {
        background: #fdfcf9;
        padding: 60px 0;
    }

    .content-section h2 {
        color: #004d40;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .content-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }

    .highlight {
        color: #1c92dd;
        font-weight: bold;
    }

    .faq-section {
        background-color: #fff;
        padding: 60px 0;
    }

    .faq-item {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 20px;
        transition: 0.3s ease;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.05);
        margin-bottom: 15px;
    }

    .faq-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-item h5 {
        color: #004d40;
        font-weight: 600;
    }

    .faq-item p {
        color: #555;
        margin-top: 8px;
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2rem;
        }

        .content-section {
            padding: 40px 15px;
        }
    }

    .hero-text-box {
        background: rgba(0, 0, 0, 0.45);
        /* semi-transparent black */
        padding: 20px 25px;
        border-radius: 12px;
        display: inline-block;
        backdrop-filter: blur(3px);
        /* optional smooth effect */
    }
</style>

<!-- Header Section -->
<section class="hero-section wow fadeIn">
    <div class="container">

        <h1 class="fade-in hero-text-box" style="color: #1c92dd;">Sri Chaitanya Mahaprabhu</h1>

        <p class="lead fade-in mt-3 hero-text-box">
            The Golden Avatar of Lord Krishna who revealed the path of love and devotion
            through the chanting of the Holy Names.
        </p>

    </div>
</section>


<!-- Main Content -->
<section class="content-section fade-in">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-12">
                <p>Five thousand years ago, Lord Krishna appeared on earth to reestablish the lost tenets of religion
                    and gave the eternal message of the <span class="highlight">Bhagavad-gita</span>. His final
                    instruction was, <em>“sarva dharman parityajya mam ekam sharanam vraja”</em> — “Abandon all
                    varieties of religion and just surrender unto Me.”</p>
                <p>As Kali-yuga began, people became less qualified to understand this profound message of surrender.
                    Out of compassion, Lord Krishna appeared again — this time as <span class="highlight">Sri Chaitanya
                        Mahaprabhu</span> — to demonstrate the practical way to surrender to God.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-12">
                <p>Sri Chaitanya Mahaprabhu appeared on <strong>18th February, 1486</strong> during a full lunar eclipse
                    in Bengal. Historically, He is known as the founder of the <span class="highlight">Bhakti
                        Movement</span> in Bengal, and spiritually, He is worshipped as the combined incarnation of
                    <strong>Radha and Krishna</strong>.
                </p>
                <p>He introduced the simplest method of surrender — the chanting of <strong>Krishna’s holy
                        names</strong> through <em>Sankirtana</em> (congregational chanting). This movement spread like
                    wildfire across Bengal, Orissa, and later throughout India.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Teachings of Chaitanya Mahaprabhu</h2>
                <p>The philosophy of Sri Chaitanya Mahaprabhu teaches us to remain in our current life situation and
                    simply <span class="highlight">chant the Hare Krishna Maha-mantra</span>. Through sincere chanting,
                    one becomes purified, liberated from material existence, and attains the highest perfection of human
                    life — <em>Love of Krishna</em>.</p>
                <p>His message is universal and practical, accessible to everyone — regardless of background, age, or
                    status. Through the power of <strong>bhakti</strong> and the holy names, one can experience divine
                    love and inner peace.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase">Frequently Asked Questions</h2>
        </div>

        <div class="faq-item">
            <h5>Who was Chaitanya Mahaprabhu?</h5>
            <p>A 15th-century Indian saint and founder of the Gaudiya Vaishnava tradition. He is considered an
                incarnation of Lord Krishna who popularized Bhakti yoga and the chanting of the Hare Krishna
                Maha-mantra.</p>
        </div>

        <div class="faq-item">
            <h5>What are Chaitanya Mahaprabhu’s key teachings?</h5>
            <p>He emphasized <strong>Bhakti</strong> (devotion) to Lord Krishna, the practice of
                <strong>Sankirtana</strong> (congregational chanting), and surrendering to God to experience divine
                love.
            </p>
        </div>

        <div class="faq-item">
            <h5>What is the Hare Krishna Maha-mantra?</h5>
            <p>“Hare Krishna, Hare Rama, Hare Rama, Hare Hare, Rama Krishna, Hare Hare” — a powerful mantra for
                spiritual purification and connection with the Supreme Lord.</p>
        </div>

        <div class="faq-item">
            <h5>What is the significance of Chaitanya Mahaprabhu’s appearance?</h5>
            <p>It marks Lord Krishna’s compassion in Kali Yuga — appearing to show humanity the simple path of chanting
                and devotion accessible to all.</p>
        </div>

        <div class="faq-item">
            <h5>How can I learn more about Chaitanya Mahaprabhu?</h5>
            <p>You can read sacred texts like the <strong>Bhagavad-Gita</strong> and <strong>Chaitanya
                    Charitamrita</strong>, visit Vaishnava temples, and participate in <em>Sankirtana</em> organized by
                HKM Dehradun.</p>
        </div>
    </div>
</section>


<!-- SEO Schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "Sri Chaitanya Mahaprabhu | HKM Dehradun",
        "description": "Learn about Sri Chaitanya Mahaprabhu — the incarnation of Lord Krishna who spread Bhakti and the Sankirtana movement through chanting of the holy names.",
        "author": {
            "@type": "Organization",
            "name": "HKM Dehradun"
        },
        "publisher": {
            "@type": "Organization",
            "name": "HKM Dehradun",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('assets/images/hkm-logo.png') }}"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        }
    }
</script>
@endsection