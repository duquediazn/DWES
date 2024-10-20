@extends('plantillas.plantilla1')
@section('titulo')
    {{$titulo}}
@endsection
@section('encabezado')
    {{$encabezado}}
@endsection

@section('contenido')
@if (!empty($mensaje))
    <div class="alert alert-success container container-md mb-2">
        {{$mensaje}}
    </div>
@endif
<a class="btn btn-success" href="fcrear.php">
    + Nuevo Jugador
</a>
<table class="table table-striped table-dark table-hover mt-2">
    <thead>
    <tr class="text-center">
        <th scope="col">Nombre completo</th>
        <th scope="col">Posición</th>
        <th scope="col">Dorsal</th>
        <th scope="col">Código de barras</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jugadores as $jugador)
        <tr class="text-center">
            <td>{{$jugador->apellidos}}, {{$jugador->nombre}}</td>
            <td>{{$jugador->posicion}}</td>
            @if (!empty($jugador->dorsal))
                <td>{{$jugador->dorsal}}</td>    
            @else
                <td>Sin Asignar</td> 
            @endif
            <td>{!!$generator->getBarcode($jugador->barcode, $generator::TYPE_EAN_13, 2, 30, 'white')!!}</td>
            <!-- 
                Para no escapar el contenido y mostrar el HTML directamente usamos las exclamaciones.
                Usamos el método getBarcode() para generar el HTML, le pasamos:
                 - El valor del código de barras de cada jugador: $jugador->barcode
                 - EAN-13, el tipo de código: $generator::TYPE_EAN_13
                 - Ancho de la barra en píxeles, por ejemplo: 2
                 - Alto de la barra en píxeles, por ejemplo: 30
                 - El color de las barras: 'white'
            -->
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


