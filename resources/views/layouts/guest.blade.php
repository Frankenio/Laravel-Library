<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=aclonica:400" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"  :class="{ 'dark': darkMode, 'bg-white text-black': !darkMode, 'bg-gray-800 text-white': darkMode }" x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))">

        <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-50 to-pink-100 dark:bg-gradient-to-br dark:from-gray-800 dark:via-gray-900 dark:to-indigo-900 flex items-center justify-center p-4">

            <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
