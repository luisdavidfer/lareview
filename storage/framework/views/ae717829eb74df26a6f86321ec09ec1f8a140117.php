<!-- Title -->
<?php $__env->startSection('title', 'La review - Usuarios'); ?>

<!-- Content -->
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Table header -->
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th colspan="2"><button title="Añdir" class="btn btn-primary p-2" onclick="location.href='<?php echo e(route('user.create')); ?>'"><i class="lni-plus"></i></button></th>
                    </tr>
                    <!-- Table data -->
                    <?php $__currentLoopData = $usersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->id == $authId): ?>
                            <tr class="text-primary"> 
                        <?php else: ?>
                            <tr>
                        <?php endif; ?>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->password); ?></td>
                            <!-- Modification button -->
                            <td>
                                <form action = "<?php echo e(route('user.edit', $user->id)); ?>" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                </form>
                            </td>
                            <!-- Delete button -->
                            <td>
                                <form action = "<?php echo e(route('user.destroy', $user->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button onclick="return confirm('¿Estás seguro de eliminar al usuario <?php echo e($user->name); ?>?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div> 
        <!-- Table -->
        </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>
<!-- Content -->
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/list.blade.php ENDPATH**/ ?>