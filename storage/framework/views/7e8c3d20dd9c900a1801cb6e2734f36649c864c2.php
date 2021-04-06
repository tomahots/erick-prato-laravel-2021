<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    
    <ul>
    
        
    
    </ul>
    <div class='row'>
        <div class='col-md-12'>
            <h4>Lista de Empleados</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Lugar de Nacimiento</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Telefono</td>
                            <td>Cargo</td>
                            <td>Estado</td>
                            <td>Empresa</td>
                        </tr>
                        </thead>

                    <tbody>
                        <?php $__currentLoopData = $empleado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($empleados->id); ?></td>
                                <td><?php echo e($empleados->codigo); ?></td>
                                <td><?php echo e($empleados->nombre); ?></td>
                                <td><?php echo e($empleados->lugar_nacimiento); ?></td>
                                <td><?php echo e($empleados->fecha_nacimiento); ?></td>
                                <td><?php echo e($empleados->telefono); ?></td>
                                <td><?php echo e($empleados->cargo); ?></td>
                                <td><?php echo e($empleados->estado); ?></td>
                                <td><?php echo e($empleados->empresa_id); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>    
</body>

</html>

<?php /**PATH C:\xampp\htdocs\laravel\Proyecto1\resources\views/hola.blade.php ENDPATH**/ ?>