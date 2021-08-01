<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/logo.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}

        @isset($title)
            - {{ $title }}
        @endisset
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="py-4 sm:shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold no-underline text-header">
                        <img src="/images/logo.png" alt="logo de sweetdanses" height="70" width="70" style="display: inline-block">
                        <span style="display: inline-block">
                            <span class="logo-color-2">Sweet Danses</span>
                        </span>
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline text-header" href="/">Accueil</a>
                    <a class="no-underline hover:underline text-header" href="{{ route('disciplines') }}">Danses</a>
                    <a class="no-underline hover:underline text-header" href="{{ route('planning') }}">Planning</a>
                    <a class="no-underline hover:underline text-header" href="{{ route('prices') }}">Tarifs</a>
                </nav>
            </div>
        </header>

        @yield('content')
    </div>

    <footer>
        <div class="footer-content">
            <div class="container mx-auto flex justify-between items-center footer-contact">
                <span class="no-underline hover:underline text-header"><i class="fas fa-envelope"></i> sweetdanses@gmail.com</span>
                <span class="no-underline hover:underline text-header"><i class="fas fa-phone"></i> +33 6 03 22 84 79</span>
            </div>
            <div class="container mx-auto flex justify-between items-center footer-links">
                <a class="no-underline hover:underline text-header" href="/">Accueil</a>
                <a class="no-underline hover:underline text-header" href="/posts">Actus</a>
                <a class="no-underline hover:underline text-header" href="{{ route('disciplines') }}">Danses</a>
                <a class="no-underline hover:underline text-header" href="{{ route('planning') }}">Planning</a>
                <a class="no-underline hover:underline text-header" href="{{ route('prices') }}">Tarifs</a>
                <a class="no-underline hover:underline text-header" href="{{ route('login') }}">Se connecter</a>
            </div>
            Copyright © 2020 SweetDanses.fr - Tous droits réservés!
        </div>
    </footer>
</body>
</html>
