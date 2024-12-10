<?php $__env->startSection('titulo'); ?>
<?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
<?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container container-md">
    <?php if ($errores): ?>
        <div class="alert alert-danger container container-md mb-2">
            <?php $__currentLoopData = $errores;
            $__env->addLoop($__currentLoopData);
            foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach;
            $__env->popLoop();
            $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <form name="crearJugador" action="crearJugador.php" method="POST">
        <div class="row">
            <div class="col">
                <label class="mb-2" for="nombre">Nombre</label>
                <input class="form-control mb-2" type="text" name="nombre" id="nombre" placeholder="Nombre"
                    required title="Introduzca el nombre del jugador." maxlength="40">
            </div>
            <div class="col">
                <label class="mb-2" for="apellidos">Apellidos</label>
                <input class="form-control mb-2" type="text" name="apellidos" id="apellidos" placeholder="Apellidos"
                    required title="Introduzca los apellidos" maxlength="60">
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
                    <option value="por">Portero</option>
                    <option value="de">Defensa</option>
                    <option value="li">Lateral Izquierdo</option>
                    <option value="ld">Lateral Derecho</option>
                    <option value="cen">Central</option>
                    <option value="del">Delantero</option>
                </select>
            </div>
            <div class="col">
                <label class="mb-2" for="codigo">Código de barras</label>
                <input class="form-control mb-2" type="text" name="codigo" id="codigo"
                    placeholder="Codigo de barras" title="Código de barras" maxlength="13"
                    <?php if ($codigo): ?> value="<?php echo e($codigo); ?>" <?php endif; ?> readonly>
            </div>
        </div>
        <input class="btn btn-primary me-2 mt-2" type="submit" value="Crear">
        <input class="btn btn-success me-2 mt-2" type="reset" value="Limpiar">
        <a class="btn btn-info me-2 mt-2" href="jugadores.php">Volver</a>
        <button type="button" class="btn btn-secondary me-2 mt-2" id="generarCodigoButton" href="generarCode.php"><i class="bi bi-upc-scan"></i> Generar Barcode</button>
    </form>
</div>
<script src="js/ajax.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>