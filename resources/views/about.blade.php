@extends('master.layout')

@section('title')
About
@endsection

@section('content')
<div class="container-fluid about-container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 about-box d-flex align-items-center">
            <!-- Foto di sebelah kiri -->
            <div class="about-image-container">
                <img src="images/profile/pp.jpg" alt="Your Photo" class="about-image">
            </div>
            <!-- Isi About di sebelah kanan -->
            <div class="about-text ms-4">
                <h1 class="about-heading">About me</h1>
                <p class="about-description">
                Selamat datang di website info loker Ponorogo! Saya menghadirkan platform ini untuk membantu masyarakat Ponorogo menemukan informasi lowongan kerja terbaru dengan mudah dan cepat. Tujuan saya adalah menjadi penghubung antara pencari kerja dan perusahaan yang membutuhkan tenaga kerja. Mari bersama membangun masa depan yang lebih baik untuk Ponorogo.
                </p>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<!-- CSS Custom -->
<style>
    .about-container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f8ff;
    }

    .about-box {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
    }

    .about-image-container {
        flex-shrink: 0;
    }

    .about-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .about-text {
        flex: 1;
    }

    .about-heading {
        font-size: 32px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .about-description {
        font-size: 16px;
        line-height: 1.5;
        color: #555;
    }
</style>
@endsection
