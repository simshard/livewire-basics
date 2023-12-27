<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="mx-auto mb-4 py-4  ">
            <ul   class="flex flex-row justify-center content-between list-inside list-disc text-gray-600 text-xl">
           <li class="mx-4"> <a href="/">Home</a></li>
            <li class="mx-4"><a href="/counter">Counter</a></li>
            <li class="mx-4"><a href="/todo">Todos</a></li>
        </ul>
        </nav>
        <hr class="text-black">
        <div class="container mx-auto mt-2">
        {{ $slot }}
        </div>
    </body>
</html>
