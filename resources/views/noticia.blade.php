<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>

<div style="background: blue; ">
    <h1>NOTICIAS</h1>
    @foreach($noticias as $n)
        <p><b>ID:</b>{{ $n['id'] }}</p>
        <p><b>TITULO:</b>{{ $n['titulo'] }}</p>
        <p><b>DESCRIPCIÓN:</b>{{ $n['descripcion'] }}</p>
        <p><b>-----------------------------------</b></p>
    @endforeach
    <button >Error</button>
</div>

</body>
</html>
