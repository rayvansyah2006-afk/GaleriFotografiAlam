@extends('layout.app')

@section('title', 'Kontak | Reyy Gallery')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">

<section class="contact-hero">
    <div class="container">
        <span class="contact-label">REYY GALLERY</span>
        <h1>Hubungi Kami</h1>
        <p>
            Punya pertanyaan atau ingin mengetahui lebih lanjut
            tentang koleksi fotografi kami? Kami siap membantu.
        </p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-card">
            <div class="contact-heading">
                <span class="contact-label">INFORMASI KONTAK</span>
                <h2>Mari Terhubung</h2>
                <p>
                    Untuk pertanyaan, informasi koleksi, atau keperluan
                    lainnya, silakan hubungi kami melalui informasi
                    kontak yang tersedia.
                </p>
            </div>

            <div class="contact-divider"></div>

            <div class="contact-item">
                <div class="contact-icon">01</div>
                <div>
                    <h3>Nama Galeri</h3>
                    <p>Reyy Gallery</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">02</div>
                <div>
                    <h3>Bidang</h3>
                    <p>Galeri Fotografi Alam</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">03</div>
                <div>
                    <h3>Informasi dan Pertanyaan</h3>
                    <p>
                        Untuk informasi lebih lanjut mengenai koleksi fotografi, layanan, 
                        atau pertanyaan lainnya, silakan hubungi kami melalui kontak berikut
                    </p>
                  <p class="contact-text">
                    <strong>Hubungi Kami:</strong> 0838-3155-6454
                </p>
                </div>
            </div>

            <div class="contact-note">
                Kami menghargai setiap pertanyaan, saran, dan apresiasi
                terhadap karya fotografi alam.
            </div>
        </div>
    </div>
</section>
@endsection