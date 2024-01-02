<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        

        {{-- Dropzone --}}
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class=" bg-gray-100">
            <div class="w-full bg-white py-12 text-center flex items-center justify-center">
                <div class="w-24"><x-logo-app/></div>
                <h2 class="ml-4 font-semibold text-xl text-gray-800 leading-tight">{{ __('Check my label') }}</h2>
            </div>

            <!-- Page Content -->
           @livewire('search-public-label')
        </div>

        @stack('modals')

        @livewireScripts

        {{-- Flowbite --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    </body>
</html>
