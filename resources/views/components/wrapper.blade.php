{{-- Componente de Layout --}}
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fila de Atendimento</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        var pusher = new Pusher('51fca7d5e9bb1e7e4c4a', {
            cluster: 'us2'
        });

        var channel = pusher.subscribe('chat-pego-channel');
        channel.bind('chat-pego', function(data) {
            location.reload();
        });
    </script>

</head>

<body class="d-flex flex-column justify-content-between" style="font-family: 'Roboto', sans-serif; height:100vh">

    <div class="container">

        {{ $slot }}

    </div>

    <div class="container">
        <footer class="d-flex justify-content-center align-items-center py-3 border-top">
            <div class="d-flex align-items-center">
                <img src="https://www.adoorei.com.br/img/logo.dfb5eb16.svg" alt="Logo Adoorei rodapé" style="width:25px">
                <span class="text-muted ms-2">© 2024 Adoorei Todos os direitos reservados</span>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>