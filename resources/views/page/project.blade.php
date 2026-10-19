@extends('layout.app')

@section('title', 'Galeri Fotografi Alam | Reyy Gallery')

@section('content')

<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

<section class="gallery-header">
    <div class="container">
        <span class="gallery-label">REYY GALLERY</span>

        <h1>Galeri Fotografi Alam</h1>

        <p>
            Menjelajahi keindahan gunung, hutan, pantai,
            dan pesona alam melalui setiap bidikan.
        </p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">

        <div class="gallery-section-heading">
            <div>
                <span class="gallery-label">KOLEKSI KAMI</span>
                <h2>Jelajahi Keindahan Alam</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            @forelse ($projects as $project)
                <div class="col">
                    <article class="gallery-card h-100">

                        <a
                            href="{{ route('project.show', $project->id) }}"
                            class="gallery-image-link"
                        >
                            <img
                                src="{{ asset('images/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                class="gallery-image"
                            >
                        </a>

                        <div class="gallery-card-body">
                            <span class="gallery-category">
                                FOTOGRAFI ALAM
                            </span>

                            <h3>{{ $project->title }}</h3>

                            <p>
                                {{ $project->description }}
                            </p>

                            <a
                                href="{{ route('project.show', $project->id) }}"
                                class="gallery-detail-link"
                            >
                                Lihat Foto
                                <span>&rarr;</span>
                            </a>
                        </div>

                    </article>
                </div>

            @empty
                <div class="col-12">
                    <div class="gallery-empty">
                        <h3>Belum Ada Koleksi Foto</h3>
                        <p>
                            Koleksi fotografi alam akan ditampilkan
                            di halaman ini.
                        </p>
                    </div>
                </div>
            @endforelse
             

        </div>

       @if ($projects->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endif
            
            </div>
        </section>
        
        @endsection