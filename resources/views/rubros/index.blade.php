@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>
    <h1 class="text-primary">Lista de Rubros</h1>
    <div class="container-fluid">
        <table class="table table-success table-striped" id="tableMonedas">
            <thead>
                <tr>
                    <th class="text-center">Id Rubro</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rubros as $rubro)
                <tr>
                    <td class="text-center">{{ $rubro->idRubro}}</td>
                    <td class="text-center">{{ $rubro->descripcion}}</td>
                    <td>
                        <a href="{{ route('rubros.show', $rubro->idRubro) }}" class="btn btn-info">Ver busquedas</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
@stop