@extends('master.layout')

@section('title')
Profile
@endsection

@section('content')
<div class="container-fluid profile-container">
    <!-- Kotak Profil -->
    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-md-8 profile-box">
            <h1 class="profile-heading">Profile Page</h1>
            <div class="row">
                <!-- Informasi Profil -->
                <div class="col-md-4 text-center">
                    <!-- Foto Profil di Kiri -->
                    <div class="profile-image-container">
                        <img src="images/profile/pp.jpg" alt="Your Photo" class="profile-image">
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="profile-name">Lukman Ardi Prasetiyo</h3>
                    <p><strong>Email:</strong> lukmanardi1221@gmail.com</p>
                    <p><strong>Phone:</strong> +62 812 5947 6914</p>
                    <p><strong>Address:</strong> Grogol, Sawoo, Ponorogo</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Kotak Kerja Sama dengan PT -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 profile-box">
            <h2 class="profile-heading text-center">Kerja Sama</h2> <!-- Menambahkan text-center di sini -->
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="card text-center">
                        <img src="images/kerja-sama/agit.jpg" alt="PT A" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">PT AGIT</h5>
                        </div>
                    </div>
                </div>
                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="card text-center">
                        <img src="images/kerja-sama/smkpgri2.jpg" alt="PT B" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">SMK PGRI 2 PONOROGO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

<!-- CSS Custom -->
<style>
    /* Container utama untuk profil */
    .profile-container {
        background-color: #f4f7fa;
        padding: 30px 0; /* Padding vertikal */
        margin-top: 80px; /* Tambahkan jarak dari navbar */
    }

    /* Box utama profil */
    .profile-box {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 900px;
        margin-bottom: 30px; /* Jarak antar kotak */
    }

    .profile-heading {
        font-size: 32px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center; /* Menjaga judul tetap di tengah */
    }

    /* Informasi Profil */
    .profile-name {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .profile-info {
        flex: 1;
    }

    /* Foto Profil */
    .profile-image-container {
        flex-shrink: 0; /* Agar foto tetap ukuran tetap */
        text-align: center; /* Mengatur foto agar tetap di tengah dalam kolom */
    }

    .profile-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Card pada bagian kerja sama */
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    /* Membuat gambar menjadi lingkaran sempurna */
    .card-img-top {
        width: 150px; /* Lebar gambar menjadi persegi */
        height: 150px; /* Tinggi gambar */
        border-radius: 50%; /* Membentuk gambar menjadi lingkaran */
        object-fit: cover; /* Gambar tetap proporsional tanpa terpotong */
        border: 3px solid #ddd; /* Garis tepi abu-abu */
        margin: 10px auto; /* Tengah secara horizontal */
        display: block; /* Tengah dengan margin */
        background-color: #fff; /* Latar belakang putih untuk transparansi */
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 767px) {
        .profile-heading {
            font-size: 24px;
        }

        .profile-name {
            font-size: 20px;
        }

        .card-title {
            font-size: 16px;
        }
    }
</style>
@endsection
