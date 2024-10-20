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
            <td><?php echo e('<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($jugador->barcode, $generator::TYPE_EAN_13)) . '">'); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>