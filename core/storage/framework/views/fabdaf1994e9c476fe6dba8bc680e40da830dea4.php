<?php $__env->startSection('title', __('backend.usersPermissions')); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.editUser')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a href=""><?php echo e(__('backend.settings')); ?></a> /
                    <a href=""><?php echo e(__('backend.usersPermissions')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("users")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['usersUpdate',$Users->id],'method'=>'POST', 'files' => true])); ?>


                <div class="form-group row">
                    <label for="name"
                           class="col-sm-2 form-control-label"><?php echo __('backend.fullName'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('name',$Users->name, array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-sm-2 form-control-label"><?php echo __('backend.loginEmail'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::email('email',$Users->email, array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password"
                           class="col-sm-2 form-control-label"><?php echo __('backend.loginPassword'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('password','', array('placeholder' => '','class' => 'form-control','id'=>'password')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="photo_file"
                           class="col-sm-2 form-control-label"><?php echo __('backend.topicPhoto'); ?></label>
                    <div class="col-sm-10">
                        <?php if($Users->photo!=""): ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="user_photo" class="col-sm-4 box p-a-xs">
                                        <a target="_blank"
                                           href="<?php echo e(asset('uploads/users/'.$Users->photo)); ?>"><img
                                                src="<?php echo e(asset('uploads/users/'.$Users->photo)); ?>"
                                                class="img-responsive">
                                            <?php echo e($Users->photo); ?>

                                        </a>
                                        <br>
                                        <a onclick="document.getElementById('user_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                           class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                    </div>
                                    <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                        <a onclick="document.getElementById('user_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                            <i class="material-icons">&#xe166;</i> <?php echo __('backend.undoDelete'); ?>

                                        </a>
                                    </div>

                                    <?php echo Form::hidden('photo_delete','0', array('id'=>'photo_delete')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php echo Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')); ?>

                        <small>
                            <i class="material-icons">&#xe8fd;</i>
                            <?php echo __('backend.imagesTypes'); ?>

                        </small>
                    </div>
                </div>

                <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                    <div class="form-group row">
                        <label for="permissions1"
                               class="col-sm-2 form-control-label"><?php echo __('backend.Permission'); ?></label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <select name="permissions_id" id="permissions_id" required
                                        class="form-control c-select">
                                    <option value="">- - <?php echo __('backend.selectPermissionsType'); ?> - -</option>
                                    <?php $__currentLoopData = $Permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($Permission->id); ?>" <?php echo ($Users->permissions_id==$Permission->id) ? "selected='selected'":""; ?>><?php echo e($Permission->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="link_status"
                               class="col-sm-2 form-control-label"><?php echo __('backend.status'); ?></label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('status','1',($Users->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(__('backend.active')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('status','0',($Users->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(__('backend.notActive')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <?php echo Form::hidden('permissions_id',$Users->permissions_id); ?>

                    <?php echo Form::hidden('status',$Users->status); ?>


                <?php endif; ?>


                <div class="form-group row m-t-md">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                        <a href="<?php echo e(route("users")); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/users/edit.blade.php ENDPATH**/ ?>