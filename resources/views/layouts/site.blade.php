<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Adapti teste') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ public_path('assets/css/site.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/site.css'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 box-border">

        <!-- Page Heading -->
        <x-site.header />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Page Footer -->
        <x-site.footer />
    </div>
</body>
</html>
