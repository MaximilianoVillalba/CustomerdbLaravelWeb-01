@extends('app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inscripciones as $inscripcion)
        <tr>
            <td>{{ $inscripcion->fecha}}</td>
            <td>{{ $inscripcion->apellido }}</td>
            <td>{{ $inscripcion->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop