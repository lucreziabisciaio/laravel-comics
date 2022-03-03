<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- title tag -->
    <title>@yield('title')</title>
</head>

<body>
    <header class="bg-light">
        @include('partials.navbar')
    </header>

    <div class="jumbotron"></div>

    <main>
        @yield('infoLinks')
    </main>

    <footer>
        @include('partials.footerMain')
        @include('partials.footerBottom')
    </footer>

</body>

</html>