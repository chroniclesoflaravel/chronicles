<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>The Chronicles of Laravel</title>
    
    @if(config('chronicles.dev'))
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="http://localhost:5173/resources/js/app.js" type="module"></script>
    @else
    {{-- {{ Vite::useBuildDirectory('chronicles')->withEntryPoints(['resources/js/app.js']) }} --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'], 'chronicles/build')
    @endif
    @livewireStyles
</head>
<body>

    <div id="chronicle" class="flex items-center justify-center w-screen h-screen">
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>