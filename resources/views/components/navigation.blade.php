@if(auth()->user() and !auth()->user()->line_manager_email and !request()->is('settings'))
    <livewire:set-line-manager-email />
@endif
<nav class="flex flex-col lg:flex-row flex-shrink w-full p-4 bg-gray-100 mb-2">
    @unless($isLoggedIn)
        <a href="{{ route('show-home') }}" class="mr-2">home</a>
        <a href="{{ route('auth-login-with-google') }}" class="mr-2">login</a>
    @else
        <a href="{{ route('show-dashboard') }}" class="mr-2">dashboard</a>
        <a href="{{ route('show-reflect') }}" class="mr-2">reflect</a>
        <a href="{{ route('show-give-feedback') }}" class="mr-2">give feedback</a>
        <a href="{{ route('show-settings') }}" class="mr-2">settings</a>
        <a href="{{ route('auth-logout') }}">logout</a>
    @endif
</nav>
