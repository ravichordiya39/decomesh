
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'registrationSettingsTab') ? 'active' : ''); ?>"
     id="tab-4">
    <div class="p-a-md"><h5><?php echo __('backend.registrationSettings'); ?></h5></div>

    <div class="p-a-md col-md-12">


        <div class="form-group">
            <label><?php echo e(__('backend.controlPanelPath')); ?> : </label>
            <div class="pull-right text-muted" dir="ltr">
                <?php echo e(env("APP_URL")); ?>/
            </div>
            <?php echo Form::text('backend_path',env("BACKEND_PATH"), array('placeholder' => env("APP_URL").'/admin','class' => 'form-control backend_path', 'dir'=>'ltr')); ?>

        </div>
        <div class="form-group">
            <label><?php echo e(__('backend.permissionForNewUsers')); ?> : </label>
            <select name="permission_group" id="permission_group" class="form-control c-select">
                <?php $__currentLoopData = $PermissionsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    ?>
                    <option
                        value="<?php echo e($PermissionsGroup->id); ?>" <?php echo e(($PermissionsGroup->id == $WebmasterSetting->permission_group) ? "selected='selected'":""); ?>><?php echo $PermissionsGroup->name; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group m-t-3">
            <label><h6><?php echo e(__('backend.allowRegister')); ?></h6></label>
            <div class="radio">

                <div>
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('register_status','0',$WebmasterSetting->register_status ? false : true , array('id' => 'register_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('register_status','1',$WebmasterSetting->register_status ? true : false , array('id' => 'register_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="row m-t-3">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithFacebook')); ?>

                        <a target="_blank"
                           href="https://developers.facebook.com/apps">
                            <i class="material-icons">&#xe8fd;</i>
                        </a>
                    </h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_facebook_status','0',$WebmasterSetting->login_facebook_status ? false : true , array('id' => 'login_facebook_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_facebook_status','1',$WebmasterSetting->login_facebook_status ? true : false , array('id' => 'login_facebook_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="facebook_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_facebook_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginAppID'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_client_id',$WebmasterSetting->login_facebook_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginAppSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_client_secret',$WebmasterSetting->login_facebook_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/facebook/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-2">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithTwitter')); ?>

                        <a target="_blank"
                           href="https://apps.twitter.com">
                            <i class="material-icons">&#xe8fd;</i>
                        </a></h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_twitter_status','0',$WebmasterSetting->login_twitter_status ? false : true , array('id' => 'login_twitter_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_twitter_status','1',$WebmasterSetting->login_twitter_status ? true : false , array('id' => 'login_twitter_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="twitter_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_twitter_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginConsumerAppKey'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_twitter_client_id',$WebmasterSetting->login_twitter_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginConsumerAppSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_twitter_client_secret',$WebmasterSetting->login_twitter_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/twitter/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-2">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithGoogle')); ?>

                        <a target="_blank"
                           href="https://developers.google.com/identity/sign-in/web/sign-in">
                            <i class="material-icons">&#xe8fd;</i>
                        </a></h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_google_status','0',$WebmasterSetting->login_google_status ? false : true , array('id' => 'login_google_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_google_status','1',$WebmasterSetting->login_google_status ? true : false , array('id' => 'login_google_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="google_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_google_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientID'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_google_client_id',$WebmasterSetting->login_google_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_google_client_secret',$WebmasterSetting->login_google_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/google/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-2">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithLinkedIn')); ?>

                        <a target="_blank"
                           href="https://www.linkedin.com/developer/apps/">
                            <i class="material-icons">&#xe8fd;</i>
                        </a></h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_linkedin_status','0',$WebmasterSetting->login_linkedin_status ? false : true , array('id' => 'login_linkedin_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_linkedin_status','1',$WebmasterSetting->login_linkedin_status ? true : false , array('id' => 'login_linkedin_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="linkedin_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_linkedin_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientID'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_linkedin_client_id',$WebmasterSetting->login_linkedin_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_linkedin_client_secret',$WebmasterSetting->login_linkedin_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/linkedin/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-2">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithGitHub')); ?>

                        <a target="_blank"
                           href="https://github.com/settings/developers">
                            <i class="material-icons">&#xe8fd;</i>
                        </a></h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_github_status','0',$WebmasterSetting->login_github_status ? false : true , array('id' => 'login_github_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_github_status','1',$WebmasterSetting->login_github_status ? true : false , array('id' => 'login_github_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="github_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_github_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientID'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_github_client_id',$WebmasterSetting->login_github_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginClientSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_github_client_secret',$WebmasterSetting->login_github_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/github/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-2">
            <div class="form-group col-md-4">
                <label><h6><?php echo e(__('backend.loginWithBitbucket')); ?>

                        <a target="_blank"
                           href="https://bitbucket.org/account">
                            <i class="material-icons">&#xe8fd;</i>
                        </a></h6></label>
                <div class="radio">

                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_bitbucket_status','0',$WebmasterSetting->login_bitbucket_status ? false : true , array('id' => 'login_bitbucket_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('login_bitbucket_status','1',$WebmasterSetting->login_bitbucket_status ? true : false , array('id' => 'login_bitbucket_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="bitbucket_ids_div"
                 style="display: <?php echo e(($WebmasterSetting->login_bitbucket_status==1)?"block":"none"); ?>">
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginKey'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_bitbucket_client_id',$WebmasterSetting->login_bitbucket_client_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.loginSecret'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_bitbucket_client_secret',$WebmasterSetting->login_bitbucket_client_secret, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">
                        <small><?php echo __('backend.callbackURL'); ?></small>
                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('login_facebook_callbackURL',env('APP_URL') . '/oauth/bitbucket/callback', array('class' => 'form-control','readonly' => '','style'=>'font-size:12px', 'dir'=>'ltr')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/login.blade.php ENDPATH**/ ?>