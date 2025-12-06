@extends('main')

@section('title')

Volunteer Registration

@endsection('title')



@section('content')


<div class="container">


    <div class="row">


        <div class="col-md-10 mx-auto my-5 px-md-4 rounded" style="background-color:rgb(64,74,61);color:white">
            <h1 class="fs-3 text-center mt-5 mb-4  " style="color: #1c92dd;">Register to serve with HKM Dehradun</h1>
            <p> As Lord Krishna says in Bhagavad-Gita 18.69, there is no one dearer to Him than one who shares His
                message with others. </p>
            <p>
                HKM Dehradun brings you an opportunity to create educational, informative, engaging, and shareable
                content for social media posts. Become a valuable contributor towards spreading Lord Krishna's message
                by volunteering.</p>

            <p>

                Your efforts will help bring greater awareness and understanding of Krishna consciousness. Not only will
                you enhance your own Krishna consciousness, but you will also have the satisfaction of knowing you are
                making a meaningful impact.
            </p>

            <p class="mb-5">
                Join us today! </p>
        </div>

    </div>

    <div class="row">
        <div class="col-md-8 mx-auto shadow p-3 mb-5 bg-body-tertiary rounded">
            <h2 class="fs-4 text-center my-4">Volunteer Registration </h2>
            <p>Submit your details below...</p>
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>

            @endif

            <form action="{{route('volunteer-registration')}}" method="post">
                @csrf
                <div class="row g-3">


                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" value="{{ old('full_name') }}" class="form-control" id="full_name"
                                placeholder="Subject" name="full_name" required>
                            <label for="full_name">Full Name <span style="color:red">*</span></label>
                        </div>
                        @error('full_name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="{{ old('mobile') }}" type="text" name="mobile" class="form-control"
                                id="mobile" placeholder="Your Name" required>
                            <label for="mobile">Mobile Number<span style="color:red">*</span> </label>
                        </div>
                        @error('mobile')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="{{ old('email') }}" type="email" class="form-control" required name="email"
                                id="email" placeholder="Your Email">
                            <label for="email">Your Email <span style="color:red">*</span></label>
                        </div>
                        @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name="alternate_number" type="text" class="form-control" id="alternate_number"
                                placeholder="Your Name">
                            <label for="alternate_number">Alternate Number</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="{{ old('birth_date') }}" type="date" name="birth_date" class="form-control"
                                id="birth_date" required placeholder="Date of Birth">
                            <label for="birth_date">Date of Birth <span style="color:red">*</span></label>
                        </div>
                        @error('birth_date')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 px-4">
                        <label class="form-label">Gender <span style="color:red">*</span></label>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" value="male" name="gender" id="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>

                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" value="female" name="gender" id="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="other" name="gender" id="other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-floating">
                            <input value="{{ old('city') }}" required name="city" type="text" class="form-control"
                                id="city" placeholder="Subject">
                            <label for="city">City of Residence<span style="color:red">*</span></label>
                        </div>
                        @error('city')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="{{ old('qualification') }}" name="qualification" type="text"
                                class="form-control" id="qualification" placeholder="Your Email">
                            <label for="qualification">Qualification<span style="color:red">*</span></label>
                        </div>
                        @error('qualification')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required name="Occupation" value="{{ old('Occupation') }}" type="text"
                                class="form-control" id="Occupation" placeholder="Your Email">
                            <label for="Occupation">Occupation <span style="color:red">*</span></label>
                        </div>
                        @error('occupation')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input name="skills" type="text" class="form-control" id="skill" placeholder="Subject">
                            <label for="skill">Skills/Talents </label>
                            <small class="px-2">(Ex: Graphic design, Music, Video editing, etc)</small>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="form-floating">
                            <input name="languages" value="{{ old('languages') }}" required type="text"
                                class="form-control" id="subject" placeholder="Subject">
                            <label for="subject">Languages you Know <span style="color:red">*</span></label>
                            <small class="px-2">(Ex: Hindi, English etc. separate each language with comma ,)</small>
                        </div>
                        @error('languages')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror





                    </div>

                    <div class="col-12 px-4 mt-4">
                        <label class="form-label d-block">Type of Volunteering</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="volunteerType" id="remote"
                                value="Remote">
                            <label class="form-check-label" for="remote">Remote</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="volunteerType" id="campus"
                                value="On-campus">
                            <label class="form-check-label" for="campus">On-campus</label>
                        </div>
                    </div>



                    <div class="col-12 mt-4 ">
                        <p>Select the duration of availability for volunteering</p>

                        <select name="volunteer_duration" class="form-select" aria-label="Default select example">

                            <option value="upto 3 months">Upto 3 months</option>
                            <option value="3 months - 6 months">3 months - 6 months</option>
                            <option value="6 months or more">6 months or more</option>
                        </select>

                    </div>


                    <div class="col-12 mt-4 ">
                        <p>Select the number of hours of contribution/week*</p>

                        <select name="contribution_hours" class="form-select" aria-label="Default select example">

                            <option value="3-5 hrs">3-5 hrs</option>
                            <option value="5-8 hrs">5-8 hrs</option>
                            <option value="8-12 hrs">8-12 hrs</option>
                            <option value="More than 15 hrs"> More than 15 hrs</option>
                        </select>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="form-floating">
                            <input name="programs" type="text" class="form-control" id="programs" placeholder="Subject">
                            <label for="programs">HKM Dehradun programs attended </label>
                            <small class="px-2">(Ex: Yoga for Happiness, Krishna Life etc. separate each program with
                                comma ,)</small>
                        </div>





                    </div>

                    <div class="col-12 mt-4 ">
                        <p>How many rounds of Hare Krishna Mahamantra do you chant?</p>

                        <select class="form-select" name="chanting_rounds">

                            <option selected>select your answer</option>
                            <option value="0 rounds">0 rounds</option>
                            <option value="1-4 rounds">1-4 rounds</option>
                            <option value="5-8 rounds">5-8 rounds</option>
                            <option value="9-12 rounds">9-12 rounds</option>
                            <option value="16 rounds">16 rounds</option>
                        </select>

                    </div>


                    <div class="col-12 mt-4">
                        <label for="socialmedia" class="form-label">Link to your portfolio/social media handle</label>

                        <div class="form-floating">
                            <textarea name="socialmedia" class="form-control" placeholder="Leave a message here"
                                id="socialmedia" style="height: 100px"></textarea>
                            <label for="socialmedia">Enter your answer</label>
                        </div>
                        <small class="px-2">Ex: Behance, LinkedIn, Instagram, YouTube, etc.</small>
                    </div>


                    <div class="col-12 mt">
                        <label for="message" class="form-label">Please mention any additional details which may help us
                            find suitable opportunities for you.</label>
                        <div class="form-floating">
                            <textarea name="message" class="form-control" placeholder="Leave a message here"
                                id="message" style="height: 100px"></textarea>
                            <label for="message">Enter your answer</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="donate-btn1" type="submit">Send
                            Message</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>


@endsection