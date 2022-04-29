<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Style Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset('img/clothes-shop.png') }}" type="image/x-icon">


    </head>
    <body >
    <main class="main">
        <x-header></x-header>
        <section class="shop-content">
            @yield('content')
        </section>
        <x-footer></x-footer>
    </main>
    </body>
</html>
