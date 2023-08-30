<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>

    <div style="background: blue; ">
    <h1>EVENTOS</h1>

    @foreach($eventos as $ref)
    <p><b>ID: </b>{{$ref['id']}}</p>
    <p><b>NOMBRE: </b>{{$ref['titulo']}}</p>
    <p><b>DESCRIPCIÓN: </b>{{$ref['descripcion']}}</p>
    <p><b>------------------------------------------</b></p>
    @endforeach
    </div>
</body>
</html>
