<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MebelAI Indonesia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('Main Logo.png') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex items-center justify-center h-screen" style="background-image: url('{{ asset('guestwallpaper.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            <div class="flex flex-col sm:flex-row justify-center items-center pt-6 sm:pt-0 w-2/3 h-3/5">
                    <div class="sm:w-1/2 h-full w-full bg-black sm:rounded-s-lg">
                        <a href="/" class="flex items-center justify-center h-full">
                            <img src="{{ asset('Main Logo.png')}}" alt="" class="max-w-44 ">
                        </a>
                    </div>
                <div class="sm:w-1/2 w-full bg-white shadow-md h-full sm:rounded-e-lg flex items-center justify-center flex-col">
                    <div class="px-10 w-full">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> --}}