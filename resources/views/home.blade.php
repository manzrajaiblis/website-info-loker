@extends('master.layout')

@section('title')
Home
@endsection

@section('content')
<!-- CSS untuk footer dan pengaturan elemen -->
<style>
    footer {
        position: relative;
        bottom: 0;
        width: 100%;
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        font-size: 0.9rem;
    }

    .welcome-text {
        margin-bottom: 30px;
    }
</style>

<div class="container" style="padding-top: 100px;">
    <!-- Selamat Datang di atas slider -->
    <div class="row welcome-text">
        <div class="col-md-12 text-center">
            <h2>Selamat Datang di halaman Beranda Info Loker Ponorogo</h2>
        </div>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php $isActive = true; @endphp
            @foreach ($posts as $post)
            <div class="carousel-item {{ $isActive ? 'active' : '' }}">
                @if ($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" class="d-block w-100" alt="{{ $post->title }}">
                @else
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Placeholder Image">
                @endif
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $post->title }}</h5>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                </div>
            </div>
            @php $isActive = false; @endphp
            @endforeach
        </div>
    </div>
    <!-- End Carousel -->

    <!-- Konten lainnya -->
    <div class="row mt-4">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @else
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('components.footer')

