 
<?php $__env->startSection('content'); ?>
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;
    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
    $details_var = "details_" . @Helper::currentLanguage()->code;
    $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
    if ($Topic->$title_var != "") {
        $title = $Topic->$title_var;
    } else {
        $title = $Topic->$title_var2;
    }
    if ($Topic->$details_var != "") {
        $details = $details_var;
    } else {
        $details = $details_var2;
    }
    $section = "";
    try {
        if ($Topic->section->$title_var != "") {
            $section = $Topic->section->$title_var;
        } else {
            $section = $Topic->section->$title_var2;
        }
    } catch (Exception $e) {
        $section = "";
    }
    ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route("Home")); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        <?php if($WebmasterSection->id != 1): ?>
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            if (@$WebmasterSection->$title_var != "") {
                                $WebmasterSectionTitle = @$WebmasterSection->$title_var;
                            } else {
                                $WebmasterSectionTitle = @$WebmasterSection->$title_var2;
                            }
                            ?>
                            <li class="active"><?php echo $WebmasterSectionTitle; ?></li>
                        <?php else: ?>
                            <!--<li class="active"><?php echo e($title); ?></li>-->
                        <?php endif; ?>
                        <?php if(!empty($CurrentCategory)): ?>
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            if (@$CurrentCategory->$title_var != "") {
                                $CurrentCategoryTitle = @$CurrentCategory->$title_var;
                            } else {
                                $CurrentCategoryTitle = @$CurrentCategory->$title_var2;
                            }
                            ?>
                            <li class="active"><i
                                    class="icon-angle-right"></i><?php echo e($CurrentCategoryTitle); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-<?php echo e((count($Categories)>0)? "12":"12"); ?>">

                    <article>
                        <?php if($WebmasterSection->type==2 && $Topic->video_file!=""): ?>
                            
                            <div class="post-video">
                                <?php if($WebmasterSection->title_status): ?>
                                    <div class="post-heading">
                                        <h1>
                                            <?php if($Topic->icon !=""): ?>
                                                <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                            <?php endif; ?>
                                            <?php echo e($title); ?>

                                        </h1>
                                    </div>
                                <?php endif; ?>
                                <div class="video-container">
                                    <?php if($Topic->video_type ==1): ?>
                                        <?php
                                        $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                        ?>
                                        <?php if($Youtube_id !=""): ?>
                                            
                                            <iframe allowfullscreen
                                                    src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php elseif($Topic->video_type ==2): ?>
                                        <?php
                                        $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                        ?>
                                        <?php if($Vimeo_id !=""): ?>
                                            
                                            <iframe allowfullscreen
                                                    src="https://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                            </iframe>
                                        <?php endif; ?>

                                    <?php elseif($Topic->video_type ==3): ?>
                                        <?php if($Topic->video_file !=""): ?>
                                            
                                            <?php echo $Topic->video_file; ?>

                                        <?php endif; ?>

                                    <?php else: ?>
                                        <video width="100%" height="450" controls autoplay>
                                            <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->video_file)); ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>


                                </div>
                            </div>
                        <?php elseif($WebmasterSection->type==3 && $Topic->audio_file!=""): ?>
                            
                            <div class="post-video">
                                <?php if($WebmasterSection->title_status): ?>
                                    <div class="post-heading">
                                        <h1>
                                            <?php if($Topic->icon !=""): ?>
                                                <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                            <?php endif; ?>
                                            <?php echo e($title); ?>

                                        </h1>
                                    </div>
                                <?php endif; ?>
                                <?php if($Topic->photo_file !=""): ?>
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>"/>
                                <?php endif; ?>
                                <div>
                                    <audio controls autoplay>
                                        <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->audio_file)); ?>"
                                                type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>

                                </div>
                            </div>
                            <br>
                        <?php elseif(count($Topic->photos)>0): ?>
                            
							<div class="col-lg-6">
                            <div class="post-slider">
                                <?php if($WebmasterSection->title_status): ?>
                                    <div class="post-heading">
                                        <h1>
                                            <?php if($Topic->icon !=""): ?>
                                                <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                            <?php endif; ?>
                                            <?php echo e($title); ?>

                                        </h1>
                                    </div>
                            <?php endif; ?>
                            <!-- start flexslider -->
                                <div class="p-slider flexslider">
                                    <ul class="slides">
                                        <?php if($Topic->photo_file !=""): ?>
                                            <li>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                                     alt="<?php echo e($title); ?>"/>
                                            </li>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $Topic->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                     alt="<?php echo e($photo->title); ?>"/>
                                            </li>
											
											
														
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                                <!-- end flexslider -->
                            </div>
							</div>
                            <br>

                        <?php else: ?>
                            
						<div class="col-lg-6">
                            <div class="post-image">
							
                                <?php if($WebmasterSection->title_status): ?>
									
								  <?php if($PageTitle!='About Us' && $PageTitle!='Solutions'){?>
                                    <div class="post-heading">
                                        <h1>
                                            <?php if($Topic->icon !=""): ?>
                                                <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                            <?php endif; ?>
                                           <?php echo e($title); ?>

                                        </h1>
                                    </div>
                                    
								  <?php }?>
                                <?php endif; ?>
                                <?php if($Topic->photo_file !=""): ?>
								
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>" title="<?php echo e($title); ?>"/>
										 
										 
                                    <br>
                                <?php endif; ?>
                            </div>
							</div>
                        <?php endif; ?>

						
                        
                        <?php if(count($Topic->webmasterSection->customFields->where("in_page",true)) >0): ?>
                            <div class="row">
                                <div class="col-lg-6">
                                 
                                        <?php
                                        $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                                        $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        ?>
                                        <?php $__currentLoopData = $Topic->webmasterSection->customFields->where("in_page",true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            // check permission
                                            $view_permission_groups = [];
                                            if ($customField->view_permission_groups != "") {
                                                $view_permission_groups = explode(",", $customField->view_permission_groups);
                                            }
                                            if (in_array(0, $view_permission_groups) || $customField->view_permission_groups=="") {
                                            // have permission & continue
                                            ?>
                                            <?php if($customField->in_page): ?>
                                                <?php
                                                if ($customField->$cf_title_var != "") {
                                                    $cf_title = $customField->$cf_title_var;
                                                } else {
                                                    $cf_title = $customField->$cf_title_var2;
                                                }

                                                $cf_saved_val = "";
                                                $cf_saved_val_array = array();
                                                if (count($Topic->fields) > 0) {
                                                    foreach ($Topic->fields as $t_field) {
                                                        if ($t_field->field_id == $customField->id) {
                                                            if ($customField->type == 7) {
                                                                // if multi check
                                                                $cf_saved_val_array = explode(", ", $t_field->field_value);
                                                            } else {
                                                                $cf_saved_val = $t_field->field_value;
                                                            }
                                                        }
                                                    }
                                                }

                                                ?>

                                                <?php if(($cf_saved_val!="" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code)): ?>
                                                    <?php if($customField->type ==12): ?>
                                                        
                                                        <?php
                                                        $CF_Vimeo_id = Helper::Get_vimeo_video_id($cf_saved_val);
                                                        ?>
                                                        <?php if($CF_Vimeo_id !=""): ?>
                                                            <div class="row field-row">
                                                                <div class="col-lg-3">
                                                                    <?php echo $cf_title; ?> :
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    
                                                                    <iframe allowfullscreen
                                                                            style="height:450px;width: 100%"
                                                                            src="https://player.vimeo.com/video/<?php echo e($CF_Vimeo_id); ?>?title=0&amp;byline=0">
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php elseif($customField->type ==11): ?>
                                                        

                                                        <?php
                                                        $CF_Youtube_id = Helper::Get_youtube_video_id($cf_saved_val);
                                                        ?>
                                                        <?php if($CF_Youtube_id !=""): ?>
                                                            <div class="row field-row">
                                                                <div class="col-lg-3">
                                                                    <?php echo $cf_title; ?> :
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    
                                                                    <iframe allowfullscreen
                                                                            style="height: 450px;width: 100%"
                                                                            src="https://www.youtube.com/embed/<?php echo e($CF_Youtube_id); ?>">
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php elseif($customField->type ==10): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <video width="100%" height="450" controls>
                                                                    <source
                                                                        src="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"
                                                                        type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==9): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <a href="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"
                                                                   target="_blank">
                                                                <span class="badge">
                                                                    <?php echo Helper::GetIcon(URL::to('uploads/topics/'),$cf_saved_val); ?>

                                                                    <?php echo $cf_saved_val; ?></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==8): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <img
                                                                    src="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"
                                                                    alt="<?php echo e($cf_title); ?> - <?php echo e($title); ?>"
                                                                    title="<?php echo e($cf_title); ?> - <?php echo e($title); ?>">
                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==7): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php
                                                                $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                                $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                                                if ($customField->$cf_details_var != "") {
                                                                    $cf_details = $customField->$cf_details_var;
                                                                } else {
                                                                    $cf_details = $customField->$cf_details_var2;
                                                                }
                                                                $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                $line_num = 1;
                                                                ?>
                                                                <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(in_array($line_num,$cf_saved_val_array)): ?>
                                                                        <span class="badge">
                                                            <?php echo $cf_details_line; ?>

                                                        </span>
                                                                    <?php endif; ?>
                                                                    <?php
                                                                    $line_num++;
                                                                    ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
														
                                                    <?php elseif($customField->type ==6): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php
                                                                $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                                $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                                                if ($customField->$cf_details_var != "") {
                                                                    $cf_details = $customField->$cf_details_var;
                                                                } else {
                                                                    $cf_details = $customField->$cf_details_var2;
                                                                }
                                                                $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                $line_num = 1;
                                                                ?>
                                                                <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($line_num == $cf_saved_val): ?>
                                                                        <?php echo $cf_details_line; ?>

                                                                    <?php endif; ?>
                                                                    <?php
                                                                    $line_num++;
                                                                    ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==5): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php echo Helper::formatDate($cf_saved_val)." ".date("h:i A", strtotime($cf_saved_val)); ?>

                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==4): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php echo Helper::formatDate($cf_saved_val); ?>

                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==3): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php echo $cf_saved_val; ?>

                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==2): ?>
                                                        
                                                        <div class="row field-row">
                                                            <div class="col-lg-3">
                                                                <?php echo $cf_title; ?> :
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <?php echo $cf_saved_val; ?>

                                                            </div>
                                                        </div>
                                                    <?php elseif($customField->type ==1): ?>
                                                        
                                                        <div class="row field-row">
                                                               <div class="col-lg-6" style="font-weight:bold">
                                                                <?php echo $cf_title; ?> :
                                                            </div></br></br>
                                                            <div class="col-lg-9">
                                                                <?php echo nl2br($cf_saved_val); ?>

                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        
													
                                                        <div class="row field-row">
                                                            <div class="col-lg-6" style="font-weight:bold">
                                                              <?php echo $cf_title; ?> : 
                                                           </div>
                                                            <div class="col-lg-9"> </br>
                                                                <?php echo $cf_saved_val; ?>

                                                            </div>
                                                        </div>
														
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php
                                            }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </div>
                            </div>
                            <br>
                        <?php endif; ?>
                        

						<?php if($WebmasterSection->id == 1): ?>
							<?php echo $Topic->$details; ?>

						  <?php else: ?>							  
							<?php echo $Topic->$details; ?>

						
							
						 <?php endif; ?>
                        <?php if($Topic->attach_file !=""): ?>
                            <?php
                            $file_ext = strrchr($Topic->attach_file, ".");
                            $file_ext = strtolower($file_ext);
                            ?>
                            <div class="bottom-article">
                                <?php if($file_ext ==".jpg"|| $file_ext ==".jpeg"|| $file_ext ==".png"|| $file_ext ==".gif"): ?>
                                    <div class="text-center">
                                        <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->attach_file)); ?>"
                                             alt="<?php echo e($title); ?>"/>
                                    </div>
                                <?php else: ?>
                                    <a href="<?php echo e(URL::to('uploads/topics/'.$Topic->attach_file)); ?>">
                                        <strong>
                                            <?php echo Helper::GetIcon(URL::to('uploads/topics/'),$Topic->attach_file); ?>

                                            &nbsp;<?php echo e(__('frontend.downloadAttach')); ?></strong>
                                    </a>
                                <?php endif; ?>
                            </div>
							
                        <?php endif; ?>


                        
                        <?php if(count($Topic->attachFiles)>0): ?>
                            <div style="padding: 10px;border: 1px dashed #ccc;margin-bottom: 10px;">
                                <?php $__currentLoopData = $Topic->attachFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($attachFile->$title_var != "") {
                                        $file_title = $attachFile->$title_var;
                                    } else {
                                        $file_title = $attachFile->$title_var2;
                                    }
                                    ?>
                                    <div style="margin-bottom: 5px;">
                                        <a href="<?php echo e(URL::to('uploads/topics/'.$attachFile->file)); ?>" target="_blank">
                                            <strong>
                                                <?php echo Helper::GetIcon(URL::to('uploads/topics/'),$attachFile->file); ?>

                                                &nbsp;<?php echo e($file_title); ?></strong>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                      

                        <?php if(count($Topic->maps) >0): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <br>
                                    <h4><?php echo e(__('frontend.locationMap')); ?></h4>
                                    <div id="google-map"></div>
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if($WebmasterSection->comments_status): ?>
                            <div id="comments">
                                <?php if(count($Topic->approvedComments)>0): ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br>
                                            <h4><i class="fa fa-comments"></i> <?php echo e(__('frontend.comments')); ?></h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <?php $__currentLoopData = $Topic->approvedComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $dtformated = date('d M Y h:i A', strtotime($comment->date));
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="<?php echo e(URL::to('uploads/contacts/profile.jpg')); ?>" class="profile"
                                                     alt="<?php echo e($comment->name); ?>">
                                                <div class="pullquote-left">
                                                    <strong><?php echo e($comment->name); ?></strong>
                                                    <div>
                                                        <small>
                                                            <small><?php echo e($dtformated); ?></small>
                                                        </small>
                                                    </div>
                                                    <?php echo nl2br(strip_tags($comment->comment)); ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <br>
                                        <h4><i class="fa fa-plus"></i> <?php echo e(__('frontend.newComment')); ?></h4>
                                        <div class="bottom-article newcomment">
                                            <div id="sendmessage"><i class="fa fa-check-circle"></i>
                                                &nbsp;<?php echo e(__('frontend.youCommentSent')); ?> &nbsp; <a
                                                    href="<?php echo e(url()->current()); ?>"><i
                                                        class="fa fa-refresh"></i> <?php echo e(__('frontend.refresh')); ?>

                                                </a>
                                            </div>
                                            <div id="errormessage"><?php echo e(__('frontend.youMessageNotSent')); ?></div>

                                            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'commentForm'])); ?>

                                            <div class="form-group">
                                                <?php echo Form::text('comment_name',@Auth::user()->name, array('placeholder' => __('frontend.yourName'),'class' => 'form-control','id'=>'comment_name', 'data-msg'=> __('frontend.enterYourName'),'data-rule'=>'minlen:4')); ?>

                                                <div class="alert alert-warning validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::email('comment_email',@Auth::user()->email, array('placeholder' => __('frontend.yourEmail'),'class' => 'form-control','id'=>'comment_email', 'data-msg'=> __('frontend.enterYourEmail'),'data-rule'=>'email')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::textarea('comment_message','', array('placeholder' => __('frontend.comment'),'class' => 'form-control','id'=>'comment_message','rows'=>'5', 'data-msg'=> __('frontend.enterYourComment'),'data-rule'=>'required')); ?>

                                                <div class="validation"></div>
                                            </div>

                                            <?php if(env('NOCAPTCHA_STATUS', false)): ?>
                                                <div class="form-group">
                                                    <?php echo NoCaptcha::renderJs(@Helper::currentLanguage()->code); ?>

                                                    <?php echo NoCaptcha::display(); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <input type="hidden" name="topic_id" value="<?php echo e($Topic->id); ?>">
                                                <button type="submit"
                                                        class="btn btn-theme"><?php echo e(__('frontend.sendComment')); ?></button>
                                            </div>
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->order_status): ?>
                            <div id="order">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <br>
                                        <h4><i class="fa fa-cart-plus"></i> <?php echo e(__('frontend.orderForm')); ?></h4>
                                        <div class="bottom-article newcomment">
                                            <div id="ordersendmessage"><i class="fa fa-check-circle"></i>
                                                &nbsp;<?php echo e(__('frontend.youOrderSent')); ?>

                                            </div>
                                            <div id="ordererrormessage"><?php echo e(__('frontend.youMessageNotSent')); ?></div>

                                            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'orderForm'])); ?>

                                            <div class="form-group">
                                                <?php echo Form::text('order_name',@Auth::user()->name, array('placeholder' => __('frontend.yourName'),'class' => 'form-control','id'=>'order_name', 'data-msg'=> __('frontend.enterYourName'),'data-rule'=>'minlen:4')); ?>

                                                <div class="alert alert-warning validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::text('order_phone',"", array('placeholder' => __('frontend.phone'),'class' => 'form-control','id'=>'order_phone', 'data-msg'=> __('frontend.enterYourPhone'),'data-rule'=>'minlen:4')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::email('order_email',@Auth::user()->email, array('placeholder' => __('frontend.yourEmail'),'class' => 'form-control','id'=>'order_email', 'data-msg'=> __('frontend.enterYourEmail'),'data-rule'=>'email')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::textarea('order_message','', array('placeholder' => __('frontend.notes'),'class' => 'form-control','id'=>'order_message','rows'=>'5')); ?>

                                                <div class="validation"></div>
                                            </div>

                                            <?php if(env('NOCAPTCHA_STATUS', false)): ?>
                                                <div class="form-group">
                                                    <?php echo NoCaptcha::renderJs(@Helper::currentLanguage()->code); ?>

                                                    <?php echo NoCaptcha::display(); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <input type="hidden" name="topic_id" value="<?php echo e($Topic->id); ?>">
                                                <button type="submit"
                                                        class="btn btn-theme"><?php echo e(__('frontend.sendOrder')); ?></button>
                                            </div>
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        <?php endif; ?>


                        <?php if($WebmasterSection->related_status): ?>
                            <?php if(count($Topic->relatedTopics)): ?>
                                <div id="Related">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br>
                                            <h4><i class="fa fa-bookmark"></i> <?php echo e(__('backend.relatedTopics')); ?>

                                            </h4>
                                            <div class="bottom-article newcomment">
                                                <?php
                                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                                $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                                $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                                                ?>
                                                <?php $__currentLoopData = $Topic->relatedTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php


                                                    if ($relatedTopic->topic->$title_var != "") {
                                                        $relatedTopic_title = $relatedTopic->topic->$title_var;
                                                    } else {
                                                        $relatedTopic_title = $relatedTopic->topic->$title_var2;
                                                    }
                                                    ?>
                                                    <div style="margin-bottom: 5px;">
                                                        <a href="<?php echo e(Helper::topicURL($relatedTopic->topic->id)); ?>"><i
                                                                class="fa fa-bookmark-o"></i>&nbsp; <?php echo $relatedTopic_title; ?>

                                                        </a>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
					  <div>
					  <?php if($PageTitle!='About Us' && $PageTitle!='Solutions'){?>
                                             <a href="<?php echo e(URL::to('contact')); ?>?enq=<?php echo base64_encode($title);?>" class="pull-left u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1">Product Enquiry &nbsp;<i class="fa fa-caret-right"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="<?php echo e(URL::to('uploads/topics/16294639994960.jpg')); ?>" class="pull-left u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1" style="margin-left:15px;" download>Download&nbsp;<i class="fa fa-download-right"></i></a>
					  <?php }?>
                                               
                                            </div>
                    </article>
                </div>
                
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <?php if(count($Topic->maps) >0): ?>
        <?php $__currentLoopData = $Topic->maps->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $MapCenter = $map->longitude . "," . $map->latitude;
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $map_title_var = "title_" . @Helper::currentLanguage()->code;
        $map_details_var = "details_" . @Helper::currentLanguage()->code;
        ?>
        <script type="text/javascript"
                src="//maps.google.com/maps/api/js?key=<?php echo e(env("GOOGLE_MAPS_KEY")); ?>"></script>

        <script type="text/javascript">
            // var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
            var iconURLPrefix = "<?php echo e(asset('assets/dashboard/images/')."/"); ?>";
            var icons = [
                iconURLPrefix + 'marker_0.png',
                iconURLPrefix + 'marker_1.png',
                iconURLPrefix + 'marker_2.png',
                iconURLPrefix + 'marker_3.png',
                iconURLPrefix + 'marker_4.png',
                iconURLPrefix + 'marker_5.png',
                iconURLPrefix + 'marker_6.png'
            ]

            var locations = [
                    <?php $__currentLoopData = $Topic->maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                ['<?php echo "<strong>" . $map->$map_title_var . "</strong>" . "<br>" . $map->$map_details_var; ?>', <?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>, <?php echo $map->id; ?>, <?php echo $map->icon; ?>],
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ];

            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 6,
                draggable: false,
                scrollwheel: false,
                center: new google.maps.LatLng(<?php echo $MapCenter; ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    icon: icons[locations[i][4]],
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        </script>
    <?php endif; ?>
    <script type="text/javascript">
		var $ = jQuery;
        jQuery(document).ready(function ($) {
            "use strict";

            <?php if($WebmasterSection->comments_status): ?>
            //Comment
            $('form.commentForm').submit(function () {

                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + (ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                f.children('textarea').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + (ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo e(route("commentSubmit")); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $("#comment_name").val('');
                            $("#comment_email").val('');
                            $("#comment_message").val('');
                        } else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            $('#errormessage').html(msg);
                        }

                    }
                });
                console.log(xhr);
                return false;
            });
            <?php endif; ?>

            <?php if($WebmasterSection->order_status): ?>

            //Order
            $('form.orderForm').submit(function () {

                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + (ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo e(route("orderSubmit")); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#ordersendmessage").addClass("show");
                            $("#ordererrormessage").removeClass("show");
                            $("#order_name").val('');
                            $("#order_phone").val('');
                            $("#order_email").val('');
                            $("#order_message").val('');
                        } else {
                            $("#ordersendmessage").removeClass("show");
                            $("#ordererrormessage").addClass("show");
                            $('#ordererrormessage').html(msg);
                        }

                    }
                });
                //console.log(xhr);
                return false;
            });

            <?php endif; ?>
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/decomesh/public_html/core/resources/views/frontEnd/topic.blade.php ENDPATH**/ ?>