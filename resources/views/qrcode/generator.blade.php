<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>2amigos/qrcode-library - QR Code Generator</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon"/>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-black mb-10 mt-5">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
            <div class="flex flex-row items-center text-3xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white">
                <img src="{{ asset('images/logo.png') }}" width="75" class="mr-10"/>
                <div class="flex items-center">
                    2amigos/qrcode-library &nbsp;<h4 class="flex"> .QR Code Generator </h4>
                </div>
            </div>
            <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
            </button>
        </div>
    </div>
</nav>

<div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <livewire:qr-code-builder/>
</div>
@livewireScripts
</body>
</html>
