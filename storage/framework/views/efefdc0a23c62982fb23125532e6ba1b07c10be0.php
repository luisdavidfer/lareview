<!-- Title -->
<?php $__env->startSection('title', 'La review - Personas'); ?>

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
                            <th>Nombre</th>
                            <th>Fotografía</th>
                            <th>Ruta externa</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='<?php echo e(route('person.create')); ?>'"><i class="lni-plus"></i></button></th>
                        </tr>
                        <!-- Table data -->
                        <?php $__currentLoopData = $peopleList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($person->id); ?></td>
                                <td><a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->name); ?></a></td>
                                <td><img style="width:75px" src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e(basename($person->photo)); ?>"></td>
                                <td><a href="<?php echo e(route('person.show', $person->id)); ?>"><?php echo e($person->external_url); ?></a></td>
                                <!-- Modify button -->
                                <td>
                                    <form action = "<?php echo e(route('person.edit', $person->id)); ?>" method="GET">
                                            <?php echo csrf_field(); ?>
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <!-- Delete button -->
                                <td>
                                    <form action = "<?php echo e(route('person.destroy', $person->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button onclick="return confirm('¿Estás seguro de eliminar a <?php echo e($person->name); ?>?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
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
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/list.blade.php ENDPATH**/ ?>