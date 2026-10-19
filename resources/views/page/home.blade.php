@extends('layout.app')

@section('title', 'Home | Reyy Gallery')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<section class="home-hero">
    <div class="container">
        <div class="hero-content">

            <span class="hero-label">
                REYY GALLERY · NATURE PHOTOGRAPHY
            </span>

            <h1>
                Keindahan Alam,<br>
                Dalam Setiap <span>Bidikan.</span>
            </h1>

            <p>
                Menjelajahi keindahan alam melalui lensa fotografi.
                Temukan pesona gunung, hutan, pantai, dan berbagai
                keajaiban alam dalam setiap karya.
            </p>

            <a href="/project" class="hero-button">
                Jelajahi Galeri
                <span>&rarr;</span>
            </a>

        </div>
    </div>
</section>

<section class="home-intro">
    <div class="container">

        <div class="intro-heading">
            <span class="intro-label">TENTANG GALERI</span>

            <h2>
                Setiap Sudut Alam<br>
                Memiliki Ceritanya.
            </h2>
        </div>

        <div class="intro-description">
            <p>
                Reyy Gallery menghadirkan koleksi fotografi alam
                yang mengabadikan keindahan bumi dari berbagai sudut.
                Setiap foto menjadi cara untuk menikmati,
                mengenal, dan menghargai alam lebih dekat.
            </p>
        </div>

    </div>
</section>

@endsection