{{-- Authenticated admin shell with sidebar, topbar, and page content slots. --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin - Bolga Market' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-surface-muted text-text antialiased font-body">
    <div class="flex min-h-screen" x-data="{ mobileSidebarOpen: false }">
        @include('layouts._partials.sidebar')

        <div
            x-show="mobileSidebarOpen"
            x-transition.opacity
            class="fixed inset-0 z-30 bg-text/40 lg:hidden"
            @click="mobileSidebarOpen = false"
            x-cloak
        ></div>

        <div class="flex min-w-0 flex-1 flex-col">
            @include('layouts._partials.topbar')

            <main class="flex-1 px-4 py-6 sm:px-6 lg:px-8">
                @include('layouts._partials.flash')
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
