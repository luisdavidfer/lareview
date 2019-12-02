<?php $__env->startSection('title', 'La review - Géneros'); ?>


<?php $__env->startSection('content'); ?>


<div class="container-fluid">
        <div class="row">
            <div class="col-12">
               <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='<?php echo e(route('genre.create')); ?>'"><i class="lni-plus"></i></button></th>
                        </tr>
                        <?php $__currentLoopData = $genresList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($genre->id); ?></td>
                                <td><a href="<?php echo e(route('genre.show', $genre->id)); ?>"><?php echo e($genre->description); ?></a></td>
                                <td>
                                    <form action = "<?php echo e(route('genre.edit', $genre->id)); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
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
            </div> 
        </div>
</div>
      






<div class="modal fade" id="genreModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title text-primary">Añadir género</h5>
                  <button type="button" class="close" data-dismiss="modal">
                    <i class="lni-close"></i>
                  </button>
                </div>
                <form enctype="multipart/form-data" method="post" action="<?php echo e(route('genre.store')); ?>">
                    <?php echo csrf_field(); ?>
                  <div class="modal-body">
                    <div class="form-group">
                        Descripción
                        <input class="form-control"  type="text" name="description" maxlength="255">
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/list.blade.php ENDPATH**/ ?>