<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title to be replaced by variable --}}
    <title>Jurassic Park</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="bg-black min-h-screen">
        <x-jurassic-park.navbar></x-jurassic-park.navbar>
        <div class="text-white">
            {{-- This is where main content will be. Perhaps a header, Welcome to Jurassic Park. Needs to be moved to correct
            file, currently in layout for testing purposes</br> </br> --}}
            <x-jurassic-park.header></x-jurassic-park.header>

            <div class="flex flex-row justify-center ">
                <x-jurassic-park.terminal></x-jurassic-park.terminal>
                <x-jurassic-park.terminal></x-jurassic-park.terminal>
                <x-jurassic-park.terminal></x-jurassic-park.terminal>
                <x-jurassic-park.terminal></x-jurassic-park.terminal>
            </div>
        </div>
    </div>
</body>

</html>
