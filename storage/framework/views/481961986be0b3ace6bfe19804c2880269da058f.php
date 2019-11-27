<?php if(isset($person)): ?>
    <?php $__env->startSection('title', 'Update'); ?>
    <?php $__env->startSection('header', 'Update Person'); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Insert'); ?>
    <?php $__env->startSection('header', 'Insert Person'); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <?php if(isset($person)): ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('person.update',['person'=>$person->id])); ?>">
                <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" method="post" action="<?php echo e(route('person.store')); ?>">
    <?php endif; ?>

            <?php echo csrf_field(); ?>

            Nombre completo:<br><input type="text" name="name" value="<?php echo e($person->name ?? ''); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Fotografía:<br><input type="file" name="photo">
            <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br><br>
            Ruta externa (metadatos):<br><input type="text" name="external_url" value="<?php echo e($person->external_url ?? ''); ?>">
            <?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
            Actúa en:<br>
            <select name="act[]" multiple>
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
            Ha dirijido:<br>
            <select name="direct[]" multiple>
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

            <input type="submit">
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/form.blade.php ENDPATH**/ ?>