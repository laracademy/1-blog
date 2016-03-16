<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}">My First Blog</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <!-- left hand -->
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::route('home') }}">Home</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul> <!-- left hand -->
        <!-- right hand -->
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li>
                    <a href="{{ URL::route('administration.blog') }}">Administration</a>
                </li>
                <li>
                    <a href="{{ URL::route('auth.logout') }}">Logout</a>
                </li>
            @else
                <li>
                    <a href="{{ URL::route('auth.login') }}">Login</a>
                </li>
            @endif
        </ul>
        <!-- right hand -->
    </div><!--/.nav-collapse -->
  </div>
</nav>