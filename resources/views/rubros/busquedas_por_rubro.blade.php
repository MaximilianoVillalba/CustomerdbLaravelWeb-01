@extends('app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Empresa</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($busquedas as $busqueda)
        <tr>
            <td>{{ $busqueda->empresa}}</td>
            <td>{{ $busqueda->titulo }}</td>
            <td>{{ $busqueda->descripcion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop