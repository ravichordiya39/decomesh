<!DOCTYPE html>
<html lang="<?php echo e(@Helper::currentLanguage()->code); ?>" dir="<?php echo e(@Helper::currentLanguage()->direction); ?>">
<head>
    <?php echo $__env->make('frontEnd.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- <?php echo $__env->make('frontEnd.includes.colors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
</head>
<?php
$bdy_class = "";
$bdy_bg_color = "";
$bdy_bg_image = "";
if (Helper::GeneralSiteSettings("style_type")) {
    $bdy_class = "boxed-layout";
    if (Helper::GeneralSiteSettings("style_bg_type") == 0) {
        $bdy_bg_color = "background-color: #000;";
        if (Helper::GeneralSiteSettings("style_bg_color") != "") {
            $bdy_bg_color = "background-attachment: fixed;background-color: " . Helper::GeneralSiteSettings("style_bg_color") . ";";
        }
        $bdy_bg_image = "";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 1) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/pattern/' . Helper::GeneralSiteSettings("style_bg_pattern")) . ")";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 2) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_bg_image")) . ")";
    }
}
?>

<body class="u-body js <?php echo $bdy_class; ?>" style=" <?php echo $bdy_bg_color; ?> <?php echo $bdy_bg_image; ?>">
<div id="wrapper">
    <!-- start header -->
<?php echo $__env->make('frontEnd.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end header -->

    <!-- Content Section -->
    <div class="contents">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- end of Content Section -->

    <!-- start footer -->
<?php echo $__env->make('frontEnd.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end footer -->
</div>
<!-- <?php echo $__env->make('frontEnd.includes.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
<?php echo $__env->yieldContent('footerInclude'); ?>

<?php if(Helper::GeneralSiteSettings("style_preload")): ?>
    <div id="preloader"></div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                $('#preloader').fadeOut('slow', function () {
                    // $(this).remove();
                });
            });
        });
    </script>
<?php endif; ?>
<?php if(Helper::GeneralSiteSettings("style_header")): ?>
    <script type="text/javascript">
        window.onscroll = function () {
            myFunction()
        };
        var header = document.getElementsByTagName("header")[0];
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
<?php endif; ?>
</body>
</html>
<?php /**PATH /home/decomesh/public_html/core/resources/views/frontEnd/layout.blade.php ENDPATH**/ ?>