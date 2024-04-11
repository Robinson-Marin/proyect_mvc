<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROGRAMMING WITH MEMO </title>
</head>
<body>
    <div>
        <h1>PROGRAMMING WITH MEMO</h1>
        <h3>{{ $name }}</h3>

        @php
            $program ='Desarrollo de software';
            $age = 34
        @endphp

        <h3> Matriculado en:</h3>
        <p> {{$program}}</p>

        @if ($age >= 18)
        <p>Es mayor de edad</p>
        @endif

        @for ($i = 0; $i < 5; $i++)
        <p>{{ $i }}</p>
        @endfor

    <div>
</body>
</html>


