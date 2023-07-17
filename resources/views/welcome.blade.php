<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-64.png">

        <title>Notes</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="flex flex-align-center background">
                    <div class="hidden fixed top-0 right-0 sm:block login-box">
                        @auth
                            <a href="{{ route('notes.index') }}" class="text-bg text-gray-700 dark:text-gray-500 underline">Notas</a>
                        @else
                            <a href="{{ route('login') }}" class="text-bg text-gray-700 dark:text-gray-500 underline">Logar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-bg text-gray-700 dark:text-gray-500 underline">Cadastrar</a>
                            @endif
                        @endauth{{--  --}}
                    </div>
            @endif
                <div class="flex column welcome-container">
                    <div class="welcome-title">
                        <h1>Bem-vindo ao Notes</h1>
                        <h3>Favor logar ou se registrar para usar a aplicação</h3>
                    </div>
                    <div class="flex logo-home">
                    <img src="{{ url('images/notebooks.webp') }}">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
