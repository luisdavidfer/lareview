<?php if(isset($movie)): ?>
    <?php $__env->startSection('title', 'Update'); ?>
    <?php $__env->startSection('header', 'Update'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Insert'); ?>
    <?php $__env->startSection('header', 'Insert'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <?php if(isset($movie)): ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('movie.update',['movie'=>$movie->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('movie.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Título:<br><input type="text" name="title" value="<?php echo e($movie->title ?? ''); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Géneros:<br>
            <select name="genres[]" multiple>
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($genre->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($genre->id, $movie->indexesList('genres'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($genre->description); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            Actores:<br>
            <select name="actors[]" multiple>
                <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($person->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('actors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($person->name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            Directores:<br>
            <select name="directors[]" multiple>
                <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($person->id); ?>"
                        <?php if(isset($movie)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('directors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($person->name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            Año:<br><input type="number" min="1900" name="year" value="<?php echo e($movie->year ?? ''); ?>">
            <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Puntuación:<br><input type="number" min="1" max="10" name="rating" value="<?php echo e($movie->rating ?? ''); ?>">
            <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>
            Portada:<br><input type="file" name="cover">
            <?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>
            Ruta del archivo:<br><input type="text" name="filepath" value="<?php echo e($movie->filepath ?? ''); ?>">
            <?php $__errorArgs = ['filepath'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>
            Ruta externa (metadatos):<br><input type="text" name="external_url" value="<?php echo e($movie->external_url ?? ''); ?>">
            <?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>
            Nombre del archivo:<br><input type="text" name="filename" value="<?php echo e($movie->filename ?? ''); ?>">
            <?php $__errorArgs = ['filename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>

            <input type="submit">
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/form.blade.php ENDPATH**/ ?>