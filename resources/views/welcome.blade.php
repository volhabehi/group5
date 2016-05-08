<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Default title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="/css/style.css"> -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <header>
            <nav>
                Навигация будет тут
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            Это футер
        </footer>
    </body>
</html>
