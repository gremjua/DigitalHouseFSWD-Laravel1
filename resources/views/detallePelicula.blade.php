<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelicula</title>
</head>
<body>
        <h1>Detalle de pelicula</h1>
            
        @if (isset($peliculas[$id]))
            <h2>Titulo: {{$peliculas[$id]['titulo']}}</h2>
            <h2>Rating: {{$peliculas[$id]['rating']}}</h2>
        @else
            <h2>Id de pelicula no es valido.</h2>
        @endif
</body>
</html>