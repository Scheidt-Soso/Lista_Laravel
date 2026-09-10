<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo', 'Lista Laravel')</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        footer {
            margin-top: 40px;
            padding: 15px 0;
            text-align: center;
            font-size: 0.9em;
            color: #888;
            border-top: 1px solid #ddd;
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('layouts.menu')

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Lista Laravel — Trabalho em dupla</p>
    </footer>

    @stack('scripts')
</body>
</html>