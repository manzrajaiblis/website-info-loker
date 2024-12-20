@extends('master.layout')

@section('title', 'Contact')

@section('content')
<div class="container-fluid min-vh-100 d-flex flex-column" style="padding-top: 20px;">
    <div class="row flex-grow-1">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-center">Punya pertanyaan atau masukan? Anda dapat menghubungi kami melalui opsi di bawah ini:</p>

            <!-- WhatsApp Button -->
            <div class="text-center mb-4">
                <a href="https://wa.me/6281259476914?text=Hallo, Saya ingin menghubungi!" target="_blank" class="btn btn-success btn-lg">
                    <i class="fab fa-whatsapp"></i> Contact via WhatsApp
                </a>
            </div>

            <!-- Email Button -->
            <div class="text-center">
                <a href="mailto:lukmanardi1221@gmail.com?subject=Inquiry&body=Hello, I would like to get in touch!" target="_blank" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope"></i> Contact via Email
                </a>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

@endsection
