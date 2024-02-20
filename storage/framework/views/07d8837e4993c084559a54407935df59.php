<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Vista</h1>
    <form action="<?php echo e(route('proyecto.create')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombres</label>
            <ul class="list-group">
                <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><?php echo e($proyecto->nombre); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <ul class="list-group">
                <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><?php echo e($proyecto->descripcion); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <ul class="list-group">
                <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><?php echo e($proyecto->imagen); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\LenguajesProgramacion\resources\views/proyecto/index.blade.php ENDPATH**/ ?>