@extends('layout.app')

@section('title', 'Detail Foto | Reyy Gallery')

@section('content')
<link rel="stylesheet" href="{{ asset('css/gallery-detail.css') }}">

<section class="detail-header">
    <div class="container">
       <div class="detail-top">
    <a href="/project" class="detail-back">
        &larr; Kembali ke Galeri
    </a>

    <span class="gallery-label">REYY GALLERY</span>
</div>
        <h1>{{ $project->title }}</h1>
        <p>Setiap foto menyimpan cerita tentang keindahan alam.</p>
    </div>
</section>

<section class="detail-section">
    <div class="container">
        <div class="detail-card">
            <div class="detail-photo">
                <img
                    src="{{ asset('images/' . $project->image) }}"
                    alt="{{ $project->title }}"
                >
            </div>

            <div class="detail-content">
                <span class="detail-category">FOTOGRAFI ALAM</span>

                <h2>{{ $project->title }}</h2>

                <div class="detail-divider"></div>

                <h3>Tentang Foto</h3>
                <p>{{ $project->description }}</p>

                <a href="/project" class="detail-button">
                    Jelajahi Foto Lain
                    <span>&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection