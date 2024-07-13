<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mardira Travel</title>
        <link
            rel="icon"
            href="{{asset('images/favicon.png')}}"            
            type="image/x-icon"
        />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-cover bg-fixed bg-[url('../assets/images/background.jpg')]" style="background-image : url('{{asset('images/background.jpg')}}')">
            @include('guest.navigation')

                @if (isset($header))
                <header class="bg-transparent">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif
                
                <main>
                    @yield('content')
                </main>
        </div>
    </body>
</html>
