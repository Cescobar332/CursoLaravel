<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .imagenCabecera{
            float: right;
            margin: auto;
            width: 150px;
        }
        .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 100px;
            color: royalblue;
        }
        .contenido form, table{
            width: 500px;
            margin: 0 auto;
        }
        .pie{
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    {{-- @include('layouts.navbar')
    @yield('cabecera')

    @include('layouts.card')
    @yield('inforGeneral')
    @yield('pie')
    Aquí iría el texto del pie --}}

    <div class="cabecera">
        @yield('cabecera')
        <img src="/images/c.jpg" class="imagenCabecera">
    </div>
    <div class="contenido">
        @yield('contenido')
    </div>
    <div class="pie">
        @yield('pie')
        Carlos Escobar. Curso de Laravel. Todos los derechos reservados.
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
