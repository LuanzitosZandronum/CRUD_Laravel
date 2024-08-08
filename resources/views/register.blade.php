<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <title>Auditoria de Clientes</title>
</head>
<body>
    <header class= "container">
        <h2>Cadastro de Cliente</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="nome" type="text" placeholder="Nome">
            <input name="nascimento" type="date" placeholder="Data de Nascimento">
            <input name="telefone" type="int" placeholder="Telefone">
            <textarea name ="observacao" rows="1" cols="5"></textarea>
            <button>Cadastrar</button>
        </form>
    </header>
    <a class="encaminhamento" href="/clientes">VER CLIENTES</a>
</body>
</html>