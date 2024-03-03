<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>The Chronicles of Laravel</title>
    @livewireStyles
</head>
<body>

    {{ $slot }}
    @livewireScripts
</body>
</html>