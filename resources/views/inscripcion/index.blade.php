@extends('app')
@section('content')
<div class="container">
    <form action="{{ url('/inscripcion') }}" method="get">
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="idBusqueda" required>
                <option selected disabled>Seleccione una busqueda</option>
                @foreach($busquedas as $busqueda)
                <option value="{{ $busqueda->idBusqueda}}">{{ $busqueda->descripcion}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name='apellido' required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre" required>
        </div>
        <button type="submit" class="btn btn-primary">Cargar</button>
    </form>
</div>
@stop