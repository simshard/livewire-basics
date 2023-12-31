<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{{ $title ?? 'Livewire Basics' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="mx-auto mb-4 py-4 bg-slate-100 border border-slate-300">
            <ul   class="flex flex-row justify-left content-between list-inside list-disc text-gray-600 text-xl">
           <li class="mx-4"> <a wire:navigate href="/">Home</a></li>
            <li class="mx-4"><a wire:navigate href="/counter">Counter</a></li>
            <li class="mx-4"><a wire:navigate href="/todo">Todos</a></li>
            <li class="mx-4"><a wire:navigate href="/posts">Posts</a></li>
        </ul>
        </nav>
        
        <div class="container mx-auto mt-2">
        {{ $slot }}
        </div>
    </body>
</html>
