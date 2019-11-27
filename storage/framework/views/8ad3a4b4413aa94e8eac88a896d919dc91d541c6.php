<?php $__env->startSection('title', 'Titulo'); ?>

<?php $__env->startSection('content'); ?>

<form method="post" action="<?php echo e(route('user.store')); ?>">
        <?php echo csrf_field(); ?>

        <?php if(isset($user->id)): ?>
            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
        <?php endif; ?>

        Username:<br><input type="text" name="username" value="<?php echo e($user->username ??); ?>"><br>
        Email:<br><input type="email" name="email" value="<?php echo e($user->email ??); ?>"><br>
        Password:<br><input type="password" name="password" value="<?php echo e($user->password ??); ?>"><br><br>

        <input type="submit" value="Create">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/create.blade.php ENDPATH**/ ?>