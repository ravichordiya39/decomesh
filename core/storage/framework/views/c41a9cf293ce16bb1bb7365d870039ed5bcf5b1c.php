
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'cssTab') ? 'active' : ''); ?>"
     id="tab-7">
    <div class="p-a-md"><h5><i class="material-icons">&#xe86f;</i>
            &nbsp; <?php echo __('backend.customCSS'); ?></h5></div>
    <div class="p-a-md col-md-12">
        <div class="form-group">
            <?php echo Form::textarea('css_code',$Setting->css, array('placeholder' => "",'class' => 'form-control','rows'=>'17')); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/css.blade.php ENDPATH**/ ?>