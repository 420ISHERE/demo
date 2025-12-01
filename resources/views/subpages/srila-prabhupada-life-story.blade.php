@extends('main')

@section('title', 'Śrīla Prabhupāda – Life Story | HKM Dehradun')
@section('meta_description', 'Discover the divine life story of His Divine Grace A.C. Bhaktivedanta Swami Prabhupāda —
Founder-Ācārya of ISKCON. Learn how he spread Krishna Consciousness worldwide with unwavering faith and compassion.')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta name="title" content="Śrīla Prabhupāda – Life Story | HKM Dehradun">
<meta name="description"
    content="Read the inspiring journey of His Divine Grace A.C. Bhaktivedanta Swami Prabhupāda — his divine birth, spiritual mission, and establishment of ISKCON across the world.">
<meta name="keywords"
    content="Srila Prabhupada, ISKCON Founder, A.C. Bhaktivedanta Swami, HKM Dehradun, Krishna Consciousness, Hare Krishna, ISKCON history, spiritual life, Bhaktivedanta Book Trust">
<meta name="author" content="HKM Dehradun">
<meta name="robots" content="index, follow">
<meta name="language" content="English">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Śrīla Prabhupāda – Life Story | HKM Dehradun">
<meta property="og:description"
    content="Discover the inspiring life of Śrīla Prabhupāda, who spread the teachings of Lord Krishna worldwide.">
<meta property="og:image" content="{{ asset('assets/images/srila-prabhupada-og.jpg') }}">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Śrīla Prabhupāda – Life Story | HKM Dehradun">
<meta name="twitter:description"
    content="Journey through the divine life of Śrīla Prabhupāda, the spiritual pioneer of the Krishna Consciousness Movement.">
<meta name="twitter:image" content="{{ asset('assets/images/srila-prabhupada-og.jpg') }}">
@endsection

@section('content')

<!-- AOS (Animate On Scroll) Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    .life-section {
        padding: 80px 0;
    }

    .life-section:nth-child(even) {
        background-color: #f8f9fa;
    }

    .life-title {
        font-size: 2.3rem;
        font-weight: 700;
        color: #c2185b;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .life-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }

    .life-image {
        border-radius: 15px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
    }

    .divider {
        width: 80px;
        height: 4px;
        background-color: #c2185b;
        margin: 0 auto 40px auto;
        border-radius: 5px;
    }
</style>

<!-- Hero Section -->
<section class="text-center bg-light py-5" data-aos="fade-down">
    <div class="container">
        <h1 class="fw-bold display-4 text-dark">Śrīla Prabhupāda – Life Story</h1>
        <p class="lead text-muted mt-3">The Divine Journey of His Divine Grace A.C. Bhaktivedanta Swami Prabhupāda,
            Founder-Ācārya of ISKCON</p>
        <div class="divider"></div>
        <img src="{{ asset('assets/images/srila-prabhupada.jpg') }}" class="img-fluid life-image mt-3"
            alt="Srila Prabhupada">
    </div>
</section>

<!-- Childhood -->
<section class="life-section" data-aos="fade-right">
    <div class="container">
        <h2 class="life-title text-center">Childhood</h2>
        <p class="life-content">
            Śrīla Prabhupāda was born on <strong>1st September 1896</strong> in <strong>Calcutta (Kolkata)</strong>
            and was named <strong>Abhay Charan De</strong>. His parents, <strong>Gour Mohan De</strong> and
            <strong>Rājani Devi</strong>,
            were ardent devotees of Lord Krishna. His father’s only wish was that his son would become a <strong>devotee
                of Śrīmatī Rādhārāṇī</strong>.
        </p>
    </div>
</section>

<!-- Youth and Married Life -->
<section class="life-section" data-aos="fade-up">
    <div class="container">
        <h2 class="life-title text-center">Youth and Married Life</h2>
        <p class="life-content">
            Abhay studied at <strong>Scottish Churches’ College</strong> and supported <strong>Gandhi’s non-cooperation
                movement</strong>.
            Out of principle, he refused to accept his degree under British rule. In <strong>1918</strong>, he married
            <strong>Rādhārāṇī Devi</strong> and later started his own <strong>pharmaceutical company</strong>.
        </p>
    </div>
</section>

<!-- Meeting His Spiritual Master -->
<section class="life-section" data-aos="fade-right">
    <div class="container">
        <h2 class="life-title text-center">Meeting His Spiritual Master</h2>
        <p class="life-content">
            In <strong>1922</strong>, Abhay met his spiritual master, <strong>Śrīla Bhaktisiddhānta Sarasvatī
                Gosvāmī</strong>,
            who instructed him to <em>“Preach Krishna Consciousness in the Western world.”</em>
            Deeply moved, Abhay took this instruction as his life mission. He later founded the magazine
            <strong>Back to Godhead</strong>, which continues to be published worldwide today.
        </p>
    </div>
</section>

<!-- Retired Life -->
<section class="life-section" data-aos="fade-up">
    <div class="container">
        <h2 class="life-title text-center">Retired Life</h2>
        <p class="life-content">
            In <strong>1950</strong>, Abhay accepted <em>vānaprastha</em> (retired life) to dedicate himself to
            spiritual pursuits.
            He was honored with the title <strong>“Bhaktivedānta”</strong> in <strong>1953</strong> and settled in
            <strong>Vrindavana</strong>
            at the <strong>Rādhā-Dāmodara Temple</strong>, engaging deeply in writing and devotion.
        </p>
    </div>
</section>

<!-- Renounced Order -->
<section class="life-section" data-aos="fade-up">
    <div class="container">
        <h2 class="life-title text-center">Renounced Order of Life</h2>
        <p class="life-content">
            In <strong>1959</strong>, he took <strong>sannyāsa</strong> (renunciation) and became known as
            <strong>A.C. Bhaktivedanta Swami</strong>. He translated the <strong>Śrīmad Bhāgavatam</strong> and authored
            <em>Easy Journey to Other Planets</em>. In <strong>1965</strong>, at age 69, he traveled alone to New York
            on the
            <strong>Jaladuta</strong> ship with only 40 rupees and sacred scriptures, enduring two heart attacks during
            the journey.
        </p>
    </div>
</section>

<!-- Establishment of ISKCON -->
<section class="life-section" data-aos="fade-right">
    <div class="container">
        <h2 class="life-title text-center">Establishment of ISKCON</h2>
        <p class="life-content">
            In <strong>July 1966</strong>, Śrīla Prabhupāda founded the <strong>International Society for Krishna
                Consciousness (ISKCON)</strong> in New York.
            Soon, he established centers across <strong>North America, Europe, and India</strong>, including grand
            temples in
            <strong>Vrindavana</strong>, <strong>Mumbai</strong>, and <strong>Mayapur</strong>.
        </p>
    </div>
</section>

<!-- Literary Contributions -->
<section class="life-section" data-aos="fade-up">
    <div class="container">
        <h2 class="life-title text-center">Literary Contributions</h2>
        <p class="life-content">
            Śrīla Prabhupāda authored over <strong>60 volumes</strong> of Vedic literature and established the
            <strong>Bhaktivedanta Book Trust (BBT)</strong>. He translated Sanskrit and Bengali scriptures with
            devotion,
            often writing from <strong>1:30 a.m. to 4:30 a.m.</strong> every day.
        </p>
    </div>
</section>

<!-- Legacy -->
<section class="life-section bg-light" data-aos="zoom-in">
    <div class="container text-center">
        <h2 class="life-title">Legacy</h2>
        <p class="life-content">
            Śrīla Prabhupāda established <strong>108 temples</strong>, initiated <strong>5,000 disciples</strong>, and
            inspired millions
            to embrace Krishna Consciousness. His teachings continue to transform lives across the globe.
        </p>
        <blockquote class="blockquote mt-4">
            <p class="mb-0 fst-italic">"He lives forever by his divine instructions, and the follower lives with him."
            </p>
            <footer class="blockquote-footer mt-2">His Divine Grace A.C. Bhaktivedanta Swami Prabhupāda</footer>
        </blockquote>
    </div>
</section>

<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

@endsection