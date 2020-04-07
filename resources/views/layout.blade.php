<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        @livewireStyles
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="container mx-auto min-h-screen flex flex-col flex-grow px-4 lg:px-0">
            <x-navigation />
            @yield('content')
        </div>
        @livewireScripts
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
