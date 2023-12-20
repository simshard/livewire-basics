<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/app.css">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="aside">
            <ul>
           <li> <a href="/">Home</a></li>
            <li><a href="/counter">Counter</a></li>
            <li><a href="/todo">Todos</a></li>
        </ul>
        </nav>
        {{ $slot }}
    </body>
</html>
