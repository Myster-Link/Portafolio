<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recivido</title>
</head>

<body>

    <p>Recibistes un mensaje de: {{ $msg['nombre_contacto'] }} - {{ $msg['correo_contacto'] }}</p>
    <p><strong>Asunto:</strong> {{ $msg['asunto_contacto'] }}</p>
    <p><strong>Contenido:</strong> {{ $msg['mensaje_contacto'] }}</p>
</body>

</html>
