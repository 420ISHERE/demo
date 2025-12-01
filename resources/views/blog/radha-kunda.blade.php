@extends('main')

@section('title', 'Appearance of Radha-Kunda | HKM Dehradun')
@section('meta_description', 'Discover the transcendental appearance of Śrī Rādhā-Kuṇḍa — the holiest lake dear to
Śrīmatī Rādhārāṇī and Lord Kṛṣṇa. Learn its glories from scriptures like Nectar of Instruction and Chaitanya
Charitamrita, shared by HKM Dehradun.')
@section('meta_keywords', 'Radha Kunda, Appearance of Radha Kunda, Srimati Radharani, Lord Krishna, Govardhana Hill,
Chaitanya Mahaprabhu, Bhakti Yoga, HKM Dehradun, Gaudiya Vaishnava, Vrindavan, Nectar of Instruction')

@section('meta_og')
<!-- Open Graph -->
<meta property="og:title" content="Appearance of Radha-Kunda | HKM Dehradun">
<meta property="og:description"
    content="Explore the glories of Śrī Rādhā-Kuṇḍa — the divine lake of love most dear to Śrīmatī Rādhārāṇī. Learn how it was revealed by Lord Chaitanya Mahāprabhu and glorified by the Acharyas.">
<meta property="og:image" content="{{ asset('assets/images/blog/radha-kunda.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">

<!-- Twitter -->
<meta name="twitter:title" content="Appearance of Radha-Kunda | HKM Dehradun">
<meta name="twitter:description"
    content="Discover the transcendental appearance of Śrī Rādhā-Kuṇḍa — the holiest lake of divine love, revealed by Lord Chaitanya.">
<meta name="twitter:image" content="{{ asset('assets/images/blog/radha-kunda.jpg') }}">
<meta name="twitter:card" content="summary_large_image">
@endsection

@push('styles')
<style>
    @media (max-width: 768px) {

        img[alt="Radha-Kunda"],
        img[alt="Aerial view of Radha-Kunda"] {
            width: 100% !important;
            height: auto !important;
        }
    }
</style>
@endpush

@section('content')
<div class="container my-5" data-aos="fade-up">

    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary display-6 display-md-4 display-lg-3">
            Appearance of Radha-Kunda
        </h1>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/images/blog/radha-kunda.jpg') }}" alt="Radha-Kunda"
                class="img-fluid rounded shadow mt-3" style="width: 50%; height: auto;">
        </div>
    </div>

    <!-- Intro -->
    <div class="mb-4 fs-5 text-justify" style="line-height: 1.8;">
        <p>In <em>Nectar of Instruction</em>, the glorification of <strong>Śrī Rādhā-Kuṇḍa</strong> is as follows:</p>
    </div>

    <!-- Verse 9 -->
    <div class="bg-light p-4 rounded shadow-sm mb-4" data-aos="fade-up">
        <pre class="fst-italic text-center fs-5 fs-md-4 mx-auto" style="background: linear-gradient(90deg, #FFD700, #FFA500);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    white-space: pre-wrap;
                    word-wrap: break-word;
                    font-weight: 600;
                    line-height: 1.7;">
vaikuṇṭhāj janito varā madhu-purī tatrāpi rāsotsavād
vṛndāraṇyam udāra-pāṇi-ramaṇāt tatrāpi govardhanaḥ
Radha kundam ihāpi gokula-pateḥ premāmṛtāplāvanāt
kuryād asya virājato giri-taṭe sevāṁ vivekī na kaḥ
        </pre>
        <p><strong>TRANSLATION:</strong> The holy place known as Mathura is spiritually superior to Vaikuntha, the
            transcendental world, because the Lord appeared there. Superior to Mathura-Puri is the transcendental forest
            of Vrindavana because of Krishna’s rasa-lila pastimes, and superior to the forest of Vrindavana is
            Govardhana Hill, for it was raised by the divine hand of Sri Krishna and was the site of His various loving
            pastimes, and above all, the superexcellent Sri Radha-Kunda stands supreme, for it is overflooded with the
            ambrosial nectarean prema of the Lord of Gokula, Sri Krishna. Where, then, is that intelligent person who is
            unwilling to serve this divine Radha-Kunda, which is situated at the foot of Govardhana Hill?</p>
    </div>

    <!-- Verse 10 -->
    <div class="bg-light p-4 rounded shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
        <pre class="fst-italic text-center fs-5 fs-md-4 mx-auto" style="background: linear-gradient(90deg, #FFD700, #FFA500);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    white-space: pre-wrap;
                    word-wrap: break-word;
                    font-weight: 600;
                    line-height: 1.7;">
karmibhyaḥ parito hareḥ priyatayā vyaktiṁ yayur jñāninas
tebhyo jñāna-vimukta-bhakti-paramāḥ premaika-niṣṭhās tataḥ
tebhyas tāḥ paśu-pāla-paṅkaja-dṛśas tābhyo ’pi sā rādhikā
preṣṭhā tadvad iyaṁ tadīya-sarasī tāṁ nāśrayet kaḥ kṛtī
        </pre>
        <p><strong>TRANSLATION:</strong> In the shastra it is said that of all types of fruitive workers, he who is
            advanced in knowledge of the higher values of life is favored by the Supreme Lord Hari. Out of many such
            people who are advanced in knowledge (jnanis), one who is practically liberated by virtue of his knowledge
            may take to devotional service. He is superior to the others. However, one who has actually attained prema,
            pure love of Krishna, is superior to him. The gopis are exalted above all the advanced devotees because they
            are always totally dependent upon Sri Krishna, the transcendental cowherd boy. Among the gopis, Srimati
            Radharani is the most dear to Krishna. Her kunda (lake) is as profoundly dear to Lord Krishna as this most
            beloved of the gopis. Who, then, will not reside at Radha-Kunda and, in a spiritual body surcharged with
            ecstatic devotional feelings (aprākṛta-bhāva), render loving service to the Divine Couple Sri Sri
            Radha-Govinda, who perform Their aṣṭa-kālīya-līlā, Their eternal eightfold daily pastimes. Indeed, those who
            execute devotional service on the banks of Radha-Kunda are the most fortunate people in the universe.</p>
    </div>

    <!-- Verse 11 -->
    <div class="bg-light p-4 rounded shadow-sm mb-4" data-aos="fade-up" data-aos-delay="200">
        <pre class="fst-italic text-center fs-5 fs-md-4 mx-auto" style="background: linear-gradient(90deg, #FFD700, #FFA500);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    white-space: pre-wrap;
                    word-wrap: break-word;
                    font-weight: 600;
                    line-height: 1.7;">
Krishnasyoccaiḥ praṇaya-vasatiḥ preyasībhyo ’pi rādhā
kuṇḍaṁ cāsyā munibhir abhitas tādṛg eva vyadhāyi
yat preṣṭhair apy alam asulabhaṁ kiṁ punar bhakti-bhājāṁ
tat premedaṁ sakṛd api saraḥ snātur āviṣkaroti
        </pre>
        <p><strong>TRANSLATION:</strong> Of the many objects of favored delight and of all the lovable damsels of
            Vraja-bhumi, Srimati Radharani is certainly the most treasured object of Krishna’s love. And in every
            respect, Her divine kunda is described by great sages as similarly dear to Him. Undoubtedly Radha-Kunda is
            very rarely attained even by the great devotees; therefore it is even more difficult for ordinary devotees
            to attain. If one simply bathes once within those holy waters, one’s pure love of Krishna is fully aroused.
        </p>
    </div>

    <!-- Explanation -->
    <div class="fs-5 text-justify" style="line-height: 1.8;" data-aos="fade-up">
        <p>Why is <strong>Śrī Rādhā-Kuṇḍa</strong> considered so exalted? <strong>Śrīla Prabhupāda</strong> explains
            that Rādhā-Kuṇḍa belongs to Śrīmatī Rādhārāṇī, who is the most beloved object of Śrī Kṛṣṇa. The great sages
            describe that Śrī Rādhā-Kuṇḍa is as dear to Kṛṣṇa as Rādhā Herself. There is a quotation from
            <em>Laghu-bhāgavatāmṛta (Uttara-khaṇḍa 45)</em>, as quoted in <em>Chaitanya-charitamrita</em>:
        </p>

        <blockquote class="border-start border-3 border-primary ps-3 fst-italic text-secondary">
            yathā rādhā priyā viṣṇos<br>
            tasyāḥ kuṇḍaṁ priyaṁ tathā<br>
            sarva-gopīṣu saivaikā<br>
            viṣṇor atyanta-vallabhā
        </blockquote>

        <p>“Just as Śrīmatī Rādhārāṇī is dear to the Supreme Lord Kṛṣṇa [Viṣṇu], so Her bathing place [Rādhā-Kuṇḍa] is
            equally dear to Kṛṣṇa. Among all the gopīs, She alone stands supreme as the Lord’s most beloved.”</p>

        <p><strong>Śrīla Rūpa Gosvāmī</strong> recommends that even if one cannot live permanently on the banks of
            Rādhā-Kuṇḍa, he should at least take a bath in the lake as many times as possible. This is a most important
            item in the execution of devotional service.</p>
    </div>

    <div class="text-center my-5" data-aos="zoom-in">
        <img src="{{ asset('assets/images/blog/radha-kunda-aerial.jpg') }}" alt="Aerial view of Radha-Kunda"
            class="img-fluid rounded shadow" style="width: 50%; height: auto;">
        <p class="fst-italic text-muted mt-2">Sacred waters of Śrī Rādhā-Kuṇḍa, the holiest lake in Vraja</p>
    </div>

    <div class="fs-5 text-justify" style="line-height: 1.8;" data-aos="fade-up">
        <p><strong>Śrīla Bhaktisiddhānta Sarasvatī Ṭhākura</strong> writes that even great sages and great devotees like
            Nārada and Sanaka do not get an opportunity to come to Rādhā-Kuṇḍa to take their baths...</p>

        <p><strong>Śrīla Bhaktivinoda Ṭhākura</strong> writes that Śrī Rādhā-Kuṇḍa is the most select place for those
            interested in advancing their devotional service in the wake of the lady friends (sakhīs) and confidential
            serving maids (mañjarīs) of Śrīmatī Rādhārāṇī...</p>

        <p class="fw-semibold text-center mt-4">
            Today, Rādhā-Kuṇḍa is worshiped with deep reverence by Gauḍīya Vaiṣṇavas
            and stands as the holiest place of divine love in all of creation.
        </p>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true,
        easing: 'ease-in-out'
    });
</script>
@endpush

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
@endpush