<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/parsley.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/select2.min.css') }}">
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        @stack('script')
        {{-- <script src="{{ asset('js/parsley.min.js') }}"></script> --}}
        {{-- @stack('scripts') --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}
        </div>

    </body>
</html>
