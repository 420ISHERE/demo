@extends('main')

@section('title', 'Celebrating Deepotsav in Braj – Festival of Lights')
@section('meta_description', 'Celebrations in temples of Vrindavan. Plan a trip to Vrindavan this October-November and
experience the culture of Braj.')

@push('styles')


<style>
    @keyframes pageFade {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* HERO SECTION */
    .hero-banner {
        background: linear-gradient(135deg, #0d47a1, #1565c0, #1e88e5);
        color: #fff;
        padding: 80px 25px;
        border-radius: 18px;
        text-align: center;
        margin-bottom: 45px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        animation: slideDown 1.3s ease;
    }

    .hero-banner h1 {
        font-size: 3rem;
        font-weight: 900;
        letter-spacing: 1px;
    }

    .gold-text {
        color: #ffd54f;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.7);
    }

    @keyframes slideDown {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* BLOG CARD */
    .blog-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 18px;
        border-left: 6px solid #ffb300;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        animation: fadeUp 1.2s ease;
    }

    @keyframes fadeUp {
        from {
            transform: translateY(25px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* HEADINGS */
    .section-heading {
        font-size: 2rem;
        font-weight: 800;
        color: #0d47a1;
        margin-top: 40px;
        margin-bottom: 20px;
        position: relative;
    }

    .section-heading::after {
        content: "";
        width: 60px;
        height: 4px;
        background: #ffb300;
        position: absolute;
        left: 0;
        bottom: -6px;
        border-radius: 2px;
    }

    p {
        font-size: 1.18rem;
        line-height: 1.9rem;
        margin-bottom: 20px;
        color: #333;
    }

    /* HIGHLIGHT BOX */
    .highlight-box {
        background: #fff3e0;
        border-left: 6px solid #ff9800;
        padding: 22px 28px;
        border-radius: 14px;
        margin-bottom: 28px;
        animation: glow 2s infinite alternate;
    }

    @keyframes glow {
        from {
            box-shadow: 0 0 5px rgba(255, 152, 0, 0.3);
        }

        to {
            box-shadow: 0 0 18px rgba(255, 152, 0, 0.6);
        }
    }

    /* SANSKRIT VERSES */
    .sanskrit {
        font-size: 1.25rem;
        background: #eef3ff;
        padding: 15px 18px;
        border-left: 4px solid #1e40af;
        border-radius: 10px;
        margin-bottom: 20px;
        font-weight: 600;
        font-family: "Noto Serif", serif;
        animation: fadeIn 1.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

@endpush


@section('content')

<div class="container py-5">

    <!-- HERO SECTION -->
    <div class="hero-banner">
        <h1>Celebrating Deepotsav in <span class="gold-text">Braj</span></h1>
        <p class="mt-3 fs-5">The Festival of Lights in the sacred land of Vrindavan</p>
    </div>

    <!-- MAIN CONTENT -->
    <div class="blog-card">

        <h2 class="section-heading">Celebrating Deepotsav in Braj, the Festival of Lights</h2>

        <p><strong>Meta description:</strong> Celebrations in temples of Vrindavan. Plan a trip to Vrindavan this
            October-November and experience the culture of Braj.</p>

        <h2 class="section-heading">Introduction</h2>

        <p>
            Deepotsav, the festival of light, celebrates the unique culture of Braj associated with the divine pastimes
            of Lord Krishna.
            This month-long festival is celebrated annually in the auspicious month of Kartik (October-November). As per
            the name,
            Deepotsav is celebrated by lighting diyas (earthen lamps) with devotion and offering them to the Deities of
            Srimati Radharani and Lord Krishna. Temples of Braj illuminate with the lights of millions of lamps on this
            occasion.
        </p>

        <p>
            Kartik Deepotsav celebrates the sacredness of our culture and tradition with a profound essence of devotion,
            enriching experience and unwavering enthusiasm. Moreover, it underlines the beautiful relationship and
            causeless mercy
            of the Supreme Lord, Sri Krishna, for His devotees. Read more to understand the significance of Kartik
            Deepotsav in Braj
            and much more.
        </p>

        <h2 class="section-heading">Significance of Kartik Month</h2>

        <p>
            Kartik month is considered the most spiritually potent of all months in the Vedic calendar. In the Padma
            Purana,
            Lord Vishnu declares that Kartik month is dear to Him, and all pious deeds during this time yield eternal
            spiritual merits.
            Kartik is also significant for its association with Krishna’s Damodara-lila.
        </p>

        <h2 class="section-heading">Damodara-lila</h2>

        <p>
            Kartik Deepotsav commemorates the famous Damodara-lila, where young Krishna was bound by Mother Yashoda’s
            love.
            Though Krishna is the Supreme, He allowed Himself to be “bound” by the ropes of His mother's affection.
        </p>

        <p>
            When little Krishna was caught stealing butter, Mother Yashoda tied Him to a mortar with a rope as a
            punishment.
            In Sanskrit, <strong>dāma</strong> means ropes, and <strong>udara</strong> means abdomen — hence Krishna was
            called <strong>Damodara</strong>.
        </p>

        <p>
            As soon as Krishna saw Mother Yashoda coming, He ran away, but she eventually caught Him. Every time she
            tried to tie Him, the rope was short by exactly two fingers — symbolizing:
        </p>

        <div class="highlight-box">
            <strong>1. Devotee’s effort</strong><br>
            <strong>2. Lord’s mercy</strong>
        </div>

        <p>
            Finally, when Mother Yashoda became tired, Krishna allowed Himself to be bound — showing that love conquers
            God.
        </p>

        <h2 class="section-heading">The Curse of Nalakuvara and Manigriva</h2>

        <p>The story of Nalakuvara and Manigriva is deeply related to Damodara Lila.</p>

        <div class="sanskrit">
            कृष्णस्तु गृहकृत्येषु व्यग्रायां मातरि प्रभुः ।<br>
            अद्राक्षीदर्जुनौ पूर्वं गुह्यकौ धनदात्मजौ ॥ २२ ॥
        </div>

        <p>
            Nalakuvara and Manigriva were the proud sons of Kuvera. Due to arrogance, they were cursed by Narada Muni
            to become trees. By divine arrangement, they appeared as twin Arjuna trees in Nanda Maharaja’s courtyard.
        </p>

        <div class="sanskrit">
            (ŚB 10.10.20–22 verses about their curse)
        </div>

        <p>
            Even though they became trees, Narada Muni blessed them that they would eventually see Lord Krishna and be
            liberated.
        </p>

        <h2 class="section-heading">How Lord Krishna Freed the Brothers</h2>

        <div class="sanskrit">
            ŚB 10.10.27 — describes how Krishna pulled the mortar and uprooted the trees.
        </div>

        <p>
            When the trees fell, two radiant divine beings emerged and immediately offered prayers to Lord Krishna.
        </p>

        <div class="sanskrit">
            ŚB 10.10.28 — the brothers glorifying Krishna.
        </div>

        <h2 class="section-heading">Importance of Kartik Deepotsav</h2>

        <p>
            Devotees offer ghee lamps every evening and sing <strong>Damodarashtakam</strong>.
            Deepdaan Seva is considered extremely auspicious in this holy month.
        </p>

        <h2 class="section-heading">Celebration in Braj</h2>

        <p>
            Temples across Braj glow with thousands of lamps, devotees perform aartik, and the atmosphere fills with
            kirtan.
        </p>

        <h2 class="section-heading">Kartik Deepotsav at HKM Dehradun</h2>

        <p>
            The temple celebrates the entire month with ghee lamp offering at 8 PM daily, singing Damodarashtakam,
            nauka vihar, Yamuna boat ride, and Shobha Yatra.
        </p>

    </div>
</div>

@endsection