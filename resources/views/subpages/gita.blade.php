@extends('main')



@section('title')

Gita For Youth
@endsection

@section('content')

<div class="container">

    <div class="row">

        <div class="col">

            <h1 class="fs-3 text-center mt-5" style="color: #1c92dd;">Gita For Youth | Biggest International Summit</h1>
        </div>
    </div>


    <div class="row mt-4 ">
        <div class="col-lg-7">
            <div class="mb-5 text-center ">
                <img src="https://hkmdehradun.org/assets/images/gitaforyouth.jpg"
                    class="img-fluid rounded d-block mx-auto shadow" alt="Gita For Youth">
            </div>
        </div>
        <div class="  col-lg-5 mb-5 overflow-auto shadow p-3 mb-5 bg-light rounded">
            <h2 class="fs-4 text-center pt-4 fw-bold">Gita for Youth Registration</h2>
            <p class="mt-3 fw-bold">Eligibility: Only for MEN
                <br>
                Age Group: 18-32 Yrs
            </p>


            <div style="height:380px">
                <form action="{{route('gita-registration-payment')}}" method="post" class=" rounded">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('full_name')}}" name="full_name" type="text" class="form-control"
                                    id="full_name" placeholder="Subject" required>
                                <label for="full_name">Full Name <span style="color:red">*</span></label>
                            </div>
                            @error('full_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('mobile')}}" name="mobile" type="text" class="form-control"
                                    id="mobile" placeholder="Your Name" required>
                                <label for="mobile">Mobile Number <span style="color:red">*</span></label>
                            </div>
                            @error('mobile')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('email')}}" name="email" type="email" class="form-control"
                                    id="email" placeholder="Your Email" required>
                                <label for="email">Your Email <span style="color:red">*</span></label>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('birth_date')}}" name="birth_date" type="date" class="form-control"
                                    id="birth_date" placeholder="Subject" required>
                                <label for="birth_date">Date of Birth <span style="color:red">*</span></label>
                            </div>
                            @error('birth_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('address_line_one')}}" name="address_line_one" type="text"
                                    class="form-control" id="subject" placeholder="Subject" required>
                                <label for="address">Address Line 1 <span style="color:red">*</span></label>
                            </div>
                            @error('address_line_one')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('address_line_two')}}" name="address_line_two" type="text"
                                    class="form-control" id="address_line_two" placeholder="Subject">
                                <label for="address_line_two">Address Line 2</label>
                            </div>

                        </div>


                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('city')}}" name="city" type="text" class="form-control" id="city"
                                    placeholder="Subject">
                                <label for="city">City <span style="color:red">*</span></label>
                            </div>
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('state')}}" name="state" type="text" class="form-control" id="state"
                                    placeholder="Subject">
                                <label for="state">state <span style="color:red">*</span></label>
                            </div>
                            @error('state')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('postal_code')}}" name="postal_code" type="text"
                                    class="form-control" id="postal_code" placeholder="Subject">
                                <label for="postal_code">Area Postal Code <span style="color:red">*</span></label>
                            </div>
                            @error('postal_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <p class="fw-bold my-1">Occupation<span style="color:red"> *</span></p>
                            <div class="form-check">

                                <input class="form-check-input" type="radio" value="student" name="occupation"
                                    id="student" required>
                                <label class="form-check-label" for="student">
                                    Student
                                </label> <br>
                                <input class="form-check-input" type="radio" value="working" name="occupation"
                                    id="working">
                                <label class="form-check-label" for="working">
                                    Working
                                </label><br>
                                <input class="form-check-input" type="radio" name="occupation" id="business"
                                    value="business">
                                <label class="form-check-label" for="business">
                                    Business
                                </label><br>
                                <input class="form-check-input" type="radio" value="teaching faculty" name="occupation"
                                    id="faculty">
                                <label class="form-check-label" for="faculty">
                                    Teaching Faculty
                                </label><br>
                                <input value="job search" class="form-check-input" type="radio" name="occupation"
                                    id="jobsearch">
                                <label class="form-check-label" for="jobsearch">
                                    Job Search
                                </label>
                            </div>
                            @error('occupation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input value="{{old('company')}}" name="company" type="text" class="form-control"
                                    id="company" placeholder="Subject">
                                <label for="company">College / Company Name<span style="color:red"> *</span></label>
                            </div>
                            @error('company')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <p class="fw-bold my-1">How did you come to know about "Gita for Youth" Course? <span
                                    style="color:red"> *</span></p>
                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="known" value="FOLK Help Desk"
                                    required id="helpdesk">
                                <label class="form-check-label" for="helpdesk">
                                    FOLK Help Desk
                                </label> <br>
                                <input class="form-check-input" type="radio" name="known"
                                    value="Book Distribution Stall" id="book_stall">
                                <label class="form-check-label" for="book_stall">
                                    Book Distribution Stall
                                </label><br>
                                <input value="Nagar Sankirtan" class="form-check-input" type="radio" name="known"
                                    id="nagar_sankirtan">
                                <label class="form-check-label" for="nagar_sankirtan">
                                    Nagar Sankirtan
                                </label><br>
                                <input value="PG Preaching" class="form-check-input" type="radio" name="known"
                                    id="pg_preaching">
                                <label class="form-check-label" for="pg_preaching">
                                    PG Preaching
                                </label><br>
                                <input value="Sunday Folk Class" class="form-check-input" type="radio" name="known"
                                    id="sunday_folk_class">
                                <label class="form-check-label" for="sunday_folk_class">
                                    Sunday FOLK Class
                                </label> <br>

                                <input value="Phone call" class="form-check-input" type="radio" name="known"
                                    id="phone_call">
                                <label class="form-check-label" for="phone_call">
                                    Phone Call
                                </label> <br>
                                <input value="SMS" class="form-check-input" type="radio" name="known" id="sms">
                                <label class="form-check-label" for="sms">
                                    SMS
                                </label> <br>
                                <input value="Whatsapp" class="form-check-input" type="radio" name="known"
                                    id="whatsapp">
                                <label class="form-check-label" for="whatsapp">
                                    Whatsapp
                                </label><br>
                                <input value="Friends / Collegues" class="form-check-input" type="radio" name="known"
                                    id="Friends_Collegues">
                                <label class="form-check-label" for="Friends_Collegues">
                                    Friends / Collegues
                                </label><br>
                                <input value="reference" class="form-check-input" type="radio" name="known"
                                    id="reference">
                                <label class="form-check-label" for="reference">
                                    Reference
                                </label><br>
                                <input value="Temple Website" class="form-check-input" type="radio" name="known"
                                    id="website">
                                <label class="form-check-label" for="website">
                                    Temple Website
                                </label><br>
                                <input value="Social Media" class="form-check-input" type="radio" name="known"
                                    id="social_media">
                                <label class="form-check-label" for="social_media">
                                    Social Media
                                </label><br>
                                <input value="others" class="form-check-input" type="radio" name="known" id="others">
                                <label class="form-check-label" for="others">
                                    Others
                                </label>


                            </div>
                            @error('known')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-12 my-3">

                            <div class="form-check d-none">
                                <input value="50" class="form-check-input" type="radio" name="amount" id="amount"
                                    checked>
                                <label class="form-check-label" for="amount">
                                    Registration Amount Rs. 50/-
                                </label>
                            </div>

                        </div>
                    </div>



                    <div class="col-12 pb-5">
                        <button class="donate-btn1" type="submit">Register Now
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>






<div class="container my-5">
    <div class="row g-4">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://hkmhyderabad.org/assets/website/images/activities/mantram.jpg"
                    class="card-img-top rounded-top" alt="Mantra Meditation">
                <div class="card-footer text-center bg-white">
                    <h5 class="mb-0" style="color: #1c92dd;">Mantra Meditation</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://hkmhyderabad.org/assets/website/images/activities/course.jpg"
                    class="card-img-top rounded-top" alt="Course Certification">
                <div class="card-footer text-center bg-white">
                    <h5 class="mb-0 " style="color: #1c92dd;">Course Certification</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://hkmhyderabad.org/assets/website/images/activities/life-coach.jpg"
                    class="card-img-top rounded-top" alt="Life Coach">
                <div class="card-footer text-center bg-white">
                    <h5 class="mb-0 " style="color: #1c92dd;">Life Coach</h5>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <hr class="my-5">

    <div class="text-center mb-4">
        <h3 class=" fw-bold d-inline-block mb-1" style="color: #1c92dd;">About The Course</h3>
        <p class="mb-0">From the battlefield of Kurukshetra</p>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="text-justify">
                <p>
                    One of the quintessential contributions of India to the world is the Shrimad Bhagavad Gita. It is
                    the voice of the Lord Sri Krishna and the first-ever most powerful leadership workshop that took
                    place in the battlefield of Kurukshetra when Pandavas were going through a deep crisis.
                </p>
                <p>
                    Over 5,000 years ago, just before the great war was about to begin, Arjuna went into a deep
                    depression,
                    foreseeing the horrible events to come. His skin burned, limbs quivered, his mouth dried up and he
                    sat
                    down on his chariot, leaving his bows and arrows aside.
                </p>
                <p>
                    However, this situation led Arjuna to ask some of the most profound questions that humanity has ever
                    pondered upon. And thus emanated nectar called The Bhagavad Gita from the lotus mouth of Lord
                    Krishna,
                    the Supreme Personality of Godhead. Simply by hearing this knowledge, Arjuna became ecstatic and got
                    such empowerment that not only he regained his composure but led his side to a glorious victory.
                </p>
                <p>
                    Shrimad Bhagavad Gita was preached by Lord Krishna not only to motivate Arjuna to know the real
                    purpose
                    of human life but also how to perform one's duties sincerely, dedicatedly and without deviation.
                </p>
                <p>
                    Thus in order to be happy in life, one neither needs to change his duty, occupation, place or people
                    around him, nor is there any need to perform any mental or physical gymnastics. Following the
                    footsteps
                    of Arjuna, one should simply try to hear this wonderful scientific knowledge revealed by Lord
                    Krishna,
                    with great attention and humility.
                </p>
                <p>
                    Although human society has made rapid progress in the field of education, material comforts and
                    economic
                    development, due to lack of principles of proper human life there is a pin-prick somewhere in the
                    social
                    body at large, which is the cause of general decline in the moral character and ethical values.
                </p>
                <p>
                    Whether you are a student or a professional, a business man or an entrepreneur applying the
                    principles of
                    Shrimad Bhagavad Gita will help you overcome challenges and become successful in life.
                </p>
                <p>
                    As a service to humanity we offer a very scientific presentation of the essence of the Timeless
                    Vedic
                    Philosophy, a 6-session foundation course on Bhagavad-Gita, in order to restore peace, friendship,
                    and
                    prosperity in the human society.
                </p>

                <div class="p-4 bg-warning-subtle rounded">
                    <p class="fw-semibold">
                        "We are trying to give human society the opportunity for a life of Happiness, Good Health, Peace
                        of Mind and all Good Qualities through God Consciousness."
                    </p>
                    <div class="text-end">
                        <p class="mb-1 fst-italic">- Srila Prabhupada</p>
                        <p class="mb-0 small text-muted">(Founder Acharya of the World-wide Hare Krishna Movement)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">

    <hr class="my-5">

    <!-- Course Modules Heading -->
    <div class="text-center mb-4">
        <h3 class="fw-bold d-inline-block mb-1" style="color: #1c92dd;">Course Modules</h3>
    </div>

    <!-- Image Grid -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-1.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-2.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-3.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-4.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-5.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <img src="https://hkmhyderabad.org/assets/website/images/activities/g4y-gallery-6.jpg"
                class="w-100 rounded-3 border" alt="HKM Hyderabad">
        </div>
    </div>

</div>

@endsection