{{-- Componente de Layout --}}
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Vez!</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="general-content d-flex flex-column align-items-center justify-content-center vh-100">
        <div class="header d-flex flex-column align-items-center mb-5">
            <img src="{{ URL('storage/assets/images/logo.svg') }}" alt="Logo cabeçalho Adoorei">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>