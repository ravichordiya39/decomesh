<!-- column -->
<div class="col-sm-2 col-md-2 w w-auto-sm b-r">
    <div class="row-col">
        <div class="row-row">
            <div class=" hover">
                <div class="row-inner"><br>
                    <div class="nav nav-pills nav-stacked m-t-sm">
                        <div class="row-row">
                            <div class="col-sm-9 p-a-0">
                                <br>
                                <ul class="list">
                                    <?php
                                    if (Session::has('ContactToEdit')) {
                                        $group_id = Session::get('ContactToEdit')->group_id;
                                    }
                                    ?>
                                    <li class="marginBottom5"><a
                                            href="<?php echo e(route('contacts')); ?>" <?php echo ($group_id=="") ? " style='font-weight: bold;color:#0cc2aa'":""; ?>> <?php echo e(__('backend.allContacts')); ?>


                                            <small>(<?php echo e($AllContactsCount); ?>)</small>

                                        </a>
                                    </li>

                                    <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ContactsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="marginBottom5"
                                            onmouseover="document.getElementById('grpRow<?php echo e($ContactsGroup->id); ?>').style.display='block'"
                                            onmouseout="document.getElementById('grpRow<?php echo e($ContactsGroup->id); ?>').style.display='none'">
                                            <a href="<?php echo e(route("contacts",["group_id"=>$ContactsGroup->id])); ?>" <?php echo ($ContactsGroup->id == $group_id) ? " style='font-weight: bold;color:#0cc2aa'":""; ?> > <?php echo $ContactsGroup->name; ?>


                                                <small>(<?php echo e(count($ContactsGroup->contacts)); ?>)</small>

                                            </a>

                                            <div id="grpRow<?php echo e($ContactsGroup->id); ?>"
                                                 class="pull-right displayNone">
                                                <a class="btn btn-sm success p-a-0 m-a-0"
                                                   title="<?php echo e(__('backend.edit')); ?>"
                                                   href="<?php echo e(route("contactsEditGroup",["id"=>$ContactsGroup->id])); ?>">
                                                    <small>&nbsp;<i class="material-icons">&#xe3c9;</i>&nbsp;
                                                    </small>
                                                </a>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <button class="btn btn-sm warning p-a-0 m-a-0"
                                                            data-toggle="modal"
                                                            data-target="#mg-<?php echo e($ContactsGroup->id); ?>"
                                                            ui-toggle-class="bounce"
                                                            title="<?php echo e(__('backend.delete')); ?>"
                                                            ui-target="#animate">
                                                        <small>&nbsp;<i class="material-icons">
                                                                &#xe872;</i>&nbsp;
                                                        </small>
                                                    </button>

                                                <?php endif; ?>
                                            </div>
                                            <!-- .modal -->
                                            <div id="mg-<?php echo e($ContactsGroup->id); ?>" class="modal fade"
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
                                                                <strong>[ <?php echo e($ContactsGroup->name); ?>

                                                                    ]</strong>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                                            <a href="<?php echo e(route("contactsDestroyGroup",["id"=>$ContactsGroup->id])); ?>"
                                                               class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                            <!-- / .modal -->
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <li class="marginBottom5"><a
                                            <?php echo ($group_id=="wait") ? " style='font-weight: bold;color:#0cc2aa'":""; ?>

                                            href="<?php echo e(route("contacts",["group_id"=>"wait"])); ?>"> <?php echo e(__('backend.waitActivation')); ?>


                                            <small>(<?php echo e($WaitContactsCount); ?>)</small>

                                        </a></li>
                                    <li>
                                        <a <?php echo ($group_id=="blocked") ? " style='font-weight: bold;color:#0cc2aa'":""; ?> href="<?php echo e(route("contacts",["group_id"=>"blocked"])); ?>"> <?php echo e(__('backend.blockedContacts')); ?>


                                            <small>( <?php echo e($BlockedContactsCount); ?>)</small>

                                        </a></li>
                                </ul>
                                <div class="p-y">
                                    <?php if(Session::has('EditContactsGroup')): ?>
                                        <?php echo e(Form::open(['route'=>['contactsUpdateGroup',Session::get('EditContactsGroup')->id],'method'=>'POST'])); ?>

                                        <div class="input-group input-group-sm">
                                            <?php echo Form::text('name',Session::get('EditContactsGroup')->name, array('placeholder' => __('backend.newGroup'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                            <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo __('backend.save'); ?></button>
              </span>
                                        </div>
                                        <?php echo e(Form::close()); ?>

                                    <?php else: ?>
                                        <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                                            <?php echo e(Form::open(['route'=>['contactsStoreGroup'],'method'=>'POST'])); ?>

                                            <div class="input-group input-group-sm">
                                                <?php echo Form::text('name','', array('placeholder' => __('backend.newGroup'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                                <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo __('backend.add'); ?></button>
              </span>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo e(Form::close()); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('contacts')); ?>"
                           class="btn btn-sm white btn-addon primary m-b-1"><i class="material-icons">
                                &#xe02e;</i> <?php echo e(__('backend.newContacts')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>


        </div>
    </div>
</div>
<!-- /column -->
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/contacts/groups.blade.php ENDPATH**/ ?>