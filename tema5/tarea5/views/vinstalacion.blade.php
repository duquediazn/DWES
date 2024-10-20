@extends('plantillas.plantilla1')
@section('titulo')
    {{ $titulo }}
@endsection
@section('encabezado')
    {{ $encabezado }}
@endsection

@section('contenido')
    <div class="text-center">
        <a href="crearDatos.php" class="btn btn-success">
            <i class="bi bi-database-fill"></i> Instalar Datos de Ejemplo
        </a>
    </div>
@endsection
