<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-900 antialiased">
    <!-- body layout -->
    <div
        class="min-h-screen flex sm:flex flex-col justify-center items-center sm:justify-center sm:items-center pt-6 sm:pt-0 max-sm:mx-2 max-sm:mt-auto">
        <div>
            <!-- DTO UNG LOGO KAYA HNDI NAKA CENTERALIZED BY Y-AXIS -->
            <x-application-logo class="w-8 text-gray-500" />
        </div>

        <!-- Log in/register/forgot password form layout -->
        <div
            class="w-full max-w-[450px] mt-2 px-6 py-4 shadow-lg border-4 border-gray text-black overflow-hidden max-sm:max-h-[80vh] max-sm:overflow-y-auto max-sm:relative rounded-lg max-sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>