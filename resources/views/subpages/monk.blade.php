@extends('main')




@section('title')
HKM Dehradun - Monk Registration
@endsection

@section('content')
<div class="container-fluid px-0 mx-0">
    <div class="row gx-0 mx-0">
        <div class="col-12">
            <img src="https://hkmdehradun.org/assets/images/monk.jpg" alt="Monk Photo" class="img-fluid w-100"
                style="height: 400px; object-fit: cover;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center fs-3 my-5">How to become a Full-time Monk (Brahmachari) ?</h1>
        </div>
    </div>

    <div class="row my-4">
        <div class="col text-center">
            <p>“You must be crazy”, yelled the manager on hearing that we practise celibacy (Brahmacarya) and live in a
                monastery (Ashram). I was presenting spiritual literature in the streets of Hyderabad to a group of
                software professionals and their leader asked me about my life. I told him we get up early in the
                morning around 3.30 to 4.00 am and our day is packed with various services. He interrupted me and
                expressed shock at our schedules. I reasoned that we are happier now with this lifestyle than we were
                earlier. He wondered how someone could be happy getting up so early in the morning when that's the time
                he and his colleagues go to bed on weekends after wild partying. He was also appalled that we abstain
                from sex. My gentle reasoning was ineffective; he and his colleagues looked upon me incredulously and
                dismissed me abruptly. Then they hurriedly left for their office, leaving me alone on the pavement,
                wondering if I am indeed a member of an abnormal species.</p>

        </div>
    </div>
    <!-- Left-Right Images -->
    <div class="container my-5">
        <div class="row ">
            <div class="col-md-6">
                <img src="{{ url('/assets/images/monk2.jpg') }}" class="img-fluid rounded w-100" alt="Monk photo 2">
            </div>
            <div class="col-md-6">
                <img src="{{ url('/assets/images/monk3.jpg') }}" class="img-fluid rounded w-100" alt="Monk photo 3">
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col text-center">
            <p>Celibate (Brahmacari) monks are indeed a rare and endangered species, but certainly not abnormal. For
                thousands of years many seekers of God have practised celibacy and led a contended life. In our own
                tradition of the Vaishnava branch of Hindu customs, there are a large number of celibate monks like
                Haridas Thakur and Bhakti Siddhanta Saraswati who led a life of strong character and purpose. Even in
                our own little monastery there are over fifty monks and at least twenty of them have been around for
                over two decades. And they all are happy practising spiritual principles in the renounced order as
                celibates.</p>
            <p>The reason for happiness is not in practising Celibacy (Brahmacarya), it's due to a strong and meaningful
                connection to God. The early morning collective prayer sessions give strong impetus to connect to God.
                Spiritual practitioners who attend the daily prayer sessions feel tangible connection to God; the drive
                for sex and other carnal pleasures then seem insignificant. For a sincere spiritual practitioner, the
                benefits of spiritual practises are rich, and while the itch of sex desire remains in the heart for many
                years, it doesn't distract one from his spiritual pursuits. Moreover, sex isn't a sought-after pursuit
                anymore. It's rather seen as an irritable impediment on the spiritual path; it occasionally raises its
                ugly head and then quietens down in the face of strong spiritual practises.</p>

        </div>
    </div>
    <div class="row gap-md-0  ">
        <div class="col-md-6">
            <img src="{{url('/assets/images/monk4.jpg')}}" class="img-fluid rounded" alt="monk  photo" />

        </div>
        <div class="col-md-6">
            <img src="{{url('/assets/images/monk5.jpg')}}" class="img-fluid rounded" alt="monk  photo" />
        </div>
    </div>
    <div class="row my-4">
        <div class="col text-center">
            <p>
                To the extent a Celibate (Brahmacari) spiritual practitioner is absorbed in his devotional principles,
                lust is not a serious worry; whenever Cupid attacks, the itch is tolerable. However, when the spiritual
                practises are a distracted performance, one finds material life including sex, more attractive.</p>
            <p>

                “What is night for all beings is the time of awakening for the self-controlled and the time of awakening
                for all beings is night for the introspective sage” (Bhagavad Gita 2.69). This implies what most of the
                world sees as normal is known to be abnormal for a spiritualist and what the sincere seekers see as
                normal is perceived as bizarre by those obsessed with material pursuits.</p>
            <p>
                If you are humble, sincere, enthusiastic and energetic please come join Hare Krishna Golden Temple and
                serve Sri Krishna, the Supreme Personality of Godhead.</p>
            <p>

                There is no minimum education qualification necessary. Ability to read and write is enough. Ability to
                follow instructions to the hilt is an absolute must.</p>
            <p>

                Hare Krishna Golden Temple does not have any annual or monthly appraisals, neither target or deadlines.
                No threat of getting fired. No need to work hard. </p>

            <p>

                For life time Hare Krishna Golden Temple will provide you food, accommodation, clothes, medical care,
                travel, etc., all free. Additionally, you get a congenial work culture.
            </p>
        </div>
    </div>
    <div class="container my-5">
        <div class="row align-items-start gx-4 gy-4">

            <!-- LEFT: FAQ -->
            <div class="col-md-7 order-md-1 order-2">
                <h2 class="fs-4 text-left my-4">What are the Daily Activities of a Monk?</h2>
                <div class="faq-section">

                    <div class="faq-item">
                        <button class="faq-question">1. Promote Krishna Consciousness</button>
                        <div class="faq-answer">
                            <p>You have to participate in distribution of books like Bhagavad Gita As It Is, Ramayana,
                                Srimad Bhagavatam, Isopanishad, Caitanya Charitaamrita, Updeshamrita, Science of Self
                                Realisation, Mahabharat, Krishna, etc.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">2. Study the holy scriptures and inculcate the teachings therein in
                            your life.</button>
                        <div class="faq-answer">
                            <p>You have to study in depth all the above mentioned books and over a period of time
                                achieve mastery.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">3. Sleep early at 8.30 pm and rise early at 3.45 am</button>
                        <div class="faq-answer">
                            <p></p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">4. Penchant for cleanliness</button>
                        <div class="faq-answer">
                            <p>You need to wash your clothes, utensils, sweep room, bathroom, etc,.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">5. Eat only Krishna Prasadam</button>
                        <div class="faq-answer">
                            <p>No hotel, restaurant and street food allowed. No tea, coffee, liquor or smoke.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">6. Maintain and possess a sense of responsibility</button>
                        <div class="faq-answer">
                            <p>You have to ascertain your duties and be responsible for the results obtained by you.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">7. Utilize time judicially</button>
                        <div class="faq-answer">
                            <p>Always you need to be chanting the Hare Krishna Maha Mantra and reading books mentioned
                                above.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">8. Learn new arts</button>
                        <div class="faq-answer">
                            <p>Learn playing of Mrindanga, Kartaal and Harmonium. Culinary arts, singing, vehicle
                                driving and caring of cows.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">9. Strictly follow a predetermined daily schedule.</button>
                        <div class="faq-answer">
                            <p></p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">10. Listen, understand and execute all instructions.</button>
                        <div class="faq-answer">
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT: FORM -->
            <div class="col-md-5 order-md-2 order-1 shadow p-3 mb-5 bg-body-tertiary rounded">
                <h2 class="fs-5 text-left mt-4">Are you looking to become a Monk?</h2>
                <p>Submit your details below...</p>

                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif

                <form action="{{route('monk-registration')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 mt-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fullname" name="full_name"
                                    placeholder="Subject" value="{{ old('full_name') }}" required>
                                <label for="fullname">Full Name <span style="color:red">*</span></label>
                            </div>
                            @error('full_name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    placeholder="Your Name" value="{{ old('mobile') }}" required>
                                <label for="mobile">Mobile Number <span style="color:red">*</span></label>
                            </div>
                            @error('mobile')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email" value="{{ old('email') }}" required>
                                <label for="email">Your Email <span style="color:red">*</span></label>
                            </div>
                            @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="dob" name="birth_date" placeholder="Subject"
                                    required value="{{ old('birth_date') }}">
                                <label for="dob">Date of Birth <span style="color:red">*</span></label>
                            </div>
                            @error('birth_date')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="qualification" required name="qualification"
                                    placeholder="Subject" value="{{ old('qualification') }}">
                                <label for="qualification">Educational Qualification <span
                                        style="color:red">*</span></label>
                            </div>
                            @error('qualification')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" value="{{ old('occupation') }}" name="occupation"
                                    class="form-control" id="occupation" required placeholder="Subject">
                                <label for="occupation">Current Occupation <span style="color:red">*</span></label>
                            </div>
                            @error('occupation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <div class="input-group mb-3">
                                <input type="file" name="photo" class="form-control" id="inputGroupFile03"
                                    placeholder="upload your photo" aria-describedby="inputGroupFileAddon03"
                                    aria-label="Upload" accept="image/*" required>
                            </div>
                            <div id="passwordHelpBlock" class="form-text">
                                Upload your photo in jpg, png, jpeg only
                            </div>
                            @error('photo')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5 button"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
</div>
</div>


@push('styles')
<style>
.faq-section {
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Segoe UI', sans-serif;
    margin-bottom: 30px;
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
</style>
@endpush
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
            const answer = btn.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });
});
</script>
@endpush
@endsection