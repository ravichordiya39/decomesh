
<!-- column -->
<div class="col-sm-6 col-md-7">
    <div class="row-col">
        <div class="p-a-sm">
            <h6 class="m-b-0 m-t-sm"><i class="material-icons">
                    &#xe02e;</i> <?php echo e(__('backend.newContacts')); ?>

            </h6>
        </div>
        <div class="row-row">
            <div class="row-body">
                <div class="row-inner">
                    <div class="padding p-y-sm ">
                        <?php echo e(Form::open(['route'=>['contactsStore'],'method'=>'POST', 'files' => true ])); ?>

                        <div class="row-col h-auto m-b-1">
                            <div class="col-sm-3">
                                <div class="avatar w-64 inline">
                                    <img id="photo_preview"
                                         src="<?php echo e(asset('uploads/contacts/profile.jpg')); ?>"
                                         style="opacity: 0.2">
                                </div>
                                <div class="form-file inline">
                                    <input id="photo_file" type="file" name="file" accept="image/*">
                                    <button class="btn white btn-sm">
                                        <small>
                                            <small><?php echo e(__('backend.selectFile')); ?> ..</small>
                                        </small>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-9 v-m h2 _300">
                                <div class="p-l-xs">
                                    <?php echo Form::text('first_name','', array('placeholder' =>__('backend.firstName'),'class' => 'form-control w-sm inline','id'=>'first_name','required'=>'')); ?>

                                    <?php echo Form::text('last_name','', array('placeholder' =>__('backend.lastName'),'class' => 'form-control w-sm inline','id'=>'last_name','required'=>'')); ?>


                                    <?php if(count($ContactsGroups) >0): ?>
                                        <select name="group_id"
                                                class="form-control c-select w-sm inline"
                                                style="vertical-align: bottom;">
                                            <option value="">- - <?php echo __('backend.group'); ?> - -
                                            </option>
                                            <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($Group->id); ?>" <?php echo e(($Group->id == $group_id) ? "selected='selected'":""); ?>><?php echo e($Group->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- fields -->
                        <div class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo e(__('backend.contactPhone')); ?></label>
                                <div class="col-sm-9">
                                    <?php echo Form::text('phone','', array('placeholder' =>'','class' => 'form-control','id'=>'phone')); ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo e(__('backend.contactEmail')); ?></label>
                                <div class="col-sm-9">
                                    <?php echo Form::email('email','', array('placeholder' =>'','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo e(__('backend.companyName')); ?></label>
                                <div class="col-sm-9">
                                    <?php echo Form::text('company','', array('placeholder' =>'','class' => 'form-control','id'=>'company')); ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo __('backend.country'); ?></label>
                                <div class="col-sm-9">
                                    <select name="country_id" id="country_id"
                                            class="form-control select2 select2-hidden-accessible" ui-jp="select2"
                                            ui-options="{theme: 'bootstrap'}">
                                        <option value="">- - <?php echo __('backend.country'); ?> - -
                                        </option>
                                        <?php
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        ?>
                                        <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($country->$title_var != "") {
                                                $title = $country->$title_var;
                                            } else {
                                                $title = $country->$title_var2;
                                            }
                                            ?>
                                            <option value="<?php echo e($country->id); ?>"><?php echo e($title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo e(__('backend.city')); ?></label>
                                <div class="col-sm-9">
                                    <?php echo Form::text('city','', array('placeholder' =>'','class' => 'form-control','id'=>'city')); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"><?php echo e(__('backend.notes')); ?></label>
                                <div class="col-sm-9">
                                    <?php echo Form::textarea('notes','', array('placeholder' => '','class' => 'form-control','rows'=>'2')); ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary"><i
                                            class="material-icons">
                                            &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                                </div>
                            </div>

                        </div>
                        <!-- / fields -->
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /column -->
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/contacts/create.blade.php ENDPATH**/ ?>