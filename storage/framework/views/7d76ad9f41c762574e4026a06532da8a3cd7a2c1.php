<?php if(isset($user)): ?>
    <?php $__env->startSection('title', 'La review - Modificar usuario'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'La review - Añadir usuario'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">

    <?php if(isset($user)): ?>

        <form method="post" enctype="multipart/form-data" action="<?php echo e(route('user.update',['user'=>$user->id])); ?>">
            <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo e(route('user.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Nombre
            <input class="my-3 form-control" required type="text" name="name" value="<?php echo e($user->name ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Correo electrónico
            <input class="my-3 form-control" required type="email" name="email" value="<?php echo e($user->email ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Contraseña
            <input class="my-3 form-control" required type="password" name="password" value="<?php echo e($user->password ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>

            <input  class="btn btn-primary" value="Guardar" type="submit">
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/form.blade.php ENDPATH**/ ?>