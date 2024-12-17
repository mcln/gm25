<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto</h1>
    <p>Nombre: {{ $data['nombre'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Mensaje: {{ $data['mensaje'] }}</p>
</body>
</html>