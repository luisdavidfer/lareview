<?php if(isset($user)): ?>
    <?php $__env->startSection('title', 'Update'); ?>
    <?php $__env->startSection('header', 'Update'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Insert'); ?>
    <?php $__env->startSection('header', 'Insert'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <?php if(isset($user)): ?>
        <form method="post" action="<?php echo e(route('user.update',['id'=>$user->id])); ?>">
            <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form method="post" action="<?php echo e(route('user.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Name:<br><input type="text" name="name" value="<?php echo e($user->name ?? ''); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Email:<br><input type="email" name="email" value="<?php echo e($user->email ?? ''); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Password:<br><input type="password" name="password" value="<?php echo e($user->password ?? ''); ?>">
            <?php $__errorArgs = ['password'];
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/form.blade.php ENDPATH**/ ?>