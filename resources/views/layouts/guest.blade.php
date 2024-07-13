<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mardira Travel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-end sm:pt-0 bg-cover" style="background-image : url('{{asset('images/login-bg.jpeg')}}')">
            <div class="w-1/2 flex flex-col justify-center px-9 bg-white shadow-md sm:rounded-lg min-h-screen">
                <div class=" flex justify-center">
                    <a href="/" class="w-1/2">
                        <img src="{{asset('images/favicon.png')}}" alt="" class="">
                    </a>
                </div class="">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
