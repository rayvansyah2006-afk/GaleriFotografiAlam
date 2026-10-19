@extends('layout.app')

@section('title', 'Tentang Kami | Reyy Gallery')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<section class="about-hero">
    <div class="container">
        <span class="about-label">MENGENAL REYY GALLERY</span>
        <h1>Tentang Kami</h1>
        <p>
            Mengenal lebih dekat galeri fotografi yang mengabadikan
            keindahan dan cerita di balik alam.
        </p>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-frame">
                    <img
                        src="{{ asset('/images/forest.jpeg') }}"
                        alt="Pemandangan alam di Reyy Gallery"
                        class="about-image"
                    >
                </div>
            </div>

            <div class="col-lg-6">
                <span class="about-label">CERITA KAMI</span>
                <h2>Mengabadikan Alam, Menyampaikan Cerita.</h2>

                <p>
                    Reyy Gallery merupakan galeri fotografi alam yang
                    menampilkan keindahan bumi melalui berbagai bidikan.
                    Mulai dari hijaunya hutan, megahnya pegunungan,
                    hingga pesona pantai yang menenangkan.
                </p>

                <p>
                    Kami percaya bahwa setiap foto memiliki cerita.
                    Melalui galeri ini, pengunjung dapat menikmati
                    keindahan alam sekaligus menumbuhkan apresiasi
                    terhadap lingkungan sekitar.
                </p>

                <a href="/project" class="about-button">
                    Lihat Koleksi Foto <span>&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <div class="text-center mb-5">
            <span class="about-label">NILAI KAMI</span>
            <h2>Lebih dari Sekadar Foto</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="value-card">
                    <span class="value-number">01</span>
                    <h3>Keindahan</h3>
                    <p>
                        Menampilkan pesona alam melalui sudut pandang
                        yang menarik dan bermakna.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="value-card">
                    <span class="value-number">02</span>
                    <h3>Cerita</h3>
                    <p>
                        Menghadirkan kisah dan pengalaman yang tersimpan
                        di balik setiap bidikan.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="value-card">
                    <span class="value-number">03</span>
                    <h3>Apresiasi Alam</h3>
                    <p>
                        Mengajak pengunjung untuk mengenal dan
                        menghargai keindahan lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection