<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Yomogi:wght@400&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />

        <!-- Scripts -->
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

        @stack('styles')

    </head>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="header" id="header">
                    <a>和歌山うちわ飯</a>
                </header>
            @endif

            @include('layouts.navigation')

            @if (session('success'))
            <div class="bg-green-300 border p-4 font-semibold text-center">
                {{ session('success') }}
            </div>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <!-- Stack for scripts -->
        @stack('scripts')

        <script>
            var header = document.getElementById("header");
            if (header) {
            header.addEventListener("click", function(e) {
                window.location.href = '{{ route("top") }}';
            });
            }
        </script>
    </body>
</html>
