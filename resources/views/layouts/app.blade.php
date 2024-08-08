<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <title>@yield('title', 'Sistema de Cadastro')</title>
</head>
<body>
    <header>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <nav>
            <a href="{{ url('/register') }}" class="encaminhamento">CADASTRAR</a>
        </nav>
    </footer>
</body>
</html>
