<div id="add_language" class="modal fade" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="material-icons">&#xe145;</i> <?php echo e(__('backend.addNewLanguage')); ?>

                </h5>
            </div>
            <?php echo e(Form::open(['route'=>['webmasterLanguageStore'],'method'=>'POST'])); ?>

            <div class="modal-body p-lg">
                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"><?php echo e(__('backend.languageCode')); ?></label>
                    <div class="col-sm-9">
                        <?php echo Form::text('code','', array('placeholder' => 'en','class' => 'form-control', 'required'=>'', 'minlength'=>'2', 'maxlength'=>'2', 'onkeyup'=>"this.value=this.value.replace(/[^a-z]/g,'');", 'style'=>'text-transform: lowercase')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"><?php echo e(__('backend.languageTitle')); ?></label>
                    <div class="col-sm-9">
                        <?php echo Form::text('title','', array('placeholder' => 'English','class' => 'form-control', 'required'=>'')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"><?php echo e(__('backend.languageDirection')); ?></label>
                    <div class="col-sm-9">
                        <select class="form-control c-select" name="direction" required>
                            <option value="ltr">Left To Right</option>
                            <option value="rtl">Right To Left</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"><?php echo e(__('backend.languageInputFields')); ?></label>
                    <div class="col-sm-9">
                        <select class="form-control c-select" name="fields" required>
                            <option value="1"><?php echo e(__('backend.active')); ?></option>
                            <option value="0"><?php echo e(__('backend.notActive')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"
                           class="col-sm-3 form-control-label"><?php echo e(__('backend.languageIcon')); ?></label>
                    <div class="col-sm-9">
                        <select name="icon"
                                class="form-control select2 select2-hidden-accessible select2-allow-clear"
                                ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                            <option value="">- - <?php echo __('backend.none'); ?> - -
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
                                <option value="<?php echo e($country->code); ?>"
                                        data-data='{"image": "<?php echo e(asset('assets/dashboard/images/flags/'.mb_strtolower($country->code).'.svg')); ?>","code":"+<?php echo e($country->tel); ?>","search-text":"<?php echo e($country->{"title_" . __('backend.boxCode')}); ?>  +<?php echo e($country->tel); ?>"}'><?php echo e($title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark-white p-x-md"
                        data-dismiss="modal"><?php echo __('backend.cancel'); ?></button>
                <button type="submit" class="btn primary p-x-md"><i
                        class="material-icons">
                        &#xe31b;</i> <?php echo __('backend.add'); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div><!-- /.modal-content -->
    </div>
</div>

<?php $__currentLoopData = $Languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
        <div id="edit_language_<?php echo e($Language->id); ?>" class="modal fade" data-backdrop="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.updateLanguage')); ?>

                        </h5>
                    </div>
                    <?php echo e(Form::open(['route'=>['webmasterLanguageUpdate'],'method'=>'POST'])); ?>

                    <div class="modal-body p-lg">
                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.languageCode')); ?></label>
                            <div class="col-sm-9">
                                <?php echo Form::text('code',$Language->code, array('placeholder' => 'en','class' => 'form-control', 'readonly'=>'', 'minlength'=>'2', 'maxlength'=>'2', 'onkeyup'=>"this.value=this.value.replace(/[^a-z]/g,'');", 'style'=>'text-transform: lowercase')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.languageTitle')); ?></label>
                            <div class="col-sm-9">
                                <?php echo Form::text('title',$Language->title, array('placeholder' => 'English','class' => 'form-control', 'required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.languageDirection')); ?></label>
                            <div class="col-sm-9">
                                <select class="form-control c-select" name="direction" required>
                                    <option
                                        value="ltr" <?php echo e(($Language->direction=="ltr")?"selected='selected'":""); ?>>
                                        Left To Right
                                    </option>
                                    <option
                                        value="rtl" <?php echo e(($Language->direction=="rtl")?"selected='selected'":""); ?>>
                                        Right To Left
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.languageInputFields')); ?></label>
                            <div class="col-sm-9">
                                <select class="form-control c-select" name="fields" required>
                                    <option
                                        value="1" <?php echo e(($Language->box_status=="1")?"selected='selected'":""); ?>><?php echo e(__('backend.active')); ?></option>
                                    <option
                                        value="0" <?php echo e(($Language->box_status=="0")?"selected='selected'":""); ?>><?php echo e(__('backend.notActive')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.languageIcon')); ?></label>
                            <div class="col-sm-9">
                                <select name="icon"
                                        class="form-control select2 select2-hidden-accessible select2-allow-clear"
                                        ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <option value="">- - <?php echo __('backend.none'); ?> - -
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
                                        <option
                                            value="<?php echo e($country->code); ?>" <?php echo e(($Language->icon==trim(strtolower($country->code)))?"selected='selected'":""); ?>><?php echo e($title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-3 form-control-label"><?php echo e(__('backend.status')); ?></label>
                            <div class="col-sm-9">
                                <select class="form-control c-select" name="status" required>
                                    <option
                                        value="1" <?php echo e(($Language->status=="1")?"selected='selected'":""); ?>><?php echo e(__('backend.active')); ?></option>
                                    <option
                                        value="0" <?php echo e(($Language->status=="0")?"selected='selected'":""); ?>><?php echo e(__('backend.notActive')); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?php echo e($Language->id); ?>">
                        <button type="button" class="btn dark-white p-x-md"
                                data-dismiss="modal"><?php echo __('backend.cancel'); ?></button>
                        <button type="submit" class="btn primary p-x-md"><i
                                class="material-icons">
                                &#xe31b;</i> <?php echo __('backend.save'); ?></button>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div><!-- /.modal-content -->
            </div>
        </div>
    <?php endif; ?>
    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
        <div id="delete_language_<?php echo e($Language->id); ?>" class="modal fade" data-backdrop="true">
            <div class="modal-dialog" id="animate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                    </div>
                    <div class="modal-body text-center p-lg">
                        <p>
                            <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                            <br>
                            <strong>[ <?php echo e($Language->title); ?> ]</strong>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark-white p-x-md"
                                data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                        <a href="<?php echo e(route("webmasterLanguageDestroy",["id"=>$Language->id])); ?>"
                           class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/languages.blade.php ENDPATH**/ ?>