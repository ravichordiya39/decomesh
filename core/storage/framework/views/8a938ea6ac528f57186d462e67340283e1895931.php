<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'emailTab') ? 'active' : ''); ?>"
     id="tab-6">
    <div class="p-a-md"><h5><i class="material-icons">&#xe0be;</i>
            &nbsp; <?php echo __('backend.emailNotifications'); ?></h5></div>
    <div class="p-a-md col-md-12">
        <div class="form-group">
            <label><?php echo __('backend.websiteNotificationEmail'); ?></label>
            <?php echo Form::text('site_webmails',$Setting->site_webmails, array('placeholder' => 'email@sitename.com','class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.websiteNotificationEmail1')); ?> : </label>
            <div class="radio">
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_messages_status','1',$Setting->notify_messages_status ? true : false , array('id' => 'notify_messages_status1','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.yes')); ?>

                </label>
                &nbsp; &nbsp;
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_messages_status','0',$Setting->notify_messages_status ? false : true , array('id' => 'notify_messages_status2','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.no')); ?>

                </label>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.websiteNotificationEmail2')); ?> : </label>
            <div class="radio">
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_comments_status','1',$Setting->notify_comments_status ? true : false , array('id' => 'notify_comments_status1','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.yes')); ?>

                </label>
                &nbsp; &nbsp;
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_comments_status','0',$Setting->notify_comments_status ? false : true , array('id' => 'notify_comments_status2','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.no')); ?>

                </label>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.websiteNotificationEmail3')); ?> : </label>
            <div class="radio">
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_orders_status','1',$Setting->notify_orders_status ? true : false , array('id' => 'notify_orders_status1','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.yes')); ?>

                </label>
                &nbsp; &nbsp;
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_orders_status','0',$Setting->notify_orders_status ? false : true , array('id' => 'notify_orders_status2','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.no')); ?>

                </label>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.websiteNotificationEmail4')); ?> : </label>
            <div class="radio">
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_table_status','1',$Setting->notify_table_status ? true : false , array('id' => 'notify_table_status1','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.yes')); ?>

                </label>
                &nbsp; &nbsp;
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_table_status','0',$Setting->notify_table_status ? false : true , array('id' => 'notify_table_status2','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.no')); ?>

                </label>
            </div>
        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.websiteNotificationEmail5')); ?> : </label>
            <div class="radio">
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_private_status','1',$Setting->notify_private_status ? true : false , array('id' => 'notify_private_status1','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.yes')); ?>

                </label>
                &nbsp; &nbsp;
                <label class="ui-check ui-check-md">
                    <?php echo Form::radio('notify_private_status','0',$Setting->notify_private_status ? false : true , array('id' => 'notify_private_status2','class'=>'has-value')); ?>

                    <i class="dark-white"></i>
                    <?php echo e(__('backend.no')); ?>

                </label>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/notifications.blade.php ENDPATH**/ ?>