<div class="header clearfix">
<nav>
  <ul class="nav nav-pills pull-right">
    <li role="presentation" class="active"><a href="/">Home</a></li>
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
      @endif
  </ul>
</nav>
<h3 class="text-muted">{{ $brandName }}</h3>
</div>