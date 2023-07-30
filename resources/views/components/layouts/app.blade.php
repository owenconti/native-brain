<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full h-full p-0">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="h-full w-full pt-8 overflow-hidden bg-gray-900 flex flex-col">
        <div style="height: 30px; -webkit-app-region: drag;" class="fixed w-full top-0 left-0 right-0"></div>
        {{ $slot }}
        @livewireScripts
    </body>
</html>
