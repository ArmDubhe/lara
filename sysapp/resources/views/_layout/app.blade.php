<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <h1>Index</h1>
    <header>
        @include('_layout._partial.menu')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        <small>Company © W3docs. All rights reserved.</small>
    </footer>
</body>
</html>