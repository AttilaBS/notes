<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notes</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 sm:block">
                    @auth
                        <a href="{{ route('notes.index') }}" class="text-bg text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-bg text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-bg text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="flex column flex-align-start mt-40">
                <div class="flex flex-center column title">
                    <h1>Bem-vindo ao Notes</h1>
                    <h3>Favor logar ou se registrar para usar a aplicação</h3>
                </div>
                <div class="flex flex-start logo-home">
                    <img src="{{ asset('images/logo-notebook.png') }}">
                </div>
            </div>
        </div>
    </body>
</html>
