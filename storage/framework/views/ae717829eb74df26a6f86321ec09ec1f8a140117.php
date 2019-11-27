<?php if(isset($usersList)): ?>
    <?php $__env->startSection('title', 'Users'); ?>
    <?php $__env->startSection('header', 'Users list'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'User'); ?>
    <?php $__env->startSection('header', 'User'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<table style="width:100%;border:1px solid black;text-align:center">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
        </tr>
        <?php if(isset($usersList)): ?>
            <?php $__currentLoopData = $usersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->password); ?></td>
                    <td>
                        <form action = "<?php echo e(route('user.edit', $user->id)); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "<?php echo e(route('user.destroy', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <button onclick="location.href='<?php echo e(route('user.create')); ?>'">Nuevo usuario</button>
        <?php else: ?>
                <tr>
                    <td><?php echo e($usr->id); ?></td>
                    <td><?php echo e($usr->name); ?></td>
                    <td><?php echo e($usr->email); ?></td>
                    <td><?php echo e($usr->password); ?></td>
                    <td>
                            <form action = "<?php echo e(route('user.edit', $usr->id)); ?>" method="GET">
                                <?php echo csrf_field(); ?>
                                <input type="submit" value="Modificar">
                            </form>
                        </td>
                        <td>
                                <form action = "<?php echo e(route('user.destroy', $usr->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <input type="submit" value="Borrar">
                                </form>
                        </td>
                </tr>
            </table>
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/list.blade.php ENDPATH**/ ?>