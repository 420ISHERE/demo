@extends('main')


@section('title', 'ISKCON Temple in Dehradun: Abode of Divine Bliss')
@section('meta_description', 'ISKCON temple Dehradun is known as Sri Sri Radha Banke Bihari temple, located at Lachhiwala. The temple is best for sacred chanting and offers divine bliss.')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12 style="marging-bottom:10px;">
            
            <h1 class="mb-4">Sri Sri Radha Banke Bihari Temple Dehradun</h1>
            <p class="mb-4">
                The Hare Krishna Movement Dehradun (HKM Dehradun), registered in 2020 and spiritually mentored by ISKCON Bangalore, is a divine initiative that brings a life of happiness, good health, peace of mind, and devotion through God Consciousness. Inspired by the teachings of His Divine Grace A.C. Bhaktivedanta Swami Prabhupada, the temple serves as a sacred center for Krishna Bhakti in the heart of Uttarakhand.
            </p>

            <h2 class="mb-3">ISKCON Temple in Dehradun: Abode of Divine Bliss</h2>
            <p class="mb-4">
                ISKCON, the International Society for Krishna Consciousness, has spread its roots globally since 1966. Though late in reaching Dehradun, the establishment of Sri Sri Radha Banke Bihari Temple in 2023 has brought with it a spiritual wave. Through child and youth development programs, food distribution, and spiritual education, this temple aims to awaken the consciousness of society.
            </p>

            <h3 class="mb-3">Spiritual Programs & Services</h3>
            <ul class="mb-4">
                <p><i class="fa fa-check text-primary me-3"></i>Daily <strong>Bhagavad Gita</strong> classes and sessions</p>
                <p><i class="fa fa-check text-primary me-3"></i><strong>Indian Culture and Values for Kids (ICVK)</strong> – Spiritual growth for children</p>
               <p><i class="fa fa-check text-primary me-3"></i><strong>FOLK</strong> – A youth engagement program promoting spiritual practices</p>
               <p><i class="fa fa-check text-primary me-3"></i>Home-invited <strong>Kirtans</strong></p>
               <p><i class="fa fa-check text-primary me-3"></i><strong>Anna Dana</strong> – Free food distribution for the needy</p>
               <p><i class="fa fa-check text-primary me-3"></i><strong>Vedic Wisdom Club</strong> – For philosophical and spiritual discussion</p>
               <p><i class="fa fa-check text-primary me-3"></i><strong>Spiritual pilgrimages</strong> to holy destinations</p>
            </ul>

            <h3 class="mb-3">Temple Architecture & Ambience</h3>
            <p class="mb-4">
                Nestled in the serene Lachhiwala foothills, the temple is built with Vedic architecture. Beautifully carved pillars, sacred sanctums, and the consecrated idols of Sri Sri Radha Banke Bihari offer a tranquil atmosphere perfect for chanting and meditation. The open courtyard and lush surroundings create an ideal environment for spiritual growth.
            </p>

            <h3 class="mb-3">Daily Temple Routine</h3>
            <p class="mb-4">
                The day begins with <strong>Mangala Aarti</strong>, where devotees offer lamps and bhajans. Continuous chanting of the Hare Krishna mantra fills the atmosphere. Visitors can attend <strong>Darshan</strong> throughout the day and join in evening Kirtans. Regular <strong>Bhagavad Gita classes</strong> and home Kirtans are part of the temple's daily schedule.
            </p>

            <h3 class="mb-3">Upcoming Festivals</h3>
            <ul class="mb-4">
                <p><i class="fa fa-check text-primary me-3"></i>Sri Krishna Janmashtami Grand Celebrations</p>
             <p><i class="fa fa-check text-primary me-3"></i>>Radhashtami
               <p><i class="fa fa-check text-primary me-3"></i>Govardhan Puja</p>
               <p><i class="fa fa-check text-primary me-3"></i>Gaur Purnima</p>
               <p><i class="fa fa-check text-primary me-3"></i>Bhajans, Kirtans & Dramatic Plays</p>
               <p><i class="fa fa-check text-primary me-3"></i>Sacred feasts for devotees</p>
               <p><i class="fa fa-check text-primary me-3"></i>Youth engagement activities and spiritual meetups</p>
            </ul>

            <h3 class="mb-3">ISKCON Temples Across India</h3>
            <div class="table-responsive mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>City</th>
                            <th>Temple Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $temples = [
                                ['Mayapur, WB', 'ISKCON Chandrodaya Mandir'],
                                ['Vrindavan, UP', 'ISKCON Krishna Balaram Mandir'],
                                ['Delhi (East of Kailash)', 'ISKCON Sri Sri Radha Parthasarathi Mandir'],
                                ['Bangalore, KA', 'ISKCON Sri Radha Krishna Temple'],
                                ['Mumbai (Juhu), MH', 'ISKCON Sri Sri Radha Rasabihari Temple'],
                                ['Pune, MH', 'ISKCON NVCC (New Vedic Cultural Centre)'],
                                ['Hyderabad, TS', 'ISKCON Sri Sri Radha Madanmohan Mandir'],
                                ['Ahmedabad, GJ', 'ISKCON Sri Sri Radha Govind Dham'],
                                ['Chennai, TN', 'ISKCON Sri Sri Radha Krishna Temple'],
                                ['Noida, UP', 'ISKCON Sri Sri Radha Govind Mandir'],
                                ['Kolkata, WB', 'ISKCON Sri Sri Radha Govindaji Temple'],
                                ['Ujjain, MP', 'ISKCON Sri Sri Radha Madan Mohan Temple'],
                                ['Baroda, GJ', 'ISKCON Radha Shyamsundar Mandir'],
                                ['Dehradun, UK', 'ISKCON Sri Sri Radha Banke Bihari Temple'],
                                ['Bhubaneshwar, OD', 'ISKCON Sri Sri Krishna Balaram Mandir'],
                            ];
                        @endphp
                        @foreach ($temples as $temple)
                            <tr>
                                <td>{{ $temple[0] }}</td>
                                <td>{{ $temple[1] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

          
         <h3 class="mb-3">Frequently Asked Questions</h3>
<div class="faq-section">
    <div class="faq-item">
        <button class="faq-question">What is the language for communication and teaching at Rishikesh Yogkulam?</button>
        <div class="faq-answer">
            <p>People from different countries join our course so English is used as the medium of communication and teaching. We also introduce new Hindi words like Namaste, Dhanyawaad, etc.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Does the course fee include learning materials?</button>
        <div class="faq-answer">
            <p>Yes, all necessary books and course-related materials are included in the course fee. Students will receive the material upon arrival.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">How to reach the school from Delhi Airport?</button>
        <div class="faq-answer">
            <p>You can take a direct taxi, a bus to Rishikesh, or a train to Haridwar. From Haridwar or Dehradun, taxis are easily available to reach the school.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Does the school provide medical assistance?</button>
        <div class="faq-answer">
            <p>Yes, we have on-call doctors and a clinic nearby for emergencies. Basic first-aid support is also available at the campus.</p>
        </div>
    </div>
</div>
            <h3 class="mb-3">Conclusion</h3>
            <p>
                The ISKCON temple in Dehradun is more than just a temple—it's a spiritual hub committed to spreading the message of peace, devotion, and divine service. With daily bhajans, prasadam, and social services, it opens the doors to all who seek connection with Krishna. Visit for spiritual upliftment or explore ways to contribute and become part of this divine movement.
            </p>
        </div>
    </div>
</div>
<style>
    .faq-section {
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Segoe UI', sans-serif;
    margin-bottom:30px;
}

.faq-item {
    border-bottom: 1px solid #f47716;
}

.faq-question {
    width: 100%;
    background: none;
    border: none;
    text-align: left;
    font-size: 1rem;
    font-weight: bold;
    padding: 15px;
    color: black;
    position: relative;
    cursor: pointer;
    transition: background 0.3s ease;
}

.faq-question::after {
    content: '\25BC';
    position: absolute;
    right: 20px;
    transition: transform 0.3s ease;
}

.faq-question.active::after {
    transform: rotate(180deg);
}

.faq-answer {
    display: none;
    padding: 0 15px 15px 15px;
    color: #333;
    
    border-left: 3px solid #ebde5d;
}

.faq-question:hover {
    background-color: #fff2e6;
}
.table-bordered {
    border: 1px solid #ccc;
    border-collapse: collapse;
    width: 100%;
    font-family: 'Segoe UI', sans-serif;
}

.table-bordered thead th {
    background-color: #c20000;
    color: #fff;
    font-weight: bold;
    text-align: center;
    padding: 12px;
    border: 1px solid #fff;
}

.table-bordered tbody td {
    background-color: #fff;
    padding: 10px 12px;
    border: 1px solid #ccc;
    vertical-align: middle;
}

/* Optional: Highlight specific row like Sunday */
.table-bordered tbody tr.highlight td {
    background-color: #f4cccc;
}

    
</style>
<script>
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
            const answer = btn.nextElementSibling;
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
</script>
@endsection
