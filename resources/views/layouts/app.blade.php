<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="py-6 sm:shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold no-underline text-header">
                        <img src="/images/logo.png" alt="logo de sweetdanses" height="50" width="50" style="display: inline-block">
                        <span style="display: inline-block">
                            <span class="logo-color-2">Sweet Danses</span>
                        </span>
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
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
            Copyright © 2020 SweetDanses.fr - Tous droits réservés!
        </div>
    </footer>
</body>
</html>
