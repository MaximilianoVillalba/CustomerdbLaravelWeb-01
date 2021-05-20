@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="text-primary">Lista de Busquedas para el rubro</h1>

    <table class="table table-success table-striped" id="tableMonedas">
        <thead>
            <tr>
                <th class="text-center">Empresa</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($busquedas as $busqueda)
            <tr>
                <td class="text-center">{{ $busqueda->empresa }}</td>
                <td class="text-center">{{ $busqueda->titulo }}</td>
                <td class="text-center">{{ $busqueda->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
@stop