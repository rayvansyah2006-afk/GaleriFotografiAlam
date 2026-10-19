<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Reyy Gallery')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <style>
    body {
    font-family: 'DM Sans', sans-serif;
    background: #f7f5ef;
    color: #263e30;
}

.luxury-navbar {
    background: #263e30;
    border-bottom: 2px solid #bdc5a4;
    padding: 16px 0;
}

.luxury-navbar .navbar-brand,
.luxury-navbar .nav-link {
    color: #f5f0df;
}

.luxury-navbar .navbar-brand {
    display: flex;
    align-items: center;
    gap: 11px;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    letter-spacing: 1px;
    text-decoration: none;
}

.gallery-logo {
    width: 38px;
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #d7c59a;
    border-radius: 50%;
    color: #f5f0df;
    font-size: 22px;
}

.gallery-name {
    font-size: 19px;
}

.luxury-navbar .nav-link {
    margin-left: 12px;
    padding: 10px 8px;
    transition: color 0.25s ease;
}

.luxury-navbar .nav-link:hover,
.luxury-navbar .nav-link:focus,
.luxury-navbar .nav-link.active {
    color: #d7c59a;
}

.luxury-navbar .navbar-toggler {
    border-color: #d7c59a;
}

.luxury-navbar .navbar-toggler-icon {
    filter: brightness(0) invert(1);
}

main {
    flex: 1;
}

footer {
    background: #263e30;
    color: #f5f0df;
    border-top: 2px solid #bdc5a4;
}

@media (max-width: 991px) {
    .luxury-navbar .nav-link {
        margin-left: 0;
        padding: 12px 0;
    }

    .gallery-name {
        font-size: 17px;
    }
}
/* Footer Reyy Gallery */
.gallery-footer {
    background: #263e30;
    color: #f5f0df;
    padding: 35px 0 20px;
    border-top: 2px solid #bdc5a4;
}

.footer-brand {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.footer-description {
    color: #d6ddcf;
    font-size: 14px;
    margin-bottom: 22px;
}

.footer-divider {
    width: 60px;
    height: 1px;
    background: #bdc5a4;
    margin: 0 auto 18px;
}

.footer-copyright {
    color: #d6ddcf;
    font-size: 12px;
}
    </style>

</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>