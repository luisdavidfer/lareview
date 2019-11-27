<?php if(isset($genresList)): ?>
    <?php $__env->startSection('title', 'Genres'); ?>
    <?php $__env->startSection('header', 'Genres list'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Genre'); ?>
    <?php $__env->startSection('header', 'Genre'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<table style="width:100%;border:1px solid black;text-align:center">
        <?php if(isset($genresList)): ?>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                 </tr>
            <?php $__currentLoopData = $genresList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($genre->id); ?></td>
                    <td><a href="<?php echo e(route('genre.show', $genre->id)); ?>"><?php echo e($genre->description); ?></a></td>
                    <td>
                        <form action = "<?php echo e(route('genre.edit', $genre->id)); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "<?php echo e(route('genre.destroy', $genre->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <button onclick="location.href='<?php echo e(route('genre.create')); ?>'">Añadir género</button>
        <?php else: ?>
            <tr>
                <th><?php echo e($genre->description); ?></th>
            </tr>
            <?php $__currentLoopData = $genre->movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(route('movie.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/list.blade.php ENDPATH**/ ?>