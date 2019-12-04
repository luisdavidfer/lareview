<!-- Title -->
<?php $__env->startSection('title', 'La review - Géneros'); ?>

<!-- Content -->
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Table -->    
               <div class="table-responsive">
                    <table class="table">
                        <!-- Table header -->
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='<?php echo e(route('genre.create')); ?>'"><i class="lni-plus"></i></button></th>
                        </tr>
                        <!-- Table data -->
                        <?php $__currentLoopData = $genresList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($genre->id); ?></td>
                                <td><a href="<?php echo e(route('genre.show', $genre->id)); ?>"><?php echo e($genre->description); ?></a></td>
                                <!-- Modify button -->
                                <td>
                                    <form action = "<?php echo e(route('genre.edit', $genre->id)); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <!-- Delete button -->
                                <td>
                                    <form action = "<?php echo e(route('genre.destroy', $genre->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button onclick="return confirm('¿Estás seguro de eliminar el género <?php echo e($genre->description); ?>?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
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

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/list.blade.php ENDPATH**/ ?>