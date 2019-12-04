<!-- Title -->
<?php if(isset($movie)): ?>
    <?php $__env->startSection('title', 'La review - Modificar película'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'La review - Añadir película'); ?>
<?php endif; ?>
<!-- Title -->

<!-- Content -->
<?php $__env->startSection('content'); ?>

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">

    <!-- Form -->
    <?php if(isset($movie)): ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('movie.update',['movie'=>$movie->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('movie.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Título
            <input class="my-3 form-control" required type="text" name="title" value="<?php echo e($movie->title ?? ''); ?>" maxlength="255">
            <div class="text-danger my-3"><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Sinopsis
            <textarea rows="5" type="text" class="my-3 form-control" required name="synopsis" maxlength="1024"><?php echo e($movie->synopsis ?? ''); ?></textarea>
            <div class="text-danger my-3"><?php $__errorArgs = ['synopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Géneros
            <select class="my-3 form-control custom-select" name="genres[]" multiple>
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($genre->id, $movie->indexesList('genres'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($genre->description); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            Actores
            <select class="my-3 form-control" name="actors[]" multiple>
                <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($person->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('actors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($person->name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            Directores
            <select class="my-3 form-control" name="directors[]" multiple>
                <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($person->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('directors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($person->name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            Año
            <input class="my-3 form-control" required type="number" min="1900" name="year" value="<?php echo e($movie->year ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Puntuación
            <input class="my-3 form-control" required type="number" min="1" max="10" name="rating" value="<?php echo e($movie->rating ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Portada
            <input class="my-3 form-control" type="file" name="cover">
            <div class="text-danger my-3"><?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Ruta externa
            <input class="my-3 form-control" required type="text" name="external_url" value="<?php echo e($movie->external_url ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Nombre del archivo
            <input class="my-3 form-control" required type="text" name="filename" value="<?php echo e($movie->filename ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['filename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>

            <input  class="btn btn-primary" value="Guardar" type="submit">

        </form>
    <!-- Form -->
    </div>
<?php $__env->stopSection(); ?>
<!-- Content -->
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/form.blade.php ENDPATH**/ ?>