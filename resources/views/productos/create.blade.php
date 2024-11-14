@extends('../layouts.plantilla')

@section('cabecera')
    INSERTAR REGISTROS
@endsection

@section('contenido')
    <form method="post" action="{{ url('/productos') }}" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <input accept="image/*" type="file" name="file">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Nombre: </td>
                <td>
                    <input type="text" name="nombre_articulo">
                    {{ csrf_field() }}
                </td>
            </tr>
            <tr>
                <td>Sección</td>
                <td>
                    <input type="text" name="seccion">
                </td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>
                    <input type="text" name="precio">
                </td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td>
                    <input type="text" name="fecha">
                </td>
            </tr>
            <tr>
                <td>País de Origen</td>
                <td>
                    <input type="text" name="pais_origen">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Enviar">
                </td>
                <td>
                    <input type="reset" name="Borrar" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('pie')
@endsection
