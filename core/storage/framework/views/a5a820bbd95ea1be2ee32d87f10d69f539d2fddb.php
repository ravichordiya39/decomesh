<?php $__env->startSection('title',  __('backend.generalSettings')); ?>
<?php $__env->startPush("after-styles"); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('assets/dashboard/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>"
          type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="row-col">
            <div class="col-sm-3 col-lg-2">
                <div class="p-y">
                    <div class="nav-active-border left b-primary">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'infoTab' || Session::get('active_tab') =="") ? 'active' : ''); ?>"
                                   href data-toggle="tab" data-target="#tab-1"
                                   onclick="document.getElementById('active_tab').value='infoTab'"><i
                                        class="material-icons">&#xe30c;</i>
                                    &nbsp; <?php echo __('backend.siteInfoSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'contactsTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-2"
                                   onclick="document.getElementById('active_tab').value='contactsTab'"><i
                                        class="material-icons">&#xe0ba;</i>
                                    &nbsp; <?php echo __('backend.siteContactsSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'socialTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-3"
                                   onclick="document.getElementById('active_tab').value='socialTab'"><i
                                        class="material-icons">&#xe80d;</i>
                                    &nbsp; <?php echo __('backend.siteSocialSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'styleTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-5"
                                   onclick="document.getElementById('active_tab').value='styleTab'"><i
                                        class="material-icons">&#xe41d;</i>
                                    &nbsp; <?php echo __('backend.styleSettings'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'cssTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-7"
                                   onclick="document.getElementById('active_tab').value='cssTab'"><i
                                        class="material-icons">&#xe86f;</i>
                                    &nbsp; <?php echo __('backend.customCSS'); ?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'emailTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-6"
                                   onclick="document.getElementById('active_tab').value='emailTab'"><i
                                        class="material-icons">&#xe0be;</i>
                                    &nbsp; <?php echo __('backend.emailNotifications'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link block <?php echo e(( Session::get('active_tab') == 'statusTab') ? 'active' : ''); ?>"
                                   href
                                   data-toggle="tab" data-target="#tab-4"
                                   onclick="document.getElementById('active_tab').value='statusTab'"><i
                                        class="material-icons">&#xe8c6;</i>
                                    &nbsp; <?php echo __('backend.siteStatusSettings'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-10 light lt">

                <?php echo e(Form::open(['route'=>['settingsUpdateSiteInfo'],'method'=>'POST', 'files' => true ])); ?>

                <input type="hidden" id="active_tab" name="active_tab" value="<?php echo e(Session::get('active_tab')); ?>"/>
                <div class="tab-content pos-rlt">
                    <button type="submit" class="btn primary m-a pull-right"><i class="material-icons">&#xe31b;</i> <?php echo e(__('backend.update')); ?></button>
                    <?php echo $__env->make('dashboard.settings.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.contacts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.settings.site_status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#site_status1").click(function () {
                $("#close_msg_div").css("display", "none");
            });
            $("#site_status2").click(function () {
                $("#close_msg_div").css("display", "block");
            });

            $("#style_type1").click(function () {
                $("#bgtyps").css("display", "none");
            });
            $("#style_type2").click(function () {
                $("#bgtyps").css("display", "inline-block");
            });

            $("#style_bg_type1").click(function () {
                $("#bgtimg").css("display", "none");
                $("#bgtptr").css("display", "none");
                $("#bgtclr").css("display", "inline-block");
            });
            $("#style_bg_type2").click(function () {
                $("#bgtimg").css("display", "none");
                $("#bgtclr").css("display", "none");
                $("#bgtptr").css("display", "inline-block");
            });
            $("#style_bg_type3").click(function () {
                $("#bgtptr").css("display", "none");
                $("#bgtclr").css("display", "none");
                $("#bgtimg").css("display", "inline-block");
            });
        });

    </script>
    <script src="<?php echo e(asset('assets/dashboard/js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
    <script>
        $(function () {
            $('#cp1').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
            $('#cp2').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
            $('#cp3').colorpicker({
                colorSelectors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                }
            });
        });

        function update_restcolor() {
            document.getElementById("style_color1").value = '#0cbaa4';
            $("#cpbg i").css("background-color", "#0cbaa4");
        }

        function update_restcolor2() {
            document.getElementById("style_color2").value = '#2e3e4e';
            $("#cpbg2 i").css("background-color", "#2e3e4e");
        }
    </script>
    <script type="text/javascript">
        function readURL(input, prv) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#' + prv).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $("#style_logo_<?php echo e(@$ActiveLanguage->code); ?>").change(function () {
            readURL(this, "style_logo_<?php echo e(@$ActiveLanguage->code); ?>_prv");
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/settings.blade.php ENDPATH**/ ?>