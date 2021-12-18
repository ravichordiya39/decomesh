<?php $__env->startSection('title', __('backend.signedInToControl')); ?>
<?php $__env->startSection('content'); ?>
    <div class="center-block w-xxl p-t-3">
        <div class="p-a-md box-color r box-shadow-z4 text-color m-b-0">
            <div class="text-center">
                <?php if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !=""): ?>
                    <img alt="" class="app-logo"
                         src="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code))); ?>">
                <?php else: ?>
                    <img alt="" src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>">
                <?php endif; ?>
            </div>
            <div class="m-y text-muted text-center">
                <?php echo e(__('backend.signedInToControl')); ?>

            </div>
            <form name="form" method="POST" action="<?php echo e(url('/'.env('BACKEND_PATH').'/login')); ?>">
                <?php echo e(csrf_field()); ?>

                <?php if($errors ->any()): ?>
                    <div class="alert alert-danger m-b-0">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <div class="md-form-group float-label <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="md-input" required>
                    <label><?php echo e(__('backend.connectEmail')); ?></label>
                </div>
                <div class="md-form-group float-label <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input type="password" name="password" class="md-input" required>
                    <label><?php echo e(__('backend.connectPassword')); ?></label>
                </div>
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                <?php endif; ?>
                <div class="m-b-md text-left">
                    <label class="md-check">
                        <input type="checkbox" name="remember"><i
                            class="primary"></i> <?php echo e(__('backend.keepMeSignedIn')); ?>

                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md m-b"><?php echo e(__('backend.signIn')); ?></button>
            </form>
            <?php if(env("FACEBOOK_STATUS") && env("FACEBOOK_ID") && env("FACEBOOK_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'facebook')); ?>" class="btn btn-primary btn-block text-left">
                    <i class="fa fa-facebook"></i> <?php echo e(__('backend.loginWithFacebook')); ?>

                </a>
            <?php endif; ?>
            <?php if(env("TWITTER_STATUS") && env("TWITTER_ID") && env("TWITTER_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'twitter')); ?>" class="btn btn-info btn-block text-left">
                    <i class="fa  fa-twitter"></i> <?php echo e(__('backend.loginWithTwitter')); ?>

                </a>
            <?php endif; ?>
            <?php if(env("GOOGLE_STATUS") && env("GOOGLE_ID") && env("GOOGLE_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'google')); ?>" class="btn danger btn-block text-left">
                    <i class="fa fa-google"></i> <?php echo e(__('backend.loginWithGoogle')); ?>

                </a>
            <?php endif; ?>
            <?php if(env("LINKEDIN_STATUS") && env("LINKEDIN_ID") && env("LINKEDIN_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'linkedin')); ?>" class="btn btn-primary btn-block text-left">
                    <i class="fa fa-linkedin"></i> <?php echo e(__('backend.loginWithLinkedIn')); ?>

                </a>
            <?php endif; ?>
            <?php if(env("GITHUB_STATUS") && env("GITHUB_ID") && env("GITHUB_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'github')); ?>" class="btn btn-default dark btn-block text-left">
                    <i class="fa fa-github"></i> <?php echo e(__('backend.loginWithGitHub')); ?>

                </a>
            <?php endif; ?>
            <?php if(env("BITBUCKET_STATUS") && env("BITBUCKET_ID") && env("BITBUCKET_SECRET")): ?>
                <a href="<?php echo e(route('social.oauth', 'bitbucket')); ?>" class="btn primary btn-block text-left">
                    <i class="fa fa-bitbucket"></i> <?php echo e(__('backend.loginWithBitbucket')); ?>

                </a>
            <?php endif; ?>

            <?php if(Helper::GeneralWebmasterSettings("register_status")): ?>
                <a href="<?php echo e(url('/'.env('BACKEND_PATH').'/register')); ?>" class="btn info btn-block text-left">
                    <i class="fa fa-user-plus"></i> <?php echo e(__('backend.createNewAccount')); ?>

                </a>
            <?php endif; ?>
            <div class="p-v-lg text-center">
                <div class="m-t"><a href="<?php echo e(url('/'.env('BACKEND_PATH').'/password/reset')); ?>"
                                    class="text-primary _600"><?php echo e(__('backend.forgotPassword')); ?></a></div>
            </div>

        </div>


    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/auth/login.blade.php ENDPATH**/ ?>