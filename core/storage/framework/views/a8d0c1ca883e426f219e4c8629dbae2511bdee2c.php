
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'socialTab') ? 'active' : ''); ?>"
     id="tab-3">
    <div class="p-a-md"><h5><i class="material-icons">&#xe80d;</i>
            &nbsp; <?php echo __('backend.siteSocialSettings'); ?></h5></div>
    <div class="p-a-md col-md-12">

        <div class="form-group">
            <label><i class="fa fa-facebook"></i> &nbsp; <?php echo __('backend.facebook'); ?></label>
            <?php echo Form::text('social_link1',$Setting->social_link1, array('placeholder' => __('backend.facebook'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-twitter"></i> &nbsp; <?php echo __('backend.twitter'); ?></label>
            <?php echo Form::text('social_link2',$Setting->social_link2, array('placeholder' => __('backend.twitter'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-google-plus"></i> &nbsp; <?php echo __('backend.google'); ?>

            </label>
            <?php echo Form::text('social_link3',$Setting->social_link3, array('placeholder' => __('backend.google'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-linkedin"></i> &nbsp; <?php echo __('backend.linkedin'); ?></label>
            <?php echo Form::text('social_link4',$Setting->social_link4, array('placeholder' => __('backend.linkedin'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-youtube-play"></i> &nbsp; <?php echo __('backend.youtube'); ?>

            </label>
            <?php echo Form::text('social_link5',$Setting->social_link5, array('placeholder' => __('backend.youtube'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-instagram"></i> &nbsp; <?php echo __('backend.instagram'); ?>

            </label>
            <?php echo Form::text('social_link6',$Setting->social_link6, array('placeholder' => __('backend.instagram'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-pinterest"></i> &nbsp; <?php echo __('backend.pinterest'); ?>

            </label>
            <?php echo Form::text('social_link7',$Setting->social_link7, array('placeholder' => __('backend.pinterest'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-tumblr"></i> &nbsp; <?php echo __('backend.tumblr'); ?></label>
            <?php echo Form::text('social_link8',$Setting->social_link8, array('placeholder' => __('backend.tumblr'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-snapchat"></i> &nbsp; <?php echo __('backend.snapchat'); ?></label>
            <?php echo Form::text('social_link9',$Setting->social_link9, array('placeholder' => __('backend.snapchat'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

        <div class="form-group">
            <label><i class="fa fa-whatsapp"></i> &nbsp; <?php echo __('backend.whatapp'); ?></label>
            <?php echo Form::text('social_link10',$Setting->social_link10, array('placeholder' => __('backend.whatapp'),'class' => 'form-control', 'dir'=>'ltr')); ?>

        </div>

    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/settings/social.blade.php ENDPATH**/ ?>