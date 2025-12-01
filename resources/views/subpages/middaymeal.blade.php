{{-- resources/views/middaymeal.blade.php --}}
@extends('main')

@section('title', 'Mid-Day Meal | PM-POSHAN Initiative')

@section('content')
<div class="container my-5">

    <!-- Hero Section -->
    <div class="text-center bg-light p-5 rounded shadow-sm">
        <img src="{{ asset('assets/10/HKM-Dehradun-Logo-1024x617.jpg') }}" alt="Site Logo" class="mb-3"
            style="height: 80px;">
        <h1 class="fw-bold text-primary">What is a Mid-Day Meal?</h1>
        <p class="lead mt-3">
            A mid-day meal is a school lunch provided to children in government and government-aided schools in India as
            a part of the PM-POSHAN (POshan SHAkti Nirman) initiative (formerly the Mid-Day Meal Scheme) to improve
            their nutritional levels and support their education.
        </p>
    </div>

    <!-- Supreme Court Mandate -->
    <div class="my-4 p-4 bg-white rounded shadow-sm">
        <h3 class="text-primary">Supreme Court Mandate (2001)</h3>
        <p>
            In November 2001, the Supreme Court of India passed a mandate stating:
            <em>“We direct the state governments/union territories to implement the Mid-Day Meal Scheme by providing
                every child in every government and government-assisted primary school with a prepared midday
                meal.”</em>
        </p>
    </div>

    <!-- Benefits Section -->
    <div class="row my-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <div id="childrenMealCarousel" class="carousel slide overflow-hidden" data-bs-ride="carousel"
                data-bs-interval="3000">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#childrenMealCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#childrenMealCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#childrenMealCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Carousel Images -->
                <div class="carousel-inner rounded shadow" style="max-height: 550px; overflow: hidden;">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/12/children-meal1.jpg') }}"
                            class="d-block w-100 h-100 object-fit-cover" style="object-position: bottom;"
                            alt="Mid-Day Meal 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/12/children-meal2.jpg') }}"
                            class="d-block w-100 h-100 object-fit-cover" style="object-position: bottom;"
                            alt="Mid-Day Meal 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/12/children-meal3.jpg') }}"
                            class="d-block w-100 h-100 object-fit-cover" style="object-position: bottom;"
                            alt="Mid-Day Meal 3">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3 class="text-primary mb-3">Benefits of Mid-Day Meals</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Increasing
                        enrolment in schools</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Increasing
                        attendance</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Mitigating
                        classroom hunger</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Helping students
                        concentrate in the classroom</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Reducing the
                        drop-out rate among students</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Addressing the
                        issue of malnutrition among children</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Empowering women
                        through employment</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> Improving
                        socialisation among children</li>
                </ul>
                <div class="text-center mt-4">
                    <a href="/checkout/20"
                        class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn rounded-pill shadow-sm"
                        style="color: #000; font-weight: bold; font-size:clamp(1rem, 3vw, 1.25rem);" target="_blank">
                        Donate Now to Feed a Child
                        <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                transform: translateX(-100%);
                animation: shine 2s infinite;">
                        </span>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- Implementation Section -->
    <div class="my-5 p-4 bg-white rounded shadow-sm">
        <h3 class="text-primary">Implementation of PM-POSHAN / Mid-Day Meal Scheme</h3>
        <p>
            Hunger should never impede education. Children should not have to choose between food and education; they
            should have access to both. Driven by this belief, The Akshaya Patra Foundation implements the PM-POSHAN
            initiative to support children’s nutrition and education.
        </p>
        <p>
            The objective of the Mid-Day Meal Scheme (now PM-POSHAN) was to provide nutritious mid-day meals to
            school-going children. One of the biggest challenges in the initial stages was implementing the programme at
            such a vast scale.
        </p>
        <p>
            The National Programme of Nutritional Support to Primary Education (NP-NSPE) 2006 Guidelines offered an
            action plan, stating that the Government could mobilise community support and promote public-private
            partnerships for executing the initiative.
        </p>
        <p>
            As per these guidelines, the Government of India started partnering with not-for-profit organisations, such
            as Akshaya Patra, to implement the programme and provide mid-day meals to children in schools.
        </p>

        <!-- Donation Button -->
        <div class="text-center mt-4">
            <a href="/checkout/20"
                class="btn btn-warning btn-lg px-4 py-2 position-relative overflow-hidden donate-btn rounded-pill shadow-sm"
                style="color: #000; font-weight: bold; font-size:clamp(1rem, 3vw, 1.25rem);" target="_blank">
                Donate Now to Feed a Child
                <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
                transform: translateX(-100%);
                animation: shine 2s infinite;">
                </span>
            </a>
        </div>
    </div>

    <!-- Uttarakhand Expansion Section -->
    <div class="my-5 p-4 bg-light rounded shadow-sm">
        <h3 class="text-primary">Feeding the Future of Uttarakhand</h3>
        <p>
            Every single day, The Akshaya Patra Foundation is reaching:<br>
            📍 <strong>25,000 children</strong> across <strong>333 schools</strong> in Dehradun<br>
            📍 <strong>15,000 children</strong> across <strong>250 schools</strong> in Gadarpur
        </p>
        <p>
            Through our freshly cooked, nutritious mid-day meals, we're not just filling stomachs — we’re fueling
            learning, growth, and hope. 🍽️📚
        </p>
        <p>
            The feedback from teachers and students has been heartwarming — they love the taste, hygiene, and consistent
            temperature of the food when it reaches them. Their smiles are our greatest reward. 😊💛
        </p>
        <p>
            As part of our vision to eliminate classroom hunger, we're now planning to expand our footprint in
            Uttarakhand with new kitchens — reaching more remote schools, more children, and more futures waiting to be
            nourished.
        </p>
        <p class="fw-bold">
            🙏 We are seeking support and open to conversations with individuals, institutions, and authorities who want
            to partner in this mission.
        </p>
        <p>
            Let’s come together to ensure no child is deprived of education due to hunger.
        </p>
    </div>


    <!-- Mid-Day Meal Menu Section -->
    <div class="my-5 p-4 bg-white rounded shadow-sm">
        <h3 class="text-primary">Mid-Day Meal Menu</h3>
        <p>
            The Mid-Day Meal Rules, 2015 state that “Every child within the age group of six to fourteen years studying
            in classes I to VIII who enrol and attend the school, shall be provided a meal having nutritional standards
            as specified in Schedule II of the Act, free of charge every day except on school holidays.”
        </p>
        <p>
            Meals should provide 450 calories and 12 grams of protein for classes I–V, and 700 calories and 20 grams of
            protein for classes VI–VIII. At Akshaya Patra, the menu considers MDM guidelines, regional palate, taste,
            flavour, and nutritional value.
        </p>

        <p>
            The menu for Bengaluru, Karnataka, uses seasonal vegetables, locally available ingredients, and spices to
            ensure nutrition, taste, and adherence to local palate.
        </p>
    </div>

</div>
@endsection