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

    {{-- fafa-icon cdn-version --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">


    <!-- Google Fonts: Poppins, Lato, Roboto -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Lato:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Include CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    {{-- end dynamic meta data --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<style>
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .,
    . {
        opacity: 0;
    }

    .animate-left {
        animation: slideInLeft 1s ease-out forwards;
    }

    .animate-right {
        animation: slideInRight 1s ease-out forwards;
    }
</style>

@stack('styles')

<body>
    <header id="main-header" class="sticky top-0 z-50">
        <x-header class="sticky top-0 z-50" />
    </header>
    <main>
        {{ $slot ?? '' }}
    </main>
    <footer>
        <x-footer />
    </footer>
    @stack('scripts')


    <script>
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('')) {
                        entry.target.classList.add('animate-left');
                    } else if (entry.target.classList.contains('')) {
                        entry.target.classList.add('animate-right');
                    }
                    obs.unobserve(entry
                        .target); // Remove this line if you want animation on every scroll-in
                }
            });
        }, {
            threshold: 0.2 // Adjust threshold as needed
        });

        document.querySelectorAll('., .').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>
