<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
<ul>
<h1>Productos</h1>
@foreach ($Producto as $prod)
    <strong>Nombre:</strong> {{ $prod->nombre }}<br>

    <strong>Precio unitario:</strong> {{ $prod->precio_unitario }}<br>
@endforeach

</ul>
</body>
</html>
