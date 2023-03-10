<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title to be replaced by variable --}}
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="bg-black min-h-screen">
        <x-jurassic-park.navbar></x-jurassic-park.navbar>

        {{ $slot }}

    </div>
</body>

</html>
