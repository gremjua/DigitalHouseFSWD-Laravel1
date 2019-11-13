<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peliculas</title>
</head>
<body>
        <h1>Peliculas</h1>
        <ul>
            @forelse ($peliculas as $item)
                <li>{{$item}}</li>
            @empty
                No hay peliculas!
            @endforelse
        </ul>
</body>
</html>