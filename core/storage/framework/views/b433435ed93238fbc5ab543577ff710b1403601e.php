<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'contactsTab') ? 'active' : ''); ?>"
     id="tab-2">
    <div class="p-a-md"><h5><i class="material-icons">&#xe0ba;</i>
            &nbsp; <?php echo __('backend.siteContactsSettings'); ?></h5></div>
    <div class="p-a-md col-md-12">
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo __('backend.contactAddress'); ?>

                </label> <?php echo @Helper::languageName($ActiveLanguage); ?>

                <?php echo Form::text('contact_t1_'.@$ActiveLanguage->code,$Setting->{'contact_t1_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction)); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <label><?php echo __('backend.contactPhone'); ?></label>
            <?php echo Form::text('contact_t3',$Setting->contact_t3, array('placeholder' => __('backend.contactPhone'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
        <div class="form-group">
            <label><?php echo __('backend.contactFax'); ?></label>
            <?php echo Form::text('contact_t4',$Setting->contact_t4, array('placeholder' => __('backend.contactFax'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
        <div class="form-group">
            <label><?php echo __('backend.contactMobile'); ?></label>
            <?php echo Form::text('contact_t5',$Setting->contact_t5, array('placeholder' => __('backend.contactMobile'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
        <div class="form-group">
            <label><?php echo __('backend.contactEmail'); ?></label>
            <?php echo Form::text('contact_t6',$Setting->contact_t6, array('placeholder' => __('backend.contactEmail'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo __('backend.worksTime'); ?>

                </label> <?php echo @Helper::languageName($ActiveLanguage); ?>

                <?php echo Form::text('contact_t7_'.@$ActiveLanguage->code,$Setting->{'contact_t7_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction)); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/contacts.blade.php ENDPATH**/ ?>