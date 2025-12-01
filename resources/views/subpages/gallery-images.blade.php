@extends('main')

@section('title', 'Image Gallery | HKM Dehradun')

@section('content')
<style>
    .parent {
        column-width: 250px;
        column-gap: 15px;
        padding: 20px;
    }

    .child {
        width: 100%;
        break-inside: avoid;
        margin-bottom: 15px;
        border-radius: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .child:hover {
        transform: scale(1.03);
    }
</style>

<div class="container">
    <h2 class="text-center my-4">Image Gallery</h2>
    <div class="parent" id="gallery"></div>
</div>

<script>
    const images = [
        '/assets/images/AnnadanaGridimages1.jpg',
        '/assets/images/AnnadanaGridimages2.jpg',
        '/assets/images/AnnadanaGridimages3.jpg',
        '/assets/images/AnnadanaGridimages4.jpg',
        '/assets/images/AnnadanaGridimages5.jpg',
        '/assets/images/AnnadanaGridimages6.jpg',
    ];

    const gallery = document.getElementById('gallery');

    images.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        img.classList.add('child');
        img.loading = 'lazy';
        gallery.appendChild(img);
    });
</script>
@endsection