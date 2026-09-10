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

        nav.menu {
            background-color: #2c3e50;
            padding: 10px 0;
        }

        nav.menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav.menu li {
            margin: 0 15px;
        }

        nav.menu a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav.menu a:hover {
            text-decoration: underline;
        }

        .aviso-sucesso {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
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