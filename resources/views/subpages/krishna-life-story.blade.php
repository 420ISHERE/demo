@extends('main')

@section('title', 'Lord Krishna – Supreme Personality of Godhead | HKM Dehradun')
@section('meta_description', 'Discover the divine pastimes, teachings, and significance of Lord Krishna – the Supreme
Personality of Godhead. Learn about His life, His message in the Bhagavad Gita, and His eternal love for devotees.')

@section('content')
<style>
    /* Animation and styling */
    .fade-in {
        animation: fadeInUp 1s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .krishna-header {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url('{{ asset("assets/images/krishna.png") }}') center/cover no-repeat;
        color: #fff;
        padding: 120px 20px;
        text-align: center;
    }

    .krishna-header h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .content-section {
        background-color: #fdfaf6;
        padding: 60px 0;
    }

    .content-section h2 {
        color: #004d40;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .content-section p {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.8;
    }

    .faq-section {
        background: #fff;
        padding: 60px 0;
    }

    .faq-item {
        border: 1px solid #e1e1e1;
        border-radius: 10px;
        margin-bottom: 15px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        background-color: #f8f9fa;
        transform: translateY(-3px);
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
    }

    .faq-item h5 {
        color: #004d40;
        font-weight: bold;
    }

    .faq-item p {
        margin-top: 10px;
        color: #555;
    }

    @media (max-width: 768px) {
        .krishna-header h1 {
            font-size: 2.2rem;
        }

        .content-section {
            padding: 40px 15px;
        }
    }
</style>

<!-- Header -->
<section class="krishna-header wow fadeIn">
    <div class="container">
        <h1 class="fade-in" style="color: aqua;">Lord Krishna – The Supreme Personality of Godhead</h1>
        <p class="lead fade-in mt-3">Explore the divine life, teachings, and eternal message of Lord Krishna as revealed
            in the Gaudiya Vaishnava tradition.</p>
    </div>
</section>

<!-- Content Section -->
<section class="content-section fade-in">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 text-center text-md-start">
                <img src="{{ asset('assets/images/krishna.png') }}" alt="Lord Krishna"
                    class="img-fluid rounded shadow-lg wow fadeInUp" style="width: 75%; ">
            </div>
            <div class="col-lg-6">
                <p>Krishna is one of the most revered and beloved deities in Hinduism and is considered to be the
                    Supreme Personality of Godhead in the Gaudiya Vaishnava tradition. He is known for his charming
                    personality, divine pastimes, and teachings on the path of love and devotion.</p>
                <p>According to Srila Prabhupada, the founder of ISKCON, Krishna is the ultimate source of all existence
                    and the embodiment of all divine qualities, including infinite beauty, knowledge, wealth, power,
                    fame, and renunciation.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5 g-4 g-md-5 flex-lg-row-reverse">
            <!-- Image Section -->
            <div class="col-12 col-lg-6 text-center text-lg-end">
                <img src="{{ asset('assets/images/krishna-childhood.png') }}" alt="Krishna Childhood"
                    class="img-fluid rounded shadow-lg wow fadeInUp" style="width: 50%; max-width: 400px;">
            </div>

            <!-- Text Section -->
            <div class="col-12 col-lg-6">
                <p>Krishna’s life story, described in ancient texts like the Bhagavatam, tells how He was born over
                    5,000 years ago in Mathura and spent His childhood in Vrindavan. His divine pastimes — from lifting
                    Govardhan Hill to defeating powerful demons — reveal His supreme power and compassion.</p>
                <p>His enchanting flute and playful interactions with the gopis symbolize divine love and devotion
                    beyond worldly understanding.</p>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-lg-12">
                <h2>Krishna’s Teachings</h2>
                <p>The <strong>Bhagavad Gita</strong> encapsulates Krishna’s timeless wisdom on the self, the universe,
                    and the path to liberation. His teachings emphasize <em>bhakti</em> — devotional service — as the
                    highest form of yoga, guiding souls toward eternal happiness and freedom from the cycle of birth and
                    death.</p>
                <p>He encourages all to engage in acts of love, service, and remembrance — chanting His holy names,
                    hearing His pastimes, and offering heartfelt devotion.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Summary</h2>
                <p>Lord Krishna is the Supreme Personality of Godhead, the source of all existence, and the embodiment
                    of divine love. His teachings, pastimes, and example continue to inspire millions around the world
                    to live a life of devotion, self-realization, and joy.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
        </div>

        <div class="faq-item">
            <h5>Who is Krishna?</h5>
            <p>In the Gaudiya Vaishnava tradition, Krishna is revered as the Supreme Personality of Godhead, the source
                of all existence. He is known for His divine love, beauty, and teachings on devotion.</p>
        </div>

        <div class="faq-item">
            <h5>What are some of Krishna's famous stories?</h5>
            <p>Krishna’s childhood in Vrindavan, His lifting of Govardhan Hill, and His divine flute melodies are among
                His most beloved pastimes.</p>
        </div>

        <div class="faq-item">
            <h5>What are Krishna’s key teachings?</h5>
            <p>Krishna teaches that devotion (bhakti) is the purest path to attain Him. He encourages chanting, service,
                and surrender as the way to experience divine love.</p>
        </div>

        <div class="faq-item">
            <h5>What significance does Krishna hold?</h5>
            <p>Krishna embodies love, compassion, and truth — inspiring millions to follow a path of devotion and
                spiritual realization.</p>
        </div>
    </div>
</section>

<!-- SEO Schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "Lord Krishna – Supreme Personality of Godhead | HKM Dehradun",
        "description": "Discover the divine life, teachings, and significance of Lord Krishna as revealed by the Gaudiya Vaishnava tradition.",
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