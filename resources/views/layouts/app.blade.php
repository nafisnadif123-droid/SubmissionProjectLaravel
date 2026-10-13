<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Toko Praktikum')</title>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} Toko Praktikum</footer>

    @stack('scripts')
</body>
</html>