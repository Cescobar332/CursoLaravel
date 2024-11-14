@extends('../layouts.plantilla')

@section('cabecera')
    LEER REGISTROS
@endsection

@section('contenido')
    <table border="1">
        <tr>
            <td>Nombre Artículo</td>
            <td>Sección</td>
            <td>Precio</td>
            <td>Fecha</td>
            <td>País de origen</td>
            <td>Imagen</td>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td><a href="{{route('productos.edit' , $producto->id)}}"> {{ $producto->nombre_articulo }}</a></td>
                <td>{{ $producto->seccion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->fecha }}</td>
                <td>{{ $producto->pais_origen }}</td>
                <td><img src="images/{{$producto->ruta}}" width="150"></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('pie')
@endsection
