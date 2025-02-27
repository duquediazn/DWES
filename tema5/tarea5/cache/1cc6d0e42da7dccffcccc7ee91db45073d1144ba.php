<?php $__env->startSection('titulo'); ?>
    <?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
    <?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<?php if(!empty($mensaje)): ?>
    <div class="alert alert-success container container-md mb-2">
        <?php echo e($mensaje); ?>

    </div>
<?php endif; ?>
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
    <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="text-center">
            <td><?php echo e($jugador->apellidos); ?>, <?php echo e($jugador->nombre); ?></td>
            <td><?php echo e($jugador->posicion); ?></td>
            <?php if(!empty($jugador->dorsal)): ?>
                <td><?php echo e($jugador->dorsal); ?></td>    
            <?php else: ?>
                <td>Sin Asignar</td> 
            <?php endif; ?>
            <td><?php echo $generator->getBarcode($jugador->barcode, $generator::TYPE_EAN_13, 2, 30, 'white'); ?></td>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>