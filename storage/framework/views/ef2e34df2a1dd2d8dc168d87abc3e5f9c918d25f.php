

<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo web</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum libero, ex distinctio temporibus, quae sequi quod officia eligendi sit voluptatem mollitia quos, excepturi ipsum reiciendis qui quo. Beatae, debitis atque?.</p>
                <a class="btn btn-lg btn-block btn-success" href="<?php echo e(route('contact')); ?>">Contáctame</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="<?php echo e(route('projects.index')); ?>">Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="./img/home.svg" alt="">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SISTEMA21\Desktop\DB-Proyect\portafolio-laravel\resources\views/home.blade.php ENDPATH**/ ?>