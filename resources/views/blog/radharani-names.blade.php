@extends('main')

@section('title', '11 Beautiful Names of Srimati Radharani for Baby Girls | HKM Dehradun')
@section('meta_description', 'Discover 11 divine names of Srimati Radharani for baby girls with meanings. Inspired by
Radha Rani’s love and devotion — HKM Dehradun Official Blog.')
@section('meta_keywords', 'Radha Rani names, baby girl names Hindu, spiritual names, Srimati Radharani, Krishna devotee
names, HKM Dehradun blogs, Vrindavan temple, Hindu baby names')

@section('content')
<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
/* Hero Section */
.hero-section {
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    height: 60vh;
    overflow: hidden;
    animation: zoomIn 10s ease-in-out infinite alternate;
}

.hero-section::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4);
}

.hero-section h1 {
    position: relative;
    z-index: 1;
    color: #fff;
    text-shadow: 0 3px 8px rgba(0, 0, 0, 0.6);
    animation: fadeInUp 2s ease-in-out;
}

/* Large screen adjustment (≥1200px) */
@media (min-width: 1200px) {
    .hero-section {
        background-position: center -280px;
    }
}

/* Content Section */
.container .row {
    margin-bottom: 4rem;
}

/* Image styling */
.img-fluid {
    border-radius: 15px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.img-fluid:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3);
}

/* Content text */
.content h2 {
    color: #333;
    margin-bottom: 1rem;
}

.content p,
.content ul,
.content ol {
    color: #555;
    line-height: 1.7;
}

/* Animation keyframes */
@keyframes zoomIn {
    0% {
        background-size: 100%;
    }

    100% {
        background-size: 110%;
    }
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

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        height: 45vh;
        background-position: center top;
    }

    .hero-section h1 {
        font-size: 1.8rem;
    }

    .img-fluid {
        width: 85%;
        margin: 0 auto;
    }
}
</style>

<!-- Hero Section Start -->
<div class="bg-dark text-white text-center py-5 hero-section"
    style="background-image: url('{{ asset('assets/images/blog/radha-ashtami-banner.jpg') }}');">
    <div class="container py-5" data-aos="fade-up">
        <h1 class="text-center mb-4 fw-bold text-primary">
            11 Important Names of Srimati Radharani
        </h1>
    </div>
</div>

<!-- Content Section Start -->
<div class="container my-5">

    <!-- Introduction Section: Text Left | Image Right -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6" data-aos="fade-right">
            <h2 class="fw-bold">Introduction</h2>
            <p>
                Naming a baby is a sacred and joyful act in every spiritual family. A name is not just a label—it
                carries meaning, emotion, and blessings for the child’s future.
                Choosing a baby girl’s name inspired by <strong>Srimati Radharani</strong>, the eternal consort of Lord
                Krishna, adds divine significance to this occasion.
            </p>

            <p>
                <strong>Srimati Radharani</strong> symbolizes pure love and devotion. Her names reflect spiritual grace,
                beauty, and compassion—qualities every parent wishes for their daughter.
            </p>
        </div>

        <div class="col-md-6 text-center" data-aos="fade-left">
            <img src="{{ asset('assets/images/blog/radha-rani-bio.jpg') }}" alt="Srimati Radharani Image HKM Dehradun"
                class="img-fluid" style="max-width: 75%; height: 75%;">
            <p class="text-muted mt-2 small">Image: Srimati Radharani – HKM Dehradun</p>
        </div>
    </div>

    <!-- Importance of Name: Image Left | Text Right -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold">Importance of Choosing the Right Name</h2>
            <p>
                The name you choose shapes your child’s personality, confidence, and spiritual direction. Selecting a
                devotional name connects your family to divine energy and positive vibrations.
            </p>
            <ul>
                <li>Choose a name that carries deep spiritual or cultural meaning.</li>
                <li>Ensure it is easy to pronounce and resonates with your heart.</li>
                <li>Consider names with connection to Krishna or Radha for divine blessings.</li>
            </ul>
        </div>

        <div class="col-md-6 text-center" data-aos="fade-right">
            <img src="{{ asset('assets/images/blog/radharani-flowers.png') }}" alt="Radha Rani Flowers HKM Dehradun"
                class="img-fluid" style="max-width: 70%; height: auto;">
        </div>
    </div>

    <!-- Names Section -->
    <div class="content mt-5" data-aos="zoom-in-up">
        <h2 class="fw-bold">11 Popular Radha Rani Names for Baby Girls</h2>
        <p>
            Here are 11 meaningful and popular names of <strong>Srimati Radharani</strong> that represent divine beauty,
            compassion, and love.
        </p>
    </div>

    <div class="row mt-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-6">
            <h5 class="fw-bold">1. Anuragini</h5>
            <p>Meaning “one who is full of love and devotion,” reflecting Radha Rani’s selfless affection.</p>

            <h5 class="fw-bold">2. Binodini</h5>
            <p>Meaning “the delightful one,” honoring Radha’s ability to bring happiness to all beings.</p>

            <h5 class="fw-bold">3. Bhagavati</h5>
            <p>Means “the divine mother,” representing Radha Rani’s supreme position among goddesses.</p>

            <h5 class="fw-bold">4. Gaurangi</h5>
            <p>Meaning “the golden-complexioned one,” highlighting Radha’s radiant beauty.</p>

            <h5 class="fw-bold">5. Haripriya</h5>
            <p>Means “beloved of Lord Hari,” symbolizing Radha’s eternal love for Krishna.</p>
        </div>

        <div class="col-md-6">
            <h5 class="fw-bold">6. Keshavi</h5>
            <p>Means “the one with beautiful hair,” representing elegance and charm.</p>

            <h5 class="fw-bold">7. Madhavi</h5>
            <p>Means “the consort of Madhava,” signifying Radha’s closeness to Lord Krishna.</p>

            <h5 class="fw-bold">8. Mallika</h5>
            <p>Meaning “the jasmine flower,” symbolizing purity and compassion.</p>

            <h5 class="fw-bold">9. Mahi</h5>
            <p>Means “Goddess Earth,” embodying patience and nurturing love.</p>

            <h5 class="fw-bold">10. Nandini</h5>
            <p>Means “daughter of Nandagopa,” representing happiness and divine joy.</p>

            <h5 class="fw-bold">11. Taruni</h5>
            <p>Means “the ever-young one,” describing Radharani’s eternal youth and beauty.</p>
        </div>
    </div>

    <!-- Vrindavan Chandrodaya Mandir Section -->
    <!-- <div class="content mt-5" data-aos="fade-up">
        <h2 class="fw-bold">Vrindavan Chandrodaya Mandir – A Divine Offering</h2>
        <p>
            <strong>HKM Vrindavan</strong> is building the world’s tallest Radha Krishna temple — the
            <strong>Vrindavan Chandrodaya Mandir</strong>.
            This grand project is dedicated to Srimati Radharani and Lord Krishna, aiming to spread devotion and
            spiritual awareness.
        </p>
        <p>
            <strong>HKM Dehradun</strong> invites everyone to be part of this divine mission. The temple will host
            thousands of devotees, serve daily prasadam, and shelter hundreds of cows.
        </p>
    </div> -->

    <!-- Conclusion -->
    <div class="content mt-5" data-aos="fade-up">
        <h2 class="fw-bold">Conclusion</h2>
        <p>
            Naming your daughter after Srimati Radharani is a sacred expression of love and devotion.
            May her name inspire her to live with purity, compassion, and faith.
        </p>
    </div>

    <!-- FAQs -->
    <div class="content mt-5" data-aos="fade-up">
        <h2 class="fw-bold">FAQs</h2>
        <ol>
            <li><strong>What are three names of Radha Rani?</strong> Radhika, Vrajeswari, and Gandharvika.</li>
            <li><strong>Why choose a name inspired by Radha Rani?</strong> To bless your daughter with divine grace and
                beauty.</li>
            <li><strong>Why is naming a child after Radha Rani auspicious?</strong> It invites divine love, purity, and
                success.</li>
            <li><strong>Which name means Radha for a girl?</strong> The name “Radha” itself symbolizes love, success,
                and devotion.</li>
        </ol>
    </div>
</div>

<!-- AOS Animation Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
    duration: 1200,
    once: true,
    easing: 'ease-in-out',
});
</script>
@endsection