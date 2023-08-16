<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros </title>
</head>
<body>
<h1>LISTA DE CONTENIDO</h1>
    @foreach($listas as $n)

            <p><b>ID:</b>{{ $n['id'] }}</p>
            <p><b>NOMBRE:</b>{{ $n['nombre'] }}</p>
            <p><b>EDAD:</b>{{ $n['edad'] }}</p>

        @if ($n['edad'] >= 18 )
            es mayor
        @else
        es menor
        @endif
        <p><b>-----------------------------------</b></p>
    @endforeach
</body>
</html>
