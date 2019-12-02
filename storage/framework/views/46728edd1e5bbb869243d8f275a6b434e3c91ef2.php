<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
        <!--CDN-->

        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico'>
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color bg-primary">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('lareview.png')); ?>" width="200" alt=""></a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse justify-content-between" id="basicExampleNav">
      
            <form action="/search" method="get" class="form-inline w-50 my-auto">
                <div class="input-group md-form w-100">
                    <input class="form-control w-100"  type="search" name="search" placeholder="Buscar" aria-label="Buscar">
                    <div class="input-group-append"><button class="btn bg-white" type="submit"><i class="text-primary lni-search"></i></button></div>
                </div>
            </form>
          
          <!-- Links -->
          <ul class="navbar-nav">
            
            <?php if(auth()->guard()->check()): ?> 
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('movie')); ?>">Películas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('genre')); ?>">Géneros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('person')); ?>">Personas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('user')); ?>">Usuarios</a>
                </li>

                <li class="nav-item">
                <form id="logout" action="<?php echo e(url('/logout')); ?>" method="POST" style="margin:0">
                    <?php echo csrf_field(); ?>
                    <a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout').submit();">Cerrar sesión</a>
                </form>
                </li>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                <a style="cursor:pointer" data-toggle="modal" data-target=".bd-example-modal-sm" class="nav-link">Iniciar sesión</a>
                </li>    
            <?php endif; ?>
            
          </ul>
          <!-- Links -->
      
      
        </div>
        <!-- Collapsible content -->
      
        </nav>
        <!-- Navbar-->

        <!-- Content -->

            <?php echo $__env->yieldContent('content'); ?>
        <!-- Content -->


    <!-- Footer -->
    <footer class="page-footer font-small primary-color bg-primary text-white">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-2" >
            <a href="https://github.com/luisdavidfer/lareview"><img class="mb-2 pt-1" src="<?php echo e(url('lareview.png')); ?>" width="100" alt="La review"></a> © 2019
            <a style="color:white" href="https://github.com/luisdavidfer/" ><i class="lni-github-original"></i> /luisdavidfer</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
      
      <!-- Modal -->
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title text-primary">Iniciar sesión</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="lni-close"></i>
                        </button>
                    </div>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
        
                                <div class="modal-body">
                                    <div class="form-group">
                                        Correo electrónico
                                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        Contraseña
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <?php $__errorArgs = ['password'];
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
                                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
      <!-- Modal -->
    
    </body>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>

    <!-- Scripts -->

</html>
<?php /**PATH /app/resources/views////layouts/master.blade.php ENDPATH**/ ?>