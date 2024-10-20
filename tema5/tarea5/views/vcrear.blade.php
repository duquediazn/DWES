@extends('plantillas.plantilla1')
@section('titulo')
    {{$titulo}}
@endsection
@section('encabezado')
    {{$encabezado}}
@endsection

@section('contenido')
    <div class="container container-md">
       @if ($errores)
        <div class="alert alert-danger container container-md mb-2">
            @foreach($errores as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
       @endif
        <form name="crearJugador" action="crearJugador.php" method="POST">
            <div class="row">
                <div class="col">
                    <label class="mb-2" for="nombre">Nombre</label>
                    <input class="form-control mb-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required
                        title="Introduzca el nombre del jugador." maxlength="40">
                </div>
                <div class="col">
                    <label class="mb-2" for="apellidos">Apellidos</label>
                    <input class="form-control mb-2" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required
                        title="Introduzca los apellidos" maxlength="60">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="mb-2" for="dorsal">Dorsal</label>
                    <input class="form-control mb-2" type="number" name="dorsal" id="dorsal" placeholder="Dorsal"
                       min="1" max="99" step="1" title="Introduce el dorsal (1-99)">
                </div>
                <div class="col">
                    <label class="mb-2" for="posicion">Posicion</label>
                    <select class="form-control mb-2" name="posicion" id="posicion">
                        <option value="" selected disabled>Elige una posición</option>
                        <option value="Portero">Portero</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Lateral Izquierdo">Lateral Izquierdo</option>
                        <option value="Lateral Derecho">Lateral Derecho</option>
                        <option value="Central">Central</option>
                        <option value="Delantero">Delantero</option>
                    </select>
                </div>
                <div class="col">
                    <label class="mb-2" for="codigo">Código de barras</label>
                    <input class="form-control mb-2" type="text" name="codigo" id="codigo" placeholder="Codigo de barras"
                    title="Código de barras" maxlength="13" value="@if($codigo){{$codigo}}@endif" readonly>
                </div>
            </div>
            <input class="btn btn-primary me-2 mt-2" type="submit" value="Crear">
            <input class="btn btn-success me-2 mt-2" type="reset" value="Limpiar">
            <a class="btn btn-info me-2 mt-2" href="jugadores.php">Volver</a>
            <a class="btn btn-secondary me-2 mt-2" href="generarCode.php"> <i class="bi bi-upc"></i>Generar Barcode</a>
        </form>
    </div>
@endsection


