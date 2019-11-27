<?php if(isset($genre)): ?>
    <?php $__env->startSection('title', 'Update'); ?>
    <?php $__env->startSection('header', 'Update'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Insert'); ?>
    <?php $__env->startSection('header', 'Insert'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <?php if(isset($genre)): ?>
        <form method="post" action="<?php echo e(route('genre.update',['genre'=>$genre->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form method="post" action="<?php echo e(route('genre.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Descripción:<br><input type="text" name="description" value="<?php echo e($genre->description ?? ''); ?>"><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            
            <input type="submit">
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/form.blade.php ENDPATH**/ ?>