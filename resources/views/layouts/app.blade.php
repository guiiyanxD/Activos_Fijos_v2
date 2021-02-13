<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">

        @livewireStyles
        <style>
            main, header{
                background-image: url('{{ asset('/backgrounds/fondo.jpg') }}');
                background-repeat: initial;
                background-attachment: fixed;
                background-size: cover;
                -webkit-background-size: cover;
                opacity: 0.9;
            }
            main{
                height: 100vh;
            }

            select {
                display: block;
                opacity: 1;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('materialize/js/materialize.js') }}" ></script>
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-200">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="bg-opacity-50 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    <div class="divider" style="width: 100%;">
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <!-- <footer>

            </footer> -->
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
