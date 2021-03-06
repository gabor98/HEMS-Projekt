<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>HEMS - Kantine</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased flex flex-col min-h-screen">
        {{-- Navigation --}}
        @include('application.navigation')

        {{-- Content --}}
        <main class="mt-4 container mx-auto grow max-w-7xl">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('application.footer')
    
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>