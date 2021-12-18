
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'googleRecaptchaTab') ? 'active' : ''); ?>"
     id="tab-8">
    <div class="p-a-md"><h5><?php echo __('backend.googleRecaptcha'); ?></h5></div>

    <div class="p-a-md col-md-12">
        <div class="form-group">
            <label><?php echo e(__('backend.googleRecaptchaStatus')); ?> : </label>
            <div class="radio">
                <div>
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('nocaptcha_status','0',$WebmasterSetting->nocaptcha_status ? false : true , array('id' => 'nocaptcha_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('nocaptcha_status','1',$WebmasterSetting->nocaptcha_status ? true : false , array('id' => 'nocaptcha_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div
            id="nocaptcha_div" <?php echo ( !$WebmasterSetting->nocaptcha_status) ? "style='display:none'":""; ?>>

            <div class="form-group">
                <label><?php echo __('backend.googleRecaptchaSitekey'); ?></label>
                <?php echo Form::text('nocaptcha_sitekey',$WebmasterSetting->nocaptcha_sitekey, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>

            <div class="form-group">
                <label><?php echo __('backend.googleRecaptchaSecret'); ?></label>
                <?php echo Form::text('nocaptcha_secret',$WebmasterSetting->nocaptcha_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>
        </div>
        <a href="https://www.google.com/recaptcha"
           style="text-decoration: underline" target="_blank"><small><i
                    class="material-icons">&#xe8fd;</i> Google reCAPTCHA</small></a>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/captcha.blade.php ENDPATH**/ ?>