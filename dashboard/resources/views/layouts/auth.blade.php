<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

</head>
<body>
    <header>
        <!-- Tambahkan navigasi atau elemen header lainnya di sini -->
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Tambahkan footer di sini -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>