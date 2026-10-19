<nav class="navbar navbar-expand-lg luxury-navbar">
    <div class="container">

        <a class="navbar-brand" href="/">
            <span class="gallery-logo">R</span>
            <span class="gallery-name">REYY GALLERY</span>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarGallery"
            aria-controls="navbarGallery"
            aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarGallery">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}">Home</a>
                    </li>
                    
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('project*') ? 'active' : '' }}"
                        href="{{ route('project.index') }}">Galeri</a>
                    </li>
                    
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}">Kontak</a>
                    </li>
            </ul>
        </div>

    </div>
</nav>