<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>

    <h2>Hemos recibido tu mensaje y te responderemos a la brevedad.</h2>

    <p>
        Nombre: {{ $msg->nombre }}
        Email: {{ $msg->email }}
        Mensaje: {{ $msg->mensaje }}
    </p>

</body>
</html>
