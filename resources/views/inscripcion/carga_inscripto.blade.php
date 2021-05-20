@extends('app')
@section('content')
<div class="container">
    @if($succes == 1)
    <div class="alert alert-success" role="alert">
        Se ha cargado correctamente
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        Hubo un problema en la inscripcion
    </div>
    @endif
</div>
@stop