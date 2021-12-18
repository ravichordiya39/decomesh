<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'mailSettingsTab') ? 'active' : ''); ?>"
     id="tab-7">
    <div class="p-a-md"><h5><?php echo __('backend.mailSettings'); ?></h5></div>

    <div class="p-a-md col-md-12 b-b m-b-2">
        <div class="row">
            <div class="col-sm-5 form-group">
                <label><?php echo __('backend.mailDriver'); ?></label>
                <select name="mail_driver" id="mail_driver" class="form-control c-select">
                    <option
                        value="" <?php echo e((env("MAIL_DRIVER")== "") ? "selected='selected'":""); ?>>
                        None
                    </option>
                    <option
                        value="sendmail" <?php echo e((env("MAIL_DRIVER")== "sendmail") ? "selected='selected'":""); ?>>
                        sendmail - PHP mail()
                    </option>
                    <option
                        value="smtp" <?php echo e((env("MAIL_DRIVER")== "smtp") ? "selected='selected'":""); ?>>
                        SMTP ( Recommended )
                    </option>
                    <option
                        value="mailgun" <?php echo e((env("MAIL_DRIVER")== "mailgun") ? "selected='selected'":""); ?>>
                        Mailgun
                    </option>
                    <option
                        value="ses" <?php echo e((env("MAIL_DRIVER")== "ses") ? "selected='selected'":""); ?>>
                        Amazon SES
                    </option>
                    <option
                        value="postmark" <?php echo e((env("MAIL_DRIVER")== "postmark") ? "selected='selected'":""); ?>>
                        Postmark
                    </option>
                </select>
            </div>
            <div class="col-sm-5 form-group <?php echo e((env("MAIL_DRIVER") != "sendmail" && env("MAIL_DRIVER") != "")?"":"displayNone"); ?>"
                 id="mail_host_div">
                <label><?php echo __('backend.mailHost'); ?></label>
                <?php echo Form::text('mail_host',env("MAIL_HOST"), array('id' => 'mail_host','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>
            <div class="col-sm-2 form-group <?php echo e((env("MAIL_DRIVER") != "sendmail" && env("MAIL_DRIVER") != "")?"":"displayNone"); ?>"
                 id="mail_port_div">
                <label><?php echo __('backend.mailPort'); ?></label>
                <?php echo Form::text('mail_port',env("MAIL_PORT"), array('id' => 'mail_port','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>

            <div class="col-sm-5 form-group <?php echo e((env("MAIL_DRIVER") != "sendmail" && env("MAIL_DRIVER") != "")?"":"displayNone"); ?>"
                 id="mail_username_div">
                <label><?php echo __('backend.mailUsername'); ?></label>
                <?php echo Form::text('mail_username',env("MAIL_USERNAME"), array('id' => 'mail_username','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>
            <div class="col-sm-7 form-group <?php echo e((env("MAIL_DRIVER") != "sendmail" && env("MAIL_DRIVER") != "")?"":"displayNone"); ?>"
                 id="mail_password_div">
                <label><?php echo __('backend.mailPassword'); ?></label>
                <?php echo Form::text('mail_password',env("MAIL_PASSWORD"), array('id' => 'mail_password','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>

            <div class="col-sm-5 form-group <?php echo e((env("MAIL_DRIVER") != "sendmail" && env("MAIL_DRIVER") != "")?"":"displayNone"); ?>"
                 id="mail_encryption_div">
                <label><?php echo __('backend.mailEncryption'); ?></label>
                <select name="mail_encryption" id="mail_encryption" class="form-control c-select">
                    <option
                        value="" <?php echo e((env("MAIL_ENCRYPTION") == "") ? "selected='selected'":""); ?>>
                        none
                    </option>
                    <option
                        value="ssl" <?php echo e((env("MAIL_ENCRYPTION") == "ssl") ? "selected='selected'":""); ?>>
                        ssl
                    </option>
                    <option
                        value="tls" <?php echo e((env("MAIL_ENCRYPTION") == "tls") ? "selected='selected'":""); ?>>
                        tls
                    </option>
                </select>
            </div>
            <div class="col-sm-7 form-group <?php echo e((env("MAIL_DRIVER") == "")?"displayNone":""); ?>" id="mail_from_div">
                <label><?php echo __('backend.mailNoReplay'); ?></label>
                <?php echo Form::text('mail_no_replay',env("MAIL_FROM_ADDRESS"), array('id' => 'mail_no_replay','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>
        </div>
        <button id="smtp_check" type="button"
                class="btn pull-right btn-sm info <?php echo e((env("MAIL_DRIVER") == "smtp")?"":"displayNone"); ?>">
            <i class="fa fa-bolt"></i> &nbsp;<?php echo e(__("backend.smtpCheck")); ?>

        </button>

        <button id="send_test" type="button" class="btn btn-sm info <?php echo e((env("MAIL_DRIVER") == "")?"displayNone":""); ?>">
            <i class="fa fa-envelope"></i> &nbsp;<?php echo e(__("backend.sendTestMail")); ?>

        </button>
        <input type="hidden" name="mail_test" id="to_email" value="">
    </div>

    <div class="p-a-md"><h5><?php echo __('backend.messageTemplate'); ?></h5></div>
    <div class="p-x-md col-md-12">
        <div class="form-group">
            <span class="pull-right">{title}</span>
            <label><?php echo __('backend.messageTitle'); ?></label>
            <?php echo Form::text('mail_title',$WebmasterSetting->mail_title, array('class' => 'form-control')); ?>

        </div>
        <div class="form-group">
            <span class="pull-right">{details}</span>
            <label><?php echo __('backend.messageDetails'); ?></label>
            <div class="box p-a-xs">
                <?php echo Form::textarea('mail_template',$WebmasterSetting->mail_template, array('ui-jp'=>'summernote','class' => 'form-control summernote_'.@Helper::currentLanguage()->code,'ui-options'=>'{height: 200,callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable,"'.@Helper::currentLanguage()->code.'");
                }
            }}')); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/mail.blade.php ENDPATH**/ ?>