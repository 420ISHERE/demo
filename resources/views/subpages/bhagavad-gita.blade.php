@extends('main')

@section('title', 'Bhagavad-Gita | HKM Dehradun')
@section('meta_description', 'Explore the divine wisdom of the Bhagavad-Gita — the Song of God revealed by Lord Krishna
to Arjuna on the battlefield of Kurukshetra. Discover its teachings on Dharma, Karma, Yoga, and Moksha — a timeless
guide to inner peace and self-realization.')

@section('content')
<style>
    /* Hero Section */
    .hero-section {
        background: url('assets/images/gita-banner.png') center/cover no-repeat;
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        max-width: 850px;
        padding: 2rem;
        z-index: 2;
        animation: fadeInDown 1.5s ease-in-out;
    }

    .hero-content h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #fff;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
    }

    .hero-content p {
        font-size: 1.25rem;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.9);
    }

    /* Content Section */
    .content-section {
        background: linear-gradient(to bottom, #fffdf7, #fdf8ee);
        border-top: 5px solid #f0c36d;
        padding: 2rem 0;
        position: relative;
    }

    /* Decorative Background Glow */
    /* .content-section::before {
        content: '';
        position: absolute;
        top: -80px;
        left: -80px;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(240, 195, 109, 0.15), transparent 70%);
        z-index: 0;
    }

    .content-section::after {
        content: '';
        position: absolute;
        bottom: -100px;
        right: -100px;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(240, 195, 109, 0.15), transparent 70%);
        z-index: 0;
    } */

    /* Text Styling */
    .content-section h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #8b5e00;
        margin-top: 2.5rem;
        animation: fadeInLeft 1.2s ease-in-out;
    }

    .content-section h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #cc8800;
        margin-top: 1.5rem;
    }

    .content-section p,
    .content-section ul {
        line-height: 1.9;
        text-align: justify;
        color: #3c2f2f;
        margin-top: 0.75rem;
    }

    .content-section ul {
        list-style-type: disc;
        margin-left: 2rem;
    }

    /* Highlight Box */
    .highlight-box {
        background: linear-gradient(135deg, #fff7e6, #fef4df);
        border-left: 6px solid #e5a100;
        padding: 1.8rem;
        margin-top: 2rem;
        border-radius: 0.6rem;
        box-shadow: 0 0 10px rgba(229, 161, 0, 0.1);
        transition: transform 0.6s ease, box-shadow 0.6s ease;
    }

    .highlight-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(229, 161, 0, 0.25);
    }

    /* Explore Button */
    .explore-btn {
        display: inline-block;
        background-color: #e5a100;
        color: #fff;
        padding: 12px 35px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(229, 161, 0, 0.25);
        margin-top: 2rem;
        animation: fadeInUp 1.5s ease-in-out;
    }

    .explore-btn:hover {
        background-color: #b88200;
        transform: translateY(-3px);
    }

    /* Animations */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fade-up,
    .fade-left,
    .fade-right {
        opacity: 0;
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

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1>The Bhagavad-Gita: Unveiling the Song of God</h1>
        <p class="hero-text-box">“The divine dialogue between Lord Krishna and Arjuna — a timeless guide to life, duty, and liberation.”</p>
    </div>
</section>

<!-- Main Content -->
<section class="content-section">
    <div class="container position-relative">
        <p class="fade-up">
            Nestled within the epic <em>Mahabharata</em>, the <strong>Bhagavad-Gita</strong>, meaning "Song of God,"
            resonates as a timeless treasure trove of wisdom.
            More than just a religious text, it is a philosophical tapestry woven with profound insights into life,
            duty, and the path to liberation.
        </p>

        <h2 class="fade-left">A Battlefield Dialogue</h2>
        <p class="fade-right">
            On the <strong>Kurukshetra battlefield</strong>, Prince Arjuna faces a moral dilemma.
            Torn between duty and emotion, he turns to <strong>Lord Krishna</strong> — his divine charioteer — for
            guidance.
        </p>

        <h2 class="fade-left">Unveiling the Jewels of Wisdom</h2>
        <div class="highlight-box fade-up">
            <h3>Dharma: Righteous Living</h3>
            <p><strong>Dharma</strong> signifies living by righteousness and truth — aligning actions with divine will.
            </p>

            <h3>Karma: The Law of Action</h3>
            <p><strong>Karma</strong> teaches that every action bears fruit, urging awareness and detachment.</p>

            <h3>Yoga: Union with the Divine</h3>
            <p><strong>Yoga</strong> unites body, mind, and soul through paths of <em>karma</em>, <em>bhakti</em>, and
                <em>jnana</em>.
            </p>

            <h3>Moksha: Liberation</h3>
            <p><strong>Moksha</strong> is freedom from material bondage and realization of one’s eternal nature.</p>
        </div>

        <h2 class="fade-left">Beyond the Battlefield</h2>
        <p class="fade-right">
            The <strong>Bhagavad-Gita’s</strong> wisdom transcends time.
            Its teachings guide seekers toward clarity, duty, and devotion in daily life.
        </p>

        <h2 class="fade-left">Exploring the Gita</h2>
        <ul class="fade-up">
            <li><strong>Read Translations:</strong> Study Srila Prabhupada’s commentary — the essence of Vedic truth.
            </li>
            <li><strong>Discuss & Reflect:</strong> Engage with teachers and practitioners to internalize the lessons.
            </li>
            <li><strong>Live the Gita:</strong> Apply selfless service and mindfulness in everyday life.</li>
        </ul>

        <p class="fade-up mt-4">
            The <strong>Bhagavad-Gita</strong> calls every soul to awaken to divine consciousness.
            Let its wisdom guide you toward peace, purpose, and eternal joy.
        </p>
    </div>
</section>

<script>
    // Scroll Animation
    const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                entry.target.style.opacity = 1;
            }
        });
    }, {
        threshold: 0.2
    });

    animatedElements.forEach(el => observer.observe(el));
</script>
@endsection