<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleos Tics</title>

    <!-- Custom CSS -->
    @section('styles_laravel')

    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @show

    <link rel="stylesheet" href="/assets/css/mis_estilos.css">
    @yield('mis_estilos')
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top nav mb-4">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="btn btn-sm btn-outline-secondary" href="{{ URL::previous() }}">Atras</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{url('/rubros')}}">Listado de Rubros</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{url('/rubros_busquedas')}}">Busquedas por Rubro</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{url('/inscripcion/create')}}">Inscribite a una
                    busqueda
                    laboral</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{url('/busquedas_laborales')}}">Inscripciones por
                    busqueda
                    laboral</a>
            </div>
        </div>
    </nav>
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Aquí incluiremos el contenido de nuestra aplicación -->
                @yield('content')

            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- Scripts -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>