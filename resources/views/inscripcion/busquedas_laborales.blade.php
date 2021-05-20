@extends('app')
@section('content')
<div class="container">
    <form action="{{ url('/busquedas_laborales/listado') }}" method="get">
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="idBusqueda" required>
                <option selected disabled>Seleccione una busqueda</option>
                @foreach($busquedas as $busqueda)
                <option value="{{ $busqueda->idBusqueda}}">{{ $busqueda->descripcion}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
@stop