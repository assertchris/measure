<nav>
    <a href="{{ route('show-home') }}">home</a>
    @unless($isLoggedIn)
        <a href="{{ route('auth-login-with-google') }}">login</a>
    @else
        <a href="{{ route('show-dashboard') }}">dashboard</a>
        <a href="{{ route('show-reflect') }}">reflect</a>
        <a href="{{ route('auth-logout') }}">logout</a>
    @endif
</nav>
