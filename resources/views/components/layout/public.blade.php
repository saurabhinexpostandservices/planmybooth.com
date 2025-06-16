<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Language" content="en">
        {{-- start dynamic meta data --}}
        <title>{{ $title ?? 'Planmybooth' }}</title>
        <meta name="description" content="{{ $meta_description ?? 'Planmybooth-blog' }}">
        <meta name="author" content="Planmybooth">
        <meta name="robots" content="noindex, nofollow">
        <link rel="canonical" href="{{ request()->url() }}/">
        {{-- facebook tags --}}
        <meta property="og:title" content="{{ $title ?? 'Planmybooth' }}">
        <meta property="og:description" content="{{ $meta_description ?? 'Planmybooth' }}">
        <meta property="og:image" content="{{ $featured_image ?? asset('images/planmybooth-logo.png') }}">
        <meta property="og:url" content="{{ request()->url() }}/">
        {{-- twitter tags --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title ?? 'Planmybooth' }}">
        <meta name="twitter:description" content="{{ $meta_description ?? 'Planmybooth' }}">
        <meta name="twitter:image" content="{{ $featured_image ?? asset('images/planmybooth-logo.png') }}">

        {{-- end dynamic meta data --}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-header />
        <main class="border-2 border-green-500">
            {{ $slot ?? ""}}
        </main>
        <x-footer />
    </body>
</html>
