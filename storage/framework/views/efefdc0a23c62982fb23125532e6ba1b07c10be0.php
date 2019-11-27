<?php if(isset($peopleList)): ?>
    <?php $__env->startSection('title', 'People'); ?>
    <?php $__env->startSection('header', 'People list'); ?>
<?php else: ?>
<?php $__env->startSection('header', $person->name); ?>
    <?php $__env->startSection('title', 'Person'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

<table style="width:100%;border:1px solid black;text-align:center">
        <?php if(isset($peopleList)): ?>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fotografía</th>
                <th>Ruta externa (metadatos)</th>
                 </tr>
            <?php $__currentLoopData = $peopleList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($person->id); ?></td>
                    <td><a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a></td>
                    <td><img style="width:100px" src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e(basename($person->photo)); ?>"></td>
                    <td><a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->external_url); ?></a></td>
                    <td>
                        <form action = "<?php echo e(route('person.edit', $person->id)); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "<?php echo e(route('person.destroy', $person->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <button onclick="location.href='<?php echo e(route('person.create')); ?>'">Añadir persona</button>
        <?php else: ?>
        <img style="width:100px" src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e(basename($person->photo)); ?>">
            <caption><a href="<?php echo e($person->external_url); ?>"><?php echo e($person->external_url); ?></a></caption>
            <tr>
                <th>Actor</th>
            </tr>
            
            <?php $__currentLoopData = $person->act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(route('movie.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <table style="width:100%;border:1px solid black;text-align:center;border-top:none">
            <tr>
                <th>Director</th>
            </tr>
            
            <?php $__currentLoopData = $person->direct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(route('movie.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
            
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/list.blade.php ENDPATH**/ ?>