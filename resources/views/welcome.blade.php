<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Default title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="/css/style.css"> -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
        <script src="/js/sweetalert.min.js"></script>
    </head>
    <body>
    @include('partials.flash')
    <div class="container">
      @include('partials.nav', ['brandName' => 'Мой блог'])
      @if(Request::is('/'))
      <div class="jumbotron">
        <h1>@yield('heading', 'Jumbotron heading')</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>
      @endif
      <div class="row marketing">
        @yield('content')
      </div>

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
