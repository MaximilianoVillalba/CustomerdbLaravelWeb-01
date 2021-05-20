@extends('app')
@section('content')
<div class="container">
    <form action="/rubros_busquedas/listado" method="post">
        @csrf
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="idRubro" required>
                <option selected disabled>Seleccione una busqueda</option>
                @foreach($rubros as $rubro)
                <option value="{{ $rubro->idRubro}}">{{ $rubro->descripcion}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
@stop