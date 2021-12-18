<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>

<?php $__env->startSection('title', __('backend.sectionsOf')." ".$WebmasterSectionTitle); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(__('backend.sectionsOf')); ?>  <?php echo $WebmasterSectionTitle; ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a><?php echo $WebmasterSectionTitle; ?></a> /
                    <a><?php echo e(__('backend.sectionsOf')); ?>  <?php echo $WebmasterSectionTitle; ?></a>
                </small>
            </div>
            <?php if($Sections->total() > 0): ?>
                <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                    <div class="row p-a">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary" href="<?php echo e(route("categoriesCreate",$WebmasterSection->id)); ?>">
                                <i class="material-icons">&#xe02e;</i>
                                &nbsp; <?php echo e(__('backend.categoryNew')); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($Sections->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center ">
                            <?php echo e(__('backend.noData')); ?>

                            <br>
                            <br>
                            <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                                <a class="btn btn-fw primary"
                                   href="<?php echo e(route("categoriesCreate",$WebmasterSection->id)); ?>">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; <?php echo e(__('backend.sectionNew')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($Sections->total() > 0): ?>
                <?php echo e(Form::open(['route'=>['categoriesUpdateAll',$WebmasterSection->id],'method'=>'post'])); ?>

                <div class="table-responsive">
                    <table class="table table-bordered m-a-0">
                        <thead class="dker">
                        <tr>
                            <th class="dker width20">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(__('backend.categoryName')); ?></th>
                            <th class="text-center" style="width:100px;"><?php echo e(__('backend.contents')); ?></th>
                            <th class="text-center" style="width:100px;"><?php echo e(__('backend.visits')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title_var = "title_" . @Helper::currentLanguage()->code;
                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                        ?>
                        <?php $__currentLoopData = $Sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($Section->$title_var != "") {
                                $title = $Section->$title_var;
                            } else {
                                $title = $Section->$title_var2;
                            }
                            try {
                                $ccount = @$category_and_topics_count[$Section->id];
                            } catch (Exception $e) {
                                $ccount = 0;
                            }
                            ?>
                            <tr>
                                <td class="dker"><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($Section->id); ?>"><i
                                            class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$Section->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td class="h6">
                                    <?php if($Section->photo !=""): ?>
                                        <div class="pull-right">
                                            <img src="<?php echo e(asset('uploads/sections/'.$Section->photo)); ?>"
                                                 style="height: 30px" alt="<?php echo e($title); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::text('row_no_'.$Section->id,$Section->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                    <?php if($Section->icon !=""): ?>
                                        <i class="fa <?php echo $Section->icon; ?> "></i>
                                    <?php endif; ?>
                                    <?php echo e($title); ?></td>
                                <td class="text-center">
                                    <?php echo $ccount; ?>

                                </td>
                                <td class="text-center">
                                    <?php echo $Section->visits; ?>

                                </td>

                                <td class="text-center">
                                    <i class="fa <?php echo e(($Section->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm info"
                                       href="<?php echo e(Helper::categoryURL($Section->id)); ?>"
                                       data-toggle="tooltip" data-original-title="<?php echo e(__('backend.viewDetails')); ?>"
                                       target="_blank">
                                        <i class="material-icons">&#xe8f4;</i>
                                    </a>

                                    <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                        <a class="btn btn-sm success"
                                           href="<?php echo e(route("categoriesEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Section->id])); ?>"
                                           data-toggle="tooltip" data-original-title="<?php echo e(__('backend.edit')); ?>">
                                            <i class="material-icons">&#xe3c9;</i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <button class="btn btn-sm warning" type="button"
                                                onclick="DeleteCategory('<?php echo e($Section->id); ?>')" data-toggle="tooltip"
                                                data-original-title="<?php echo e(__('backend.delete')); ?>">
                                            <i class="material-icons">&#xe872;</i>
                                        </button>
                                    <?php endif; ?>

                                </td>
                            </tr>

                            <?php $__currentLoopData = $Section->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($subSection->$title_var != "") {
                                    $title = $subSection->$title_var;
                                } else {
                                    $title = $subSection->$title_var2;
                                }
                                ?>
                                <tr>
                                    <td class="dker"><label class="ui-check m-a-0">
                                            <input type="checkbox" name="ids[]" value="<?php echo e($subSection->id); ?>"><i
                                                class="dark-white"></i>
                                            <?php echo Form::hidden('row_ids[]',$subSection->id, array('class' => 'form-control row_no')); ?>

                                        </label>
                                    </td>
                                    <td class="h6">
                                        <?php if($subSection->photo !=""): ?>
                                            <div class="pull-right">
                                                <img src="<?php echo e(asset('uploads/sections/'.$subSection->photo)); ?>"
                                                     style="height: 30px" alt="<?php echo e($title); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <img
                                            src="<?php echo e(asset('assets/dashboard/images/treepart_'.@Helper::currentLanguage()->direction.'.png')); ?>"
                                            class="submenu_tree">
                                        <?php echo Form::text('row_no_'.$subSection->id,$subSection->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                        <?php if($subSection->icon !=""): ?>
                                            <i class="fa <?php echo $subSection->icon; ?> "></i>
                                        <?php endif; ?>
                                        <?php echo $title; ?></td>
                                    <td class="text-center">
                                        <?php echo $subSection->visits; ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo $subSection->visits; ?>

                                    </td>
                                    <td class="text-center">
                                        <i class="fa <?php echo e(($subSection->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                    </td>

                                    <td class="text-center">
                                        <a class="btn btn-sm info"
                                           href="<?php echo e(Helper::categoryURL($subSection->id)); ?>"
                                           data-toggle="tooltip" data-original-title="<?php echo e(__('backend.viewDetails')); ?>"
                                           target="_blank">
                                            <i class="material-icons">&#xe8f4;</i>
                                        </a>

                                        <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                            <a class="btn btn-sm success"
                                               href="<?php echo e(route("categoriesEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$subSection->id])); ?>"
                                               data-toggle="tooltip" data-original-title="<?php echo e(__('backend.edit')); ?>">
                                                <i class="material-icons">&#xe3c9;</i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                            <button class="btn btn-sm warning" type="button"
                                                    onclick="DeleteCategory('<?php echo e($subSection->id); ?>')" data-toggle="tooltip"
                                                    data-original-title="<?php echo e(__('backend.delete')); ?>">
                                                <i class="material-icons">&#xe872;</i>
                                            </button>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                                <!-- .modal -->
                                <div id="m-<?php echo e($subSection->id); ?>" class="modal fade" data-backdrop="true">
                                    <div class="modal-dialog" id="animate">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                            </div>
                                            <div class="modal-body text-center p-lg">
                                                <p>
                                                    <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                    <br>
                                                    <strong>[ <?php echo e($title); ?> ]</strong>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark-white p-x-md"
                                                        data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                                <a href="<?php echo e(route("categoriesDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$subSection->id])); ?>"
                                                   class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- / .modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                </div>
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
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
                                            <button type="submit"
                                                    class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->

                            <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                <select name="action" id="action" class="form-control c-select w-sm inline v-middle"
                                        required>
                                    <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                    <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
                                    <option value="activate"><?php echo e(__('backend.activeSelected')); ?></option>
                                    <option value="block"><?php echo e(__('backend.blockSelected')); ?></option>
                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <option value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                                    <?php endif; ?>
                                </select>
                                <button type="submit" id="submit_all"
                                        class="btn white"><?php echo e(__('backend.apply')); ?></button>
                                <button id="submit_show_msg" class="btn white" data-toggle="modal"
                                        style="display: none"
                                        data-target="#m-all" ui-toggle-class="bounce"
                                        ui-target="#animate"><?php echo e(__('backend.apply')); ?>

                                </button>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3 text-center">
                            <small
                                class="text-muted inline m-t-sm m-b-sm"><?php echo e(__('backend.showing')); ?> <?php echo e($Sections->firstItem()); ?>

                                -<?php echo e($Sections->lastItem()); ?> <?php echo e(__('backend.of')); ?>

                                <strong><?php echo e($Sections->total()); ?></strong> <?php echo e(__('backend.records')); ?></small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $Sections->links(); ?>

                        </div>
                    </div>
                </footer>
                <?php echo e(Form::close()); ?>

            <?php endif; ?>
        </div>
    </div>
    <!-- .modal -->
    <div id="delete-category" class="modal fade" data-backdrop="true">
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
                    <a type="button" id="category_delete_btn" href=""
                       class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
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

        function DeleteCategory(id) {
            $("#category_delete_btn").attr("href", '<?php echo e(route("categoriesDestroy",["webmasterId"=>$WebmasterSection->id])); ?>/' + id);
            $("#delete-category").modal("show");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/categories/list.blade.php ENDPATH**/ ?>