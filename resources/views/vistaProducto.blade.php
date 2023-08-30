<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>

    <ul>
        <h1>Productos</h1> <!-- titula de la lista a mostrar -->
        @foreach ($Producto as $prod)<!-- bucle para acceder a los datos de la tabla -->
            <strong>Nombre:</strong> {{ $prod->nombre }}<br> <!-- acedemos a los atributos de la tabla -->
            <strong>Precio unitario:</strong> {{ $prod->precio_unitario }}<br> <!-- acedemos a los atributos de la tabla -->
            <strong>---------------------------------------------------------------</strong> <br>
        @endforeach
    </ul>

</body>
</html>
