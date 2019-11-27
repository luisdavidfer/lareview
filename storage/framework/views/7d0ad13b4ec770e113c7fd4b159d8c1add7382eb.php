<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>

        <div>
            <a href='http://localhost:3000/user'>Usuarios</a>
            <a href='http://localhost:3000/movie'>Películas</a>
            <a href='http://localhost:3000/genre'>Géneros</a>
            <a href='http://localhost:3000/person'>Gente</a>
        </div>

        <div class="header">
            <h1><?php echo $__env->yieldContent('header'); ?></h1>
        </div>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </body>
</html>
<?php /**PATH /app/resources/views/layouts/master.blade.php ENDPATH**/ ?>