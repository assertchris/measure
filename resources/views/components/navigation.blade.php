@if(auth()->user() and !auth()->user()->line_manager_email and !request()->is('settings'))
    <livewire:set-line-manager-email />
@endif
<nav class="flex flex-row flex-shrink w-full p-4 bg-gray-100 mb-2">
    <a href="{{ route('show-home') }}">home</a>
    @unless($isLoggedIn)
        <a href="{{ route('auth-login-with-google') }}" class="ml-2">login</a>
    @else
        <a href="{{ route('show-dashboard') }}" class="ml-2">dashboard</a>
        <a href="{{ route('show-reflect') }}" class="ml-2">reflect</a>
        <a href="{{ route('show-give-feedback') }}" class="ml-2">give feedback</a>
        <a href="{{ route('show-settings') }}" class="ml-2">settings</a>
        <a href="{{ route('auth-logout') }}" class="ml-2">logout</a>
    @endif
</nav>
