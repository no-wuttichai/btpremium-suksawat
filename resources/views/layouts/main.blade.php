<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>@yield('title', 'PGNARNIA.COM')</title>

    @include('partials.meta')
    @include('partials.styles')
    @stack('styles')
</head>
<body style="background: black;">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>