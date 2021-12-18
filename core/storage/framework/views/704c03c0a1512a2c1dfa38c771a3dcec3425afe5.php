<div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
        <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
            <i class="fa fa-gear"></i>
        </a>
        <div class="box-header">
            <h2><?php echo e(__('backend.themeSwitcher')); ?></h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body p-t-xs">
            <p class="hidden-md-down">
                <label class="md-check m-y-xs" data-target="folded">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded"><?php echo e(__('backend.foldedAside')); ?></span>
                </label>
                <label class="md-check m-y-xs" data-target="boxed">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded"><?php echo e(__('backend.boxedLayout')); ?></span>
                </label>
            </p>


            <p class="m-b-xs"><?php echo e(__('backend.themes')); ?>:</p>
            <div data-target="bg" class="text-u-c text-center _600 clearfix">
                <label class="p-a col-xs-6 light pointer m-a-0">
                    <input type="radio" name="theme" value="" hidden>
                    <?php echo e(__('backend.themes1')); ?>

                </label>
                <label class="p-a col-xs-6 grey pointer m-a-0">
                    <input type="radio" name="theme" value="grey" hidden>
                    <?php echo e(__('backend.themes2')); ?>

                </label>
                <label class="p-a col-xs-6 dark pointer m-a-0">
                    <input type="radio" name="theme" value="dark" hidden>
                    <?php echo e(__('backend.themes3')); ?>

                </label>
                <label class="p-a col-xs-6 black pointer m-a-0">
                    <input type="radio" name="theme" value="black" hidden>
                    <?php echo e(__('backend.themes4')); ?>

                </label>
            </div>
            <br>

            <?php if(count(Helper::languagesList()) >0): ?>
                <p class="m-b-xs"><?php echo e(__('backend.languages')); ?>:</p>
                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a href="<?php echo e(route("localeChange",$ActiveLanguage->code)); ?>"
                           class="btn btn-xs light btn-block m-b-xs text-left p-x-1">
                            <?php if($ActiveLanguage->icon !=""): ?>
                                <img
                                    src="<?php echo e(asset('assets/dashboard/images/flags/'.$ActiveLanguage->icon.".svg")); ?>"
                                    alt="" class="w-20">
                            <?php endif; ?>
                            <?php echo e($ActiveLanguage->title); ?>

                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="m-t-1">
                <a href="<?php echo e(route('cacheClear')); ?>" class="btn btn-sm dark btn-block"
                   onclick="return confirm('<?php echo e(__('backend.cashClearMsg')); ?>')"><small><?php echo __('backend.cashClear'); ?></small></a>

            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/layouts/settings.blade.php ENDPATH**/ ?>