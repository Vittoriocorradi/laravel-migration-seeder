<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    {{-- Importazione JS --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- /Header --}}

    {{-- Main --}}
    <main>
        @yield('page-main')
    </main>
    {{-- /Main --}}

    {{-- Footer --}}
    @include('partials.footer')
    {{-- /Footer --}}
</body>
</html>