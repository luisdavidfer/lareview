<?php $__env->startSection('title', 'La review - Películas'); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
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
                            <th>Ruta externa</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='<?php echo e(route('movie.create')); ?>'"><i class="lni-plus"></i></button></th>
                        </tr>
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
                                <td><a href="<?php echo e(url('/search?search='.$movie->year)); ?>"><?php echo e($movie->year); ?></a></td>
                                <td><?php echo e($movie->rating); ?></td>
                                <td><img style="width:75px" src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e(basename($movie->cover)); ?>"></td>
                                <td><?php echo e($movie->filepath); ?></td>
                                <td><?php echo e($movie->filename); ?></td>
                                <td><a href="<?php echo e($movie->external_url); ?>"><?php echo e($movie->external_url); ?></a></td>
                                <td>
                                    <form action = "<?php echo e(route('movie.edit', $movie->id)); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action = "<?php echo e(route('movie.destroy', $movie->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button onclick="return confirm('¿Estás seguro de eliminar la película <?php echo e($movie->title); ?>?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div> 
        </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/list.blade.php ENDPATH**/ ?>