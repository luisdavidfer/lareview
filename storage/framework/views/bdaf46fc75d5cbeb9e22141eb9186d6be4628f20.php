<?php if(isset($genre)): ?>
    <?php $__env->startSection('title', 'La review - Modificar género'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'La review - Añadir género'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">
    
    <?php if(isset($genre)): ?>
        <form method="post" action="<?php echo e(route('genre.update',['genre'=>$genre->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form method="post" action="<?php echo e(route('genre.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Descripción
            <input class="my-3 form-control" required type="text" name="description" value="<?php echo e($genre->description ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            
            <input class="btn btn-primary" value="Guardar" type="submit">
        </form>
    
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/form.blade.php ENDPATH**/ ?>