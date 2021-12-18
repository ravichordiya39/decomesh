<div
    class="tab-pane <?php echo e(( Session::get('active_tab') == 'frontSettingsTab' || Session::get('active_tab') =="") ? 'active' : ''); ?>"
    id="tab-5">
    <div class="p-a-md"><h5><?php echo __('backend.frontSettings'); ?></h5></div>

    <div class="p-a-md col-md-12">
        <div class="col-md-6">

            <div class="form-group">
                <label><?php echo e(__('backend.headerMenu')); ?> : </label>
                <select name="header_menu_id" id="header_menu_id" class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    ?>
                    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($ParentMenu->$title_var != "") {
                            $title = $ParentMenu->$title_var;
                        } else {
                            $title = $ParentMenu->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($ParentMenu->id); ?>" <?php echo e(($ParentMenu->id == $WebmasterSetting->header_menu_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo e(__('backend.footerMenu')); ?> : </label>
                <select name="footer_menu_id" id="footer_menu_id" class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    ?>
                    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($ParentMenu->$title_var != "") {
                            $title = $ParentMenu->$title_var;
                        } else {
                            $title = $ParentMenu->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($ParentMenu->id); ?>" <?php echo e(($ParentMenu->id == $WebmasterSetting->footer_menu_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.homeSlideBanners')); ?> : </label>
                <select name="home_banners_section_id" id="home_banners_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($WebmasterBanner->$title_var != "") {
                            $WBTitle = $WebmasterBanner->$title_var;
                        } else {
                            $WBTitle = $WebmasterBanner->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->home_banners_section_id) ? "selected='selected'":""); ?>><?php echo $WBTitle; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div class="form-group">
                <label><?php echo e(__('backend.homeTextBanners')); ?> : </label>
                <select name="home_text_banners_section_id" id="home_text_banners_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($WebmasterBanner->$title_var != "") {
                            $WBTitle = $WebmasterBanner->$title_var;
                        } else {
                            $WBTitle = $WebmasterBanner->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->home_text_banners_section_id) ? "selected='selected'":""); ?>><?php echo $WBTitle; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.sideBanners')); ?> : </label>
                <select name="side_banners_section_id" id="side_banners_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($WebmasterBanner->$title_var != "") {
                            $WBTitle = $WebmasterBanner->$title_var;
                        } else {
                            $WBTitle = $WebmasterBanner->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->side_banners_section_id) ? "selected='selected'":""); ?>><?php echo $WBTitle; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.newsletterGroup')); ?> : </label>
                <select name="newsletter_contacts_group" id="newsletter_contacts_group"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ContactsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option
                            value="<?php echo e($ContactsGroup->id); ?>" <?php echo e(($ContactsGroup->id == $WebmasterSetting->newsletter_contacts_group) ? "selected='selected'":""); ?>><?php echo $ContactsGroup->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.topicsPerPage')); ?> : </label>
                <?php echo Form::number('home_contents_per_page',$WebmasterSetting->home_contents_per_page, array('id' => 'home_contents_per_page','class' => 'form-control')); ?>

            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.topicsOrderInFront')); ?> : </label>
                <select name="front_topics_order" id="front_topics_order"
                        class="form-control c-select">
                    <option
                        value="asc" <?php echo e((env("FRONTEND_TOPICS_ORDER","asc") == "asc") ? "selected='selected'":""); ?>><?php echo __('backend.topicsOrderInFrontAsc'); ?></option>
                    <option
                        value="desc" <?php echo e((env("FRONTEND_TOPICS_ORDER","asc") == "desc") ? "selected='selected'":""); ?>><?php echo __('backend.topicsOrderInFrontDesc'); ?></option>
                </select>
            </div>

        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label><?php echo e(__('backend.homeRow1')); ?> : </label>
                <select name="default_currency_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $SitePages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SitePage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($SitePage->$title_var != "") {
                            $title = $SitePage->$title_var;
                        } else {
                            $title = $SitePage->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($SitePage->id); ?>" <?php echo e(($SitePage->id == $WebmasterSetting->default_currency_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo e(__('backend.homeRow2')); ?> : </label>
                <select name="home_content1_section_id" id="home_content1_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmaster_Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Webmaster_Section->type !=4): ?>
                            <?php
                            if ($Webmaster_Section->$title_var != "") {
                                $WSectionTitle = $Webmaster_Section->$title_var;
                            } else {
                                $WSectionTitle = $Webmaster_Section->$title_var2;
                            }
                            ?>
                            <option
                                value="<?php echo e($Webmaster_Section->id); ?>" <?php echo e(($Webmaster_Section->id == $WebmasterSetting->home_content1_section_id) ? "selected='selected'":""); ?>><?php echo $WSectionTitle; ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.homeRow_3')); ?> : </label>
                <select name="home_content2_section_id" id="home_content2_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmaster_Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Webmaster_Section->type !=4): ?>
                            <?php
                            if ($Webmaster_Section->$title_var != "") {
                                $WSectionTitle = $Webmaster_Section->$title_var;
                            } else {
                                $WSectionTitle = $Webmaster_Section->$title_var2;
                            }
                            ?>
                            <option
                                value="<?php echo e($Webmaster_Section->id); ?>" <?php echo e(($Webmaster_Section->id == $WebmasterSetting->home_content2_section_id) ? "selected='selected'":""); ?>><?php echo $WSectionTitle; ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.homeRow3')); ?> : </label>
                <select name="home_content3_section_id" id="home_content3_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmaster_Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Webmaster_Section->type !=4): ?>
                            <?php
                            if ($Webmaster_Section->$title_var != "") {
                                $WSectionTitle = $Webmaster_Section->$title_var;
                            } else {
                                $WSectionTitle = $Webmaster_Section->$title_var2;
                            }
                            ?>
                            <option
                                value="<?php echo e($Webmaster_Section->id); ?>" <?php echo e(($Webmaster_Section->id == $WebmasterSetting->home_content3_section_id) ? "selected='selected'":""); ?>><?php echo $WSectionTitle; ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.homeRow_4')); ?> : </label>
                <select name="latest_news_section_id" id="latest_news_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmaster_Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Webmaster_Section->type !=4): ?>
                            <?php
                            if ($Webmaster_Section->$title_var != "") {
                                $WSectionTitle = $Webmaster_Section->$title_var;
                            } else {
                                $WSectionTitle = $Webmaster_Section->$title_var2;
                            }
                            ?>
                            <option
                                value="<?php echo e($Webmaster_Section->id); ?>" <?php echo e(($Webmaster_Section->id == $WebmasterSetting->latest_news_section_id) ? "selected='selected'":""); ?>><?php echo $WSectionTitle; ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(__('backend.contactPageId')); ?> : </label>
                <select name="contact_page_id" id="contact_page_id" class="form-control c-select">
                    <option value="0">- - <?php echo __('backend.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    ?>
                    <?php $__currentLoopData = $SitePages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SitePage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($SitePage->$title_var != "") {
                            $title = $SitePage->$title_var;
                        } else {
                            $title = $SitePage->$title_var2;
                        }
                        ?>
                        <option
                            value="<?php echo e($SitePage->id); ?>" <?php echo e(($SitePage->id == $WebmasterSetting->contact_page_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo e(__('backend.commentsStatus')); ?> : </label>
                <div class="radio">
                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('new_comments_status','1',$WebmasterSetting->new_comments_status ? true : false , array('id' => 'new_comments_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.automaticPublish')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('new_comments_status','0',$WebmasterSetting->new_comments_status ? false : true , array('id' => 'new_comments_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.manualByAdmin')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo e(__('backend.dashboardLink')); ?> : </label>
                <div class="radio">
                    <div>
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('dashboard_link_status','1',$WebmasterSetting->dashboard_link_status ? true : false , array('id' => 'dashboard_link_status1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.active')); ?>

                        </label>
                    </div>
                    <div style="margin-top: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('dashboard_link_status','0',$WebmasterSetting->dashboard_link_status ? false : true , array('id' => 'dashboard_link_status2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.notActive')); ?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/decomesh/public_html/core/resources/views/dashboard/webmaster/settings/front.blade.php ENDPATH**/ ?>