<?php $__env->startSection('title',  __('backend.generalSettings')); ?>
<?php $__env->startPush("after-styles"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/js/sweetalert/sweetalert.css')); ?>">
    <link href="<?php echo e(asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        .modal.in .modal-dialog{
            margin-top: 70px;
        }
        .modal-backdrop{
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;
    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
    ?>
    <div class="padding">
        <div class="row-col">
            <div class="col-sm-3 col-lg-2">
                <div class="p-y">
                    <div class="nav-active-border left b-primary">
                        <ul class="nav nav-sm">

                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'frontSettingsTab' || Session::get('active_tab') =="") ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-5"
                                   onclick="document.getElementById('active_tab').value='frontSettingsTab'">
                                    &nbsp; <?php echo __('backend.frontSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'languageSettingsTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-2"
                                   onclick="document.getElementById('active_tab').value='languageSettingsTab'">
                                    &nbsp; <?php echo __('backend.languageSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'SEOSettingTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-3"
                                   onclick="document.getElementById('active_tab').value='SEOSettingTab'">
                                    &nbsp; <?php echo __('backend.seoTabTitle'); ?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'registrationSettingsTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-4"
                                   onclick="document.getElementById('active_tab').value='registrationSettingsTab'">
                                    &nbsp; <?php echo __('backend.registrationSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'mailSettingsTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-7"
                                   onclick="document.getElementById('active_tab').value='mailSettingsTab'">
                                    &nbsp; <?php echo __('backend.mailSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'googleRecaptchaTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-8"
                                   onclick="document.getElementById('active_tab').value='googleRecaptchaTab'">
                                    &nbsp; <?php echo __('backend.googleRecaptcha'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'googleTagsTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-9"
                                   onclick="document.getElementById('active_tab').value='googleTagsTab'">
                                    &nbsp; <?php echo __('backend.googleTags'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'googleMapsTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-10"
                                   onclick="document.getElementById('active_tab').value='googleMapsTab'">
                                    &nbsp; <?php echo __('backend.googleMaps'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'analyticsTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-11"
                                   onclick="document.getElementById('active_tab').value='analyticsTab'">
                                    &nbsp; <?php echo __('backend.analyticsSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'appsSettingsTab') ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-1"
                                   onclick="document.getElementById('active_tab').value='appsSettingsTab'">
                                    &nbsp; <?php echo __('backend.appsSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'restfulAPITab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-6"
                                   onclick="document.getElementById('active_tab').value='restfulAPITab'">
                                    &nbsp; <?php echo __('backend.restfulAPI'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-10 light lt">

                <?php echo e(Form::open(['route'=>['webmasterSettingsUpdate'],'method'=>'POST'])); ?>

                <input type="hidden" id="active_tab" name="active_tab" value="<?php echo e(Session::get('active_tab')); ?>"/>
                <div class="tab-content pos-rlt">

                    <button type="submit" id="save-settings-btn"
                            class="btn primary m-a pull-right"> <i class="material-icons">&#xe31b;</i> <?php echo e(__('backend.update')); ?></button>


                    <?php echo $__env->make('dashboard.webmaster.settings.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.api', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.mail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.maps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.webmaster.settings.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <?php echo e(Form::close()); ?>

                <?php echo $__env->make('dashboard.webmaster.settings.languages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script src="<?php echo e(asset('assets/dashboard/js/sweetalert/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset("assets/dashboard/js/summernote/dist/summernote.js")); ?>"></script>
    <script type="text/javascript">
        $("input:radio[name=api_status]").click(function () {
            if ($(this).val() == 1) {
                $("#api_key_div").css("display", "block");
            } else {
                $("#api_key_div").css("display", "none");
            }
        });
        $("input:radio[name=geoip_status]").click(function () {
            if ($(this).val() == 1) {
                $("#geoip_service_info").css("display", "block");
            } else {
                $("#geoip_service_info").css("display", "none");
            }
        });

        $('#mail_driver').on('change', function () {
            if ($(this).val() == "sendmail" || $(this).val()=="") {
                $("#smtp_check").hide();

                $("#mail_host").val('');
                $("#mail_port").val('');
                $("#mail_username").val('');
                $("#mail_encryption").val('');
                $("#mail_password").val('');

                $("#mail_host_div").hide();
                $("#mail_port_div").hide();
                $("#mail_username_div").hide();
                $("#mail_password_div").hide();
                $("#mail_encryption_div").hide();
                $("#send_test").show();
                $("#mail_from_div").show();
                if($(this).val()==""){
                    $("#send_test").hide();
                    $("#mail_from_div").hide();
                }

            } else {
                $("#mail_host_div").show();
                $("#mail_port_div").show();
                $("#mail_username_div").show();
                $("#mail_password_div").show();
                $("#mail_encryption_div").show();
                $("#smtp_check").show();
                $("#send_test").show();
                $("#mail_from_div").show();
            }
            if ($(this).val() != "smtp") {
                $("#smtp_check").hide();
            }else{
                $("#smtp_check").show();
            }
        });

        function generate_key() {
            if (!confirm('<?php echo __('backend.APIKeyConfirm'); ?>')) {
                return false;
            } else {
                $("#api_key").val(Math.floor(Math.random() * 1000000000000000));
            }
        }


        $(document).ready(function () {
            $("#nocaptcha_status2").click(function () {
                $("#nocaptcha_div").css("display", "none");
            });
            $("#nocaptcha_status1").click(function () {
                $("#nocaptcha_div").css("display", "block");
            });

            $("#google_tags_status2").click(function () {
                $("#google_tags_div").css("display", "none");
            });
            $("#google_tags_status1").click(function () {
                $("#google_tags_div").css("display", "block");
            });

            $("#google_maps_status2").click(function () {
                $("#google_maps_div").css("display", "none");
                $("#google_maps_key").val('');
            });
            $("#google_maps_status1").click(function () {
                $("#google_maps_div").css("display", "block");
            });

            $("#login_facebook_status2").click(function () {
                $("#facebook_ids_div").css("display", "none");
            });
            $("#login_facebook_status1").click(function () {
                $("#facebook_ids_div").css("display", "block");
            });

            $("#login_twitter_status2").click(function () {
                $("#twitter_ids_div").css("display", "none");
            });
            $("#login_twitter_status1").click(function () {
                $("#twitter_ids_div").css("display", "block");
            });

            $("#login_google_status2").click(function () {
                $("#google_ids_div").css("display", "none");
            });
            $("#login_google_status1").click(function () {
                $("#google_ids_div").css("display", "block");
            });

            $("#login_linkedin_status2").click(function () {
                $("#linkedin_ids_div").css("display", "none");
            });
            $("#login_linkedin_status1").click(function () {
                $("#linkedin_ids_div").css("display", "block");
            });

            $("#login_github_status2").click(function () {
                $("#github_ids_div").css("display", "none");
            });
            $("#login_github_status1").click(function () {
                $("#github_ids_div").css("display", "block");
            });

            $("#login_bitbucket_status2").click(function () {
                $("#bitbucket_ids_div").css("display", "none");
            });
            $("#login_bitbucket_status1").click(function () {
                $("#bitbucket_ids_div").css("display", "block");
            });

            document.getElementById('timezone').value = '<?php echo $WebmasterSetting->timezone; ?>';

        });
        $(function(){
            $(".backend_path").keypress(function(event){
                var ew = event.which;
                if(ew == 32)
                    return true;
                if(48 <= ew && ew <= 57)
                    return true;
                if(65 <= ew && ew <= 90)
                    return true;
                if(97 <= ew && ew <= 122)
                    return true;
                return false;
            });
        });

        $('#smtp_check').click(function () {
            if ($("#mail_host").val() != "" && $("#mail_port").val() != "") {
                $('#smtp_check').html("<img src=\"<?php echo e(asset('assets/dashboard/images/loading.gif')); ?>\" style=\"height: 20px\"/> <?php echo __('backend.smtpCheck'); ?>");
                $('#smtp_check').prop('disabled', true);
                $('#mail_save_btn').prop('disabled', true);

                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo route("mailSMTPCheck"); ?>",
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        "mail_driver": $("#mail_driver").val(),
                        "mail_host": $("#mail_host").val(),
                        "mail_port": $("#mail_port").val(),
                        "mail_username": $("#mail_username").val(),
                        "mail_password": $("#mail_password").val(),
                        "mail_encryption": $("#mail_encryption").val(),
                    },
                    success: function (result) {
                        var obj_result = jQuery.parseJSON(result);
                        if (obj_result.stat == 'success') {
                            swal({
                                title: "<span class='text-success'><?php echo e(__("backend.smtpCheckSuccess")); ?></span>",
                                text: "<?php echo e(__("backend.smtpCheckSuccessMsg")); ?>",
                                html: true,
                                type: "success",
                                confirmButtonText: "<?php echo e(__("backend.close")); ?>",
                                confirmButtonColor: "#acacac",
                                timer: 5000,
                            });
                        } else {
                            swal({
                                title: "<span class='text-danger'><?php echo e(__("backend.smtpCheck")); ?></span>",
                                text: "<span class='text-danger' dir='ltr'>" + obj_result.error + "</span>",
                                html: true,
                                type: "error",
                                confirmButtonText: "<?php echo e(__("backend.close")); ?>",
                                confirmButtonColor: "#acacac",
                            });
                        }
                        $('#smtp_check').html("<i class=\"fa fa-bolt\"></i> <?php echo __('backend.smtpCheck'); ?>");
                        $('#smtp_check').prop('disabled', false);
                        $('#mail_save_btn').prop('disabled', false);
                    }
                });
            }
        });
        $('#send_test').click(function () {
            swal({
                title: "<?php echo e(__("backend.sendTestMail")); ?>",
                text: "<?php echo e(__("backend.sendTestMailTo")); ?>",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "email@site.com",
                inputValue: $("#to_email").val(),
                confirmButtonText: "<?php echo e(__("backend.continue")); ?>",
                cancelButtonText: "<?php echo e(__("backend.cancel")); ?>",
                showLoaderOnConfirm: true,
            }, function (inputValue) {
                if (inputValue === false) return false;
                if (inputValue === "") {
                    swal.showInputError("<?php echo e(__("backend.sendTestMailTo")); ?>");
                    return false
                }
                if (!validateEmail(inputValue)) {
                    swal.showInputError("<?php echo e(__("backend.sendTestMailError")); ?>");
                    return false
                }
                $("#to_email").val(inputValue);
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo route("mailTest"); ?>",
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        "mail_driver": $("#mail_driver").val(),
                        "mail_host": $("#mail_host").val(),
                        "mail_port": $("#mail_port").val(),
                        "mail_username": $("#mail_username").val(),
                        "mail_password": $("#mail_password").val(),
                        "mail_encryption": $("#mail_encryption").val(),
                        "mail_no_replay": $("#mail_no_replay").val(),
                        "mail_test": $("#to_email").val(),
                    },
                    success: function (result) {
                        var obj_result = jQuery.parseJSON(result);
                        if (obj_result.stat == 'success') {
                            swal({
                                title: "<span class='text-success'><?php echo e(__("backend.mailTestSuccess")); ?></span>",
                                text: inputValue,
                                html: true,
                                type: "success",
                                confirmButtonText: "<?php echo e(__("backend.close")); ?>",
                                confirmButtonColor: "#acacac",
                                timer: 5000,
                            });
                        } else {
                            swal({
                                title: "<span class='text-danger'><?php echo e(__("backend.mailTestFailed")); ?></span>",
                                text: inputValue,
                                html: true,
                                type: "error",
                                confirmButtonText: "<?php echo e(__("backend.close")); ?>",
                                confirmButtonColor: "#acacac",
                            });
                        }
                    }
                });
            });
        });
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function sendFile(file, editor, welEditable, lang) {
            data = new FormData();
            data.append("file", file);
            data.append("_token", "<?php echo e(csrf_token()); ?>");
            $.ajax({
                data: data,
                type: 'POST',
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                    return myXhr;
                },
                url: "<?php echo e(route("topicsPhotosUpload")); ?>",
                cache: false,
                contentType: false,
                processData: false,
                success: function (url) {
                    var image = $('<img>').attr('src', '<?php echo e(asset("uploads/topics/")); ?>/' + url);
                    <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ActiveLanguage->box_status): ?>
                    if (lang == "<?php echo e($ActiveLanguage->code); ?>") {
                        $('.summernote_<?php echo e($ActiveLanguage->code); ?>').summernote("insertNode", image[0]);
                    }
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                }
            });
        }

        // update progress bar
        function progressHandlingFunction(e) {
            if (e.lengthComputable) {
                $('progress').attr({value: e.loaded, max: e.total});
                // reset progress on complete
                if (e.loaded == e.total) {
                    $('progress').attr('value', '0.0');
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/home.blade.php ENDPATH**/ ?>