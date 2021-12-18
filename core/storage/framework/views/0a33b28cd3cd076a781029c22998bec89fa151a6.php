<?php $__env->startSection('title', __('backend.newsletter')); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="app-body-inner">
            <div class="row-col row-col-xs">
            <?php echo $__env->make('dashboard.contacts.groups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- column -->
                <div class="col-sm-4 col-md-3 bg b-r">
                    <div class="row-col">
                        <div class="p-a-xs b-b">
                            <?php echo e(Form::open(['route'=>['contactsSearch'],'method'=>'POST'])); ?>

                            <div class="input-group">
                                <input type="text" style="width: 85%" name="q" required value="<?php echo e($search_word); ?>"
                                       class="form-control no-border no-bg"
                                       placeholder="<?php echo e(__('backend.searchAllContacts')); ?>">

                                <button type="submit" style="padding-top: 10px;"
                                        class="input-group-addon no-border no-shadow no-bg pull-left"><i
                                        class="fa fa-search"></i>
                                </button>
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                        <div class="row-row">
                            <div class="row-body scrollable hover">
                                <div class="row-inner">
                                    <div class="list inset">

                                        <?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php
                                            $active_cls = "";
                                            ?>
                                            <?php if(Session::has('ContactToEdit')): ?>
                                                <?php if(Session::get('ContactToEdit')->id == $Contact->id): ?>
                                                    <?php
                                                    $active_cls = "primary";
                                                    ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <div class="list-item pointer <?php echo e($active_cls); ?>"
                                                 onclick="javascript: location.href='<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>'">
                                                <div class="list-left">
                    <span class="w-40 avatar">
                        <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>">
                            <?php if($Contact->photo!=""): ?>
                                <img src="<?php echo e(asset('uploads/contacts/'.$Contact->photo)); ?>" class="img-circle">
                            <?php else: ?>
                                <img src="<?php echo e(asset('uploads/contacts/profile.jpg')); ?>" class="img-circle"
                                     style="opacity: 0.5">
                            <?php endif; ?>
                        </a>
                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>">
                                                        <?php if($Contact->first_name !="" || $Contact->last_name !=""): ?>
                                                            <?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?>

                                                        <?php else: ?>
                                                            <?php echo e(substr($Contact->email,0, strpos($Contact->email, "@"))); ?>

                                                        <?php endif; ?>
                                                        <small class="block"><i
                                                                class="fa fa-phone m-r-sm text-muted"></i>
                                                            <span dir="ltr">
                                                                <?php if($Contact->phone !=""): ?>
                                                                    <?php echo e($Contact->phone); ?>

                                                                <?php else: ?>
                                                                    <?php echo e(substr($Contact->email, strpos($Contact->email, "@"))); ?>

                                                                <?php endif; ?>
                                                            </span>
                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($Contacts->total() > env('BACKEND_PAGINATION')): ?>
                            <div class="p-a b-t text-center">
                                <?php echo $Contacts->links(); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /column -->

                <?php if(Session::has('ContactToEdit')): ?>
                    <?php echo $__env->make('dashboard.contacts.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('dashboard.contacts.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <style>
        .app-footer {
            display: none;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script type="text/javascript">
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photo_file").change(function () {
            readURL(this);
            $('#photo_preview').css("opacity", 1);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/contacts/list.blade.php ENDPATH**/ ?>