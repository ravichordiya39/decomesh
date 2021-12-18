<script type="text/javascript">
    var public_lang = "<?php echo e(@Helper::currentLanguage()->code); ?>";
    var public_folder_path = "<?php echo e(asset('')); ?>";
    var first_day_of_week = "<?php echo e(env("FIRST_DAY_OF_WEEK",0)); ?>";

</script>
<?php echo $__env->yieldPushContent('before-scripts'); ?>
<!-- jQuery -->
<script src="<?php echo e(asset('assets/dashboard/js/jquery/dist/jquery.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('assets/dashboard/js/tether/dist/js/tether.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/bootstrap/dist/js/bootstrap.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/moment/moment.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/moment/moment.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/moment/locale/'.@Helper::currentLanguage()->code.'.js')); ?>" defer></script>
<!-- core -->
<script src="<?php echo e(asset('assets/dashboard/js/underscore/underscore-min.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/jQuery-Storage-API/jquery.storageapi.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/pace/pace.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/config.lazyload.js')); ?>" defer></script>

<script src="<?php echo e(asset('assets/dashboard/js/scripts/palette.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-load.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-jp.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-include.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-device.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-form.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-nav.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-screenfull.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-scroll-to.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/dashboard/js/scripts/ui-toggle-class.js')); ?>" defer></script>


<script src="<?php echo e(asset('assets/dashboard/js/scripts/app.js')); ?>" defer></script>

<?php echo Helper::SaveVisitorInfo("Dashboard &raquo; ".trim($__env->yieldContent('title'))); ?>

<?php echo $__env->yieldPushContent('after-scripts'); ?>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/layouts/foot.blade.php ENDPATH**/ ?>