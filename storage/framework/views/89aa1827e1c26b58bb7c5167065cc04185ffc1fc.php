<?php if(isset($moviesList)): ?>
    <?php $__env->startSection('title', 'movies'); ?>
    <?php $__env->startSection('header', 'movies list'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'movie'); ?>
    <?php $__env->startSection('header', 'movie'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<table style="width:100%;border:1px solid black;text-align:center">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Géneros</th>
            <th>Actores</th>
            <th>Directores</th>
            <th>Año</th>
            <th>Puntuación</th>
            <th>Portada</th>
            <th>Ruta del archivo</th>
            <th>Nombre del archivo</th>
            <th>Ruta externa (metadatos)</th>
        </tr>

        <?php if(isset($moviesList)): ?>
            <?php $__currentLoopData = $moviesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($movie->id); ?></td>
                    <td><a href="<?php echo e(route('movie.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
                    <td>
                        <?php $__currentLoopData = ($movie->genres); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('genre.show', $genre->id)); ?>"><?php echo e($genre->description); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <?php $__currentLoopData = $movie->actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <?php $__currentLoopData = $movie->directors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($movie->year); ?></td>
                    <td><?php echo e($movie->rating); ?></td>
                    <td><a href="<?php echo e(url('movies/'.$movie->filename)); ?>"><img style="width:100px" src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e(basename($movie->cover)); ?>"></a></td>
                    <td><?php echo e($movie->filepath); ?></td>
                    <td><?php echo e($movie->filename); ?></td>
                    <td><a href="<?php echo e($movie->external_url); ?>"><?php echo e($movie->external_url); ?></a></td>
                    <td>
                        <form action = "<?php echo e(route('movie.edit', $movie->id)); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "<?php echo e(route('movie.destroy', $movie->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <button onclick="location.href='<?php echo e(route('movie.create')); ?>'">Añadir película</button>
        <?php else: ?>
                <tr>
                    <td><?php echo e($movie->id); ?></td>
                    <td><?php echo e($movie->title); ?></td>
                    <td>
                        <?php $__currentLoopData = ($movie->genres); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('genre.show', $genre->id)); ?>"><?php echo e($genre->description); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <?php $__currentLoopData = $movie->actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <?php $__currentLoopData = $movie->directors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($movie->year); ?></td>
                    <td><?php echo e($movie->rating); ?></td>
                    <td><img style="width:100px" src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e(basename($movie->cover)); ?>"></td>
                    <td><?php echo e($movie->filepath); ?></td>
                    <td><?php echo e($movie->filename); ?></td>
                    <td><a href="<?php echo e($movie->external_url); ?>"><?php echo e($movie->external_url); ?></a></td>
                
                </tr>
            </table>
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/list.blade.php ENDPATH**/ ?>