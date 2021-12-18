<?php $__env->startSection('title', __('backend.inbox')); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $WebmailsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmailsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- .modal -->
        <div id="mg-<?php echo e($WebmailsGroup->id); ?>" class="modal fade"
             data-backdrop="true">
            <div class="modal-dialog" id="animate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                    </div>
                    <div class="modal-body text-center p-lg">
                        <p>
                            <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                            <br>
                            <strong>[ <?php echo e($WebmailsGroup->name); ?>

                                ]</strong>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn dark-white p-x-md"
                                data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                        <a href="<?php echo e(route("webmailsDestroyGroup",["id"=>$WebmailsGroup->id])); ?>"
                           class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </div>
        <!-- / .modal -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- .modal -->
    <div id="m-all" class="modal fade" data-backdrop="true">
        <div class="modal-dialog" id="animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                </div>
                <div class="modal-body text-center p-lg">
                    <p>
                        <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark-white p-x-md"
                            data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                    <button type="button"
                            onclick="document.getElementById('action').value='delete';document.getElementById('UpdateAll').submit()"
                            class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
    <!-- / .modal -->

    <?php
    $connectEmailAddress = "";
    $connectEmailPassword = "";
    $connectDomainURL = "";
    $nMsgCount = "";
    if (Auth::user()->connect_email != "" && Auth::user()->connect_password) {
        try {
            $connectEmailAddress = Auth::user()->connect_email; // Full email address
            $connectEmailPassword = Auth::user()->connect_password;        // Email password
            $connectDomainURL = substr($connectEmailAddress, strpos($connectEmailAddress, "@") + 1);              // Your websites domain
            $useHTTPS = true;                       // Depending on how your cpanel is set up, you may be using a secure connection and you may not be. Change this from true to false as needed for your situation

            /* BEGIN MESSAGE COUNT CODE */

            $inbox = imap_open('{' . $connectDomainURL . ':143/notls}INBOX', $connectEmailAddress, $connectEmailPassword) or die('');
            $oResult = imap_search($inbox, 'UNSEEN');

            if (empty($oResult))
                $nMsgCount = 0;
            else
                $nMsgCount = count($oResult);

            imap_close($inbox);
        } catch (Exception $e) {

        }
    }
    ?>

    <div class="row-col">
        <div class="col-sm ww-md w-auto-xs light lt bg-auto  hidden-print">
            <div class="padding pos-rlt">
                <div>
                    <button class="btn btn-sm white pull-right hidden-sm-up p-r-3" ui-toggle-class="show"
                            target="#inbox-menu"><i class="fa fa-bars"></i></button>
                    <a href="<?php echo e(route("webmails",["group_id"=>"create"])); ?>"
                       class="btn white w-full"> <i class="material-icons">
                            &#xe145;</i>&nbsp; <?php echo __('backend.compose'); ?></a>
                </div>
                <div class="hidden-xs-down m-t" id="inbox-menu">
                    <?php
                    $cat_id = "3";
                    if (Session::has('WebmailToEdit')) {
                        $group_id = Session::get('WebmailToEdit')->group_id;
                        $cat_id = Session::get('WebmailToEdit')->cat_id;
                    }
                    ?>
                    <div class="nav-active-primary">
                        <div class="nav nav-pills nav-sm">
                            <a class="nav-link <?php echo e((($group_id=="" || $cat_id ==0) && ( ($cat_id !=1  && $cat_id !=2) || (!Session::has('WebmailToEdit'))))? "active":""); ?>"
                               href="<?php echo e(route("webmails")); ?>">
                                <?php echo __('backend.inbox'); ?> <?php echo e(($WaitWebmailsCount >0)? "($WaitWebmailsCount)":""); ?>

                            </a>
                            <a class="nav-link <?php echo e(($group_id=="sent" || $cat_id ==1)? "active":""); ?>"
                               href="<?php echo e(route("webmails",["group_id"=>"sent"])); ?>">
                                <?php echo __('backend.sent'); ?>

                            </a>
                            <a class="nav-link <?php echo e(($group_id=="draft" || $cat_id ==2)? "active":""); ?>"
                               href="<?php echo e(route("webmails",["group_id"=>"draft"])); ?>">
                                <?php echo __('backend.draft'); ?> <?php echo e(($DraftWebmailsCount >0)? "($DraftWebmailsCount)":""); ?>

                            </a>

                        </div>
                    </div>
                    <?php if(count($WebmailsGroups)>0): ?>
                        <br>
                        <div class="m-y text-muted"><?php echo __('backend.labels'); ?></div>
                        <div class="nav-active-white">
                            <ul class="nav nav-pills nav-stacked nav-sm">
                                <li class="nav-item">
                                    <ul class="list" style="list-style: none;">
                                        <?php $__currentLoopData = $WebmailsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmailsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="margin-bottom: 5px"
                                                onmouseover="document.getElementById('grpRow<?php echo e($WebmailsGroup->id); ?>').style.display='block'"
                                                onmouseout="document.getElementById('grpRow<?php echo e($WebmailsGroup->id); ?>').style.display='none'">
                                                <a href="<?php echo e(route("webmails",["group_id"=>$WebmailsGroup->id])); ?>"
                                                    <?php echo ($WebmailsGroup->id == $group_id) ? " style='font-weight: bold;color:#0cc2aa'":""; ?> >
                                                    <i class="fa m-r-sm fa-circle"
                                                       style="color: <?php echo e($WebmailsGroup->color); ?>"></i>
                                                    <?php echo $WebmailsGroup->name; ?>

                                                    <small>(<?php echo e(count($WebmailsGroup->webmails)); ?>)</small>
                                                </a>

                                                <div id="grpRow<?php echo e($WebmailsGroup->id); ?>"
                                                     style="display: none"
                                                     class="pull-right">
                                                    <a class="btn btn-sm success p-a-0 m-a-0"
                                                       title="<?php echo e(__('backend.edit')); ?>"
                                                       href="<?php echo e(route("webmailsEditGroup",["id"=>$WebmailsGroup->id])); ?>">
                                                        <small>&nbsp;<i class="material-icons">&#xe3c9;</i>&nbsp;
                                                        </small>
                                                    </a>
                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                        <button class="btn btn-sm warning p-a-0 m-a-0"
                                                                data-toggle="modal"
                                                                data-target="#mg-<?php echo e($WebmailsGroup->id); ?>"
                                                                ui-toggle-class="bounce"
                                                                title="<?php echo e(__('backend.delete')); ?>"
                                                                ui-target="#animate">
                                                            <small>&nbsp;<i class="material-icons">&#xe872;</i>&nbsp;
                                                            </small>
                                                        </button>
                                                    <?php endif; ?>

                                                </div>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="p-y">
                        <?php if(Session::has('EditWebmailsGroup')): ?>
                            <?php echo e(Form::open(['route'=>['webmailsUpdateGroup',Session::get('EditWebmailsGroup')->id],'method'=>'POST'])); ?>

                            <div class="input-group input-group-sm">
                                <?php echo Form::text('name',Session::get('EditWebmailsGroup')->name, array('placeholder' => __('backend.newGroup'),'class' => 'form-control','required'=>'')); ?>

                                <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo __('backend.save'); ?></button>
              </span>
                            </div>
                            <?php echo e(Form::close()); ?>

                        <?php else: ?>
                            <?php echo e(Form::open(['route'=>['webmailsStoreGroup'],'method'=>'POST'])); ?>

                            <div class="input-group input-group-sm">
                                <?php echo Form::text('name','', array('placeholder' => __('backend.newGroup'),'class' => 'form-control','required'=>'')); ?>

                                <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo __('backend.add'); ?></button>
              </span>
                            </div>
                            <?php echo e(Form::close()); ?>

                        <?php endif; ?>
                    </div>
                    <hr>
                    <?php if( $connectEmailAddress !="" ): ?>
                        <a class="nav-link" target="_blank"
                           href="<?php echo 'http' . ($useHTTPS ? 's' : '') . '://' . $connectDomainURL . ':' . ($useHTTPS ? '2096' : '2095') . '/login/?user=' . $connectEmailAddress . '&pass=' . $connectEmailPassword . '&failurl=http://' . $connectDomainURL; ?>">
                            <?php echo __('backend.openWebmail'); ?>

                            <?php if($nMsgCount >0 ): ?>
                                <span class="label warn m-l-xs"><?php echo e($nMsgCount); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div ui-view class="padding">
                <?php if($group_id!="create" && !Session::has('WebmailToEdit')): ?>
                    <a href="<?php echo e(route("webmails",["group_id"=>"create"])); ?>"
                       class="md-btn md-fab md-fab-bottom-right pos-fix red">
                        <i class="material-icons i-24 text-white">&#xe150;</i>
                    </a>
                <?php endif; ?>
                <div>
                    <?php if(Session::has('doneMessage2')): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <?php echo e(Session::get('doneMessage2')); ?>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('WebmailToEdit')): ?>
                        <?php echo $__env->make('dashboard.inbox.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php elseif($group_id=="create"): ?>
                        <?php echo $__env->make('dashboard.inbox.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>


                        <?php if($Webmails->total() == 0): ?>
                            <div class="row p-a">
                                <div class="col-sm-12">
                                    <div class=" p-a text-center ">
                                        <?php echo e(__('backend.noData')); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($Webmails->total() > 0): ?>

                        <!-- header -->
                            <div class="p-a light dk">
                                <div class="btn-group pull-right">
                                    <?php echo e(Form::open(['route'=>['webmailsSearch'],'method'=>'POST'])); ?>

                                    <div class="input-group input-group-sm">
                                        <?php echo Form::text('q',$search_word, array('placeholder' => __('backend.search')."...",'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                        <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><i class="fa fa-search"></i></button>
              </span>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        <label class="ui-check" style="margin-top: 5px;">
                                            <input id="checkAll" type="checkbox"><i style="background: #fff"></i>
                                        </label>
                                    </div>
                                    <div class="btn-group dropdown">
                                        <button class="btn white btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <span class="dropdown-label"><?php echo e(__('backend.options')); ?></span>
                                            <span class="caret"></span>
                                        </button>

                                        <div class="dropdown-menu text-left text-sm">
                                            <a class="dropdown-item"
                                               onclick="document.getElementById('action').value='read';document.getElementById('UpdateAll').submit()"><i
                                                    class="material-icons">
                                                    &#xe151;</i> <?php echo e(__('backend.makeAsRead')); ?></a>
                                            <a class="dropdown-item"
                                               onclick="document.getElementById('action').value='unread';document.getElementById('UpdateAll').submit()"><i
                                                    class="material-icons">
                                                    &#xe159;</i> <?php echo e(__('backend.makeAsUnread')); ?></a>
                                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#m-all"
                                                   ui-toggle-class="bounce" ui-target="#animate"><i
                                                        class="material-icons">
                                                        &#xe872;</i> <?php echo e(__('backend.delete')); ?></a>
                                            <?php endif; ?>
                                            <?php if(count($WebmailsGroups) >0): ?>
                                                <div class="dropdown-divider"></div>
                                                <?php $__currentLoopData = $WebmailsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmailsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="dropdown-item"
                                                       onclick="document.getElementById('group').value='<?php echo e($WebmailsGroup->id); ?>';document.getElementById('action').value='move';document.getElementById('UpdateAll').submit()"><?php echo e(__('backend.moveTo')); ?>

                                                        <strong
                                                            style="color:<?php echo $WebmailsGroup->color; ?> "><?php echo $WebmailsGroup->name; ?></strong>
                                                    </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- / header -->


                            <?php echo e(Form::open(['route'=>'webmailsUpdateAll','method'=>'post','id'=>'UpdateAll'])); ?>

                        <!-- list -->
                            <input type="hidden" id="action" name="action" value="">
                            <input type="hidden" id="group" name="group" value="">
                            <div class="list white">
                                <?php $__currentLoopData = $Webmails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $s4ds_current_date = date('Y-m-d', $_SERVER['REQUEST_TIME']);
                                    $day_mm = date('Y-m-d', strtotime($Webmail->date));
                                    if ($day_mm == $s4ds_current_date) {
                                        $dtformated = date('h:i A', strtotime($Webmail->date));
                                    } else {
                                        $dtformated = date('d M Y', strtotime($Webmail->date));
                                    }

                                    try {
                                        $groupColor = $Webmail->webmailsGroup->color;
                                        $groupName = $Webmail->webmailsGroup->name;
                                    } catch (Exception $e) {
                                        $groupColor = "";
                                        $groupName = "";
                                    }

                                    $fontStyle = "";
                                    $unreadIcon = "";
                                    $unreadbg = "";
                                    $unreadText = "";
                                    if ($Webmail->status == 0) {
                                        $fontStyle = "_700";
                                        $unreadIcon = "<i class=\"fa fa-envelope\"></i>";
                                        $unreadbg = "style=\"background: $groupColor \"";
                                        $unreadText = "style=\"color: $groupColor \"";
                                    }
                                    ?>
                                    <div class="list-item b-l b-l-2x" style="border-color: <?php echo e($groupColor); ?>">
                                        <div class="list-left">
                                            <label class="ui-check m-a-0">
                                                <input type="checkbox" name="ids[]" value="<?php echo e($Webmail->id); ?>"><i
                                                    class="dark-white"></i>
                                            </label>
                                            <?php if(count($Webmail->files)): ?>
                                                <i class="fa fa-paperclip m-l-sm text-muted text-xs" <?php echo $unreadText; ?>></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="list-body" style="cursor: pointer;"
                                             onclick="location.href='<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>'">
                                            <div class="pull-right text-muted text-xs">
                                                <span
                                                    class="hidden-xs  <?php echo e($fontStyle); ?>" <?php echo $unreadText; ?>><?php echo e($dtformated); ?></span>

                                            </div>
                                            <div>
                                                <a href="<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>"
                                                   class="_500 <?php echo e($fontStyle); ?>" <?php echo $unreadText; ?>>
                                                    <?php if($group_id=="sent" || $group_id=="draft"): ?>
                                                        <?php echo e($Webmail->title); ?>

                                                    <?php else: ?>
                                                        <?php echo e($Webmail->from_name); ?>

                                                    <?php endif; ?>
                                                </a>
                                                <?php if($groupName !=""): ?>
                                                    <span class="label m-l-sm text-u-c" <?php echo $unreadbg; ?>>
                                      <?php echo e($groupName); ?>

                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-ellipsis text-muted text-sm ">
                                                <a href="<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>"
                                                   class=" <?php echo e($fontStyle); ?>" <?php echo $unreadText; ?>>
                                                    <?php echo $unreadIcon; ?>

                                                    <?php if($group_id=="sent" || $group_id=="draft"): ?>
                                                        <?php echo e($Webmail->to_email); ?>

                                                    <?php else: ?>
                                                        <?php echo e($Webmail->title); ?>

                                                    <?php endif; ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $Webmails->links(); ?>

                            </div>
                            <?php echo e(Form::close()); ?>

                        <?php endif; ?>
                    <!-- / list -->
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <style>
        .modal-backdrop {
            z-index: 1;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/inbox/list.blade.php ENDPATH**/ ?>