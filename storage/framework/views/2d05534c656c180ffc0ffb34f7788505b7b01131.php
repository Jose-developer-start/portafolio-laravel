<nav class="navbar navbar-expand-md bg-white navbar-light shadow-sm">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
        <?php echo e(config('app.name')); ?>

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav">
            <li class="nav-item <?php echo e(setActive('home')); ?>"><a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
            <li class="nav-item <?php echo e(setActive('about')); ?>" ><a class="nav-link" href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About'); ?></a></li>
            <li class="nav-item <?php echo e(setActive('projects.*')); ?>" ><a class="nav-link" href="<?php echo e(route('projects.index')); ?>"><?php echo app('translator')->get('projects'); ?></a></li>
            <li class="nav-item <?php echo e(setActive('contact')); ?>" ><a class="nav-link" href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item <?php echo e(setActive('login')); ?>" ><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('Login'); ?></a></li>
            <li class="nav-item <?php echo e(setActive('register')); ?>" ><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get('Registrarse'); ?></a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar sesión</a></li>  
            <?php endif; ?>
            
        </ul>
    </div>
</nav>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
    <?php echo csrf_field(); ?>
</form><?php /**PATH C:\Users\SISTEMA21\Desktop\DB-Proyect\portafolio-laravel\resources\views/partials/nav.blade.php ENDPATH**/ ?>