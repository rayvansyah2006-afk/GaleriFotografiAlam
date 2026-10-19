@extends('layout.app')

@section('title', 'Profile')

@section('content')

<div class="container py-5">

    <div class="text-center mb-4">
        <h1 class="fw-bold">Profile Pokemon Store</h1>
        <p class="text-muted">
            Mengenal lebih dekat Pokemon Store
        </p>
    </div>

    <div class="card shadow-sm border-0 mx-auto" style="max-width: 900px;">

        <div class="card-body text-center py-5">

            <img src="{{ asset('Foto/Pokemonstore.jpg') }}"
                 alt="Logo Pokémon Store"
                 class="img-fluid mb-4"
                 style="width: 500px; height: 300px; border-radius: 25%; object-fit: cover; display: block; margin: 0 auto;
                 ">

            <h2 class="fw-bold">Pokemon Store</h2>

            <p class="text-muted mt-3">
                Toko dan pusat koleksi kartu Pokemon untuk para kolektor
                dan penggemar Pokémon.
            </p>

        </div>

        <div class="border-top">
            <div class="row g-0">

                <div class="col-md-4 text-center p-4">
                    <h5 class="fw-bold">Tentang Kami</h5>
                    <p class="text-muted mb-0">
                        Menyediakan berbagai koleksi kartu Pokémon
                        dan produk card game pilihan.
                    </p>
                </div>

                <div class="col-md-4 text-center p-4">
                    <h5 class="fw-bold">Produk</h5>
                    <p class="text-muted mb-0">
                        Kartu Pokemon, booster pack, dan berbagai
                        koleksi card game.
                    </p>
                </div>

                <div class="col-md-4 text-center p-4">
                    <h5 class="fw-bold">Komitmen</h5>
                    <p class="text-muted mb-0">
                        Memberikan produk berkualitas bagi kolektor
                        dan penggemar card game.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection