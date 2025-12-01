@extends('main')

@section('title', 'Blogs | HKM Dehradun')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Blogs</h1>

    <!-- Search Bar -->
    <form action="{{ route('blogs.search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search blogs...">
            <button class="btn btn-gradient" type="submit"> Search</button>
        </div>
    </form>

    <!-- Blog Cards -->
    <div class="row gx-4 gy-4">
        @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4 d-flex">
            <div class="card blog-card shadow-sm border-0 flex-fill">
                <img src="{{ asset($blog['image']) }}" class="card-img-top" alt="{{ $blog['title'] }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">{{ $blog['title'] }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($blog['description'], 100) }}</p>
                    <a href="{{ route('blogs.show', $blog['url']) }}" class="btn btn-gradient mt-auto"> Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Custom Styles -->
<style>
    /* Gradient Button */
    .blog-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    /* Scale on hover */
    .blog-card:hover {
        transform: scale(1.03);
        box-shadow: 0 0.8rem 1.5rem rgba(0, 0, 0, 0.15);
    }

    /* Force image size uniformity */
    .blog-card img {
        height: 220px;
        object-fit: cover;
        width: 100%;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    /* Gradient button */
    .btn-gradient {
        background: linear-gradient(45deg, #f3a33aff, #f5f249ff);
        border: none;
        color: #fff;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(45deg, #f8a02eff, #faf73bff);
        transform: scale(1.05);
    }

    /* Fade-in Animation */
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

    /* Delay effect for each card */
    .blog-card:nth-child(1) {
        animation-delay: 0.2s;
    }

    .blog-card:nth-child(2) {
        animation-delay: 0.4s;
    }

    .blog-card:nth-child(3) {
        animation-delay: 0.6s;
    }

    .blog-card:nth-child(4) {
        animation-delay: 0.8s;
    }

    .blog-card:nth-child(5) {
        animation-delay: 1s;
    }
</style>
@endsection