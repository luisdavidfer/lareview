<?php if(isset($person)): ?>
    <?php $__env->startSection('title', 'La review - Modificar persona'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'La review - Añadir persona'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">

    <?php if(isset($person)): ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('person.update',['person'=>$person->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('person.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Nombre completo
            <input class="my-3 form-control" type="text" required name="name" value="<?php echo e($person->name ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Fotografía
            <input class="my-3 form-control" type="file" name="photo">
            <div class="text-danger my-3"><?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Ruta externa
            <input class="my-3 form-control" required type="text" name="external_url" value="<?php echo e($person->external_url ?? ''); ?>">
            <div class="text-danger my-3"><?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            Actúa en
            <select class="my-3 form-control" name="act[]" multiple>
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($movie->id); ?>"
                        <?php if(isset($person)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('actors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($movie->title); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            Ha dirigido
            <select class="my-3 form-control" name="direct[]" multiple>
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($movie->id); ?>"
                        <?php if(isset($person)): ?>
                            <?php if(in_array($person->id, $movie->indexesList('directors'))): ?>
                                selected
                            <?php endif; ?>
                        <?php endif; ?>
                    ><?php echo e($movie->title); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            
            <input  class="btn btn-primary" value="Guardar" type="submit">

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/form.blade.php ENDPATH**/ ?>