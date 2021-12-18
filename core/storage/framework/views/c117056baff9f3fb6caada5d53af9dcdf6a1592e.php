<!DOCTYPE html>
<html lang="<?php echo e(@Helper::currentLanguage()->code); ?>" dir="<?php echo e(@Helper::currentLanguage()->direction); ?>">
<head>
    <?php echo $__env->make('dashboard.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<div class="app" id="app">
    <?php echo $__env->make('dashboard.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="content" class="app-content box-shadow-z0" role="main">
        <?php echo $__env->make('dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div ui-view class="app-body" id="view">
            <?php echo $__env->make('dashboard.layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <?php echo $__env->make('dashboard.layouts.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->make('dashboard.layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/layouts/master.blade.php ENDPATH**/ ?>