<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'appsSettingsTab') ? 'active' : ''); ?>"
     id="tab-1">
    <div class="p-a-md"><h5><?php echo __('backend.appsSettings'); ?></h5></div>
    <div class="p-a-md col-md-12">

        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('analytics_status','1',$WebmasterSetting->analytics_status, array('id' => 'analytics_status')); ?>

                <i class="dark-white"></i><label
                    for="analytics_status"><?php echo e(__('backend.visitorsAnalytics')); ?></label>
            </label>
        </div>

        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('inbox_status','1',$WebmasterSetting->inbox_status, array('id' => 'inbox_status')); ?>

                <i class="dark-white"></i><label
                    for="inbox_status"><?php echo e(__('backend.siteInbox')); ?></label>
            </label>
        </div>

        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('calendar_status','1',$WebmasterSetting->calendar_status, array('id' => 'calendar_status')); ?>

                <i class="dark-white"></i><label
                    for="calendar_status"><?php echo e(__('backend.calendar')); ?></label>
            </label>
        </div>

        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('banners_status','1',$WebmasterSetting->banners_status, array('id' => 'banners_status')); ?>

                <i class="dark-white"></i><label
                    for="banners_status"><?php echo e(__('backend.adsBanners')); ?></label>
            </label>
        </div>


        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('newsletter_status','1',$WebmasterSetting->newsletter_status, array('id' => 'newsletter_status')); ?>

                <i class="dark-white"></i><label
                    for="newsletter_status"><?php echo e(__('backend.newsletter')); ?></label>
            </label>
        </div>

        <div class="checkbox">
            <label class="ui-check">
                <?php echo Form::checkbox('settings_status','1',$WebmasterSetting->settings_status, array('id' => 'settings_status')); ?>

                <i class="dark-white"></i><label
                    for="settings_status"><?php echo e(__('backend.generalSettings')); ?></label>
            </label>
        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/apps.blade.php ENDPATH**/ ?>