<div
    class="tab-pane <?php echo e(( Session::get('active_tab') == 'infoTab' || Session::get('active_tab') =="") ? 'active' : ''); ?>"
    id="tab-1">
    <div class="p-a-md"><h5><i class="material-icons">&#xe30c;</i>
            &nbsp; <?php echo __('backend.siteInfoSettings'); ?></h5></div>
    <div class="p-a-md col-md-12">
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo __('backend.websiteTitle'); ?>

                </label> <?php echo @Helper::languageName($ActiveLanguage); ?>

                <?php echo Form::text('site_title_'.@$ActiveLanguage->code,$Setting->{'site_title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction)); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo __('backend.metaDescription'); ?>

                </label> <?php echo @Helper::languageName($ActiveLanguage); ?>

                <?php echo Form::textarea('site_desc_'.@$ActiveLanguage->code,$Setting->{'site_desc_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'2')); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo __('backend.metaKeywords'); ?>

                </label> <?php echo @Helper::languageName($ActiveLanguage); ?>

                <?php echo Form::textarea('site_keywords_'.@$ActiveLanguage->code,$Setting->{'site_keywords_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'2')); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <label><?php echo __('backend.websiteUrl'); ?></label>
            <?php echo Form::text('site_url',$Setting->site_url, array('placeholder' => 'http//:www.sitename.com/','class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
    </div>

</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/general.blade.php ENDPATH**/ ?>