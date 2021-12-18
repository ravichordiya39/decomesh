<?php $__env->startSection('title', "404"); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-body indigo bg-auto w-full">
        <div class="text-center pos-rlt p-y-md">
            <h1 class="text-shadow text-white text-4x">
                <span class="text-2x font-bold block m-t-lg">404</span>
            </h1>
            <p class="h5 m-y-lg text-u-c font-bold"><?php echo e(__('backend.notFound')); ?>.</p>
            <a href="<?php echo e(URL::previous()); ?>" class="md-btn amber-700 md-raised p-x-md">
                <span class="text-white"><?php echo e(__('backend.returnTo')); ?> <i class="material-icons">&#xe5c4;</i></span>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/errors/404.blade.php ENDPATH**/ ?>