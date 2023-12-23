<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .general-content {
            display: flex;
        }
    </style>
</head>

<body class="antialiased">
    <div class="general-content">
        <div class="header">
            <img src="{{ asset('storage/assets/images/logo.png') }}" alt="Logo cabeçalho Adoorei">
            <h1>Sua vez</h1>
        </div>
        <div class="proximoAtendimento">
            <span>Eduarda será o próximo a pegar o chat</span>
            <span>Último chat pego por natália às 15:00</span>
        </div>
        <div class="btn">
            <button>Peguei</button>
        </div>
    </div>
</body>

</html>