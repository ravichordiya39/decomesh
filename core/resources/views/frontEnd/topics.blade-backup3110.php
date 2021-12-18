@extends('frontEnd.layout')

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route("Home") }}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        @if(@$WebmasterSection!="none")
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            if (@$WebmasterSection->$title_var != "") {
                                $WebmasterSectionTitle = @$WebmasterSection->$title_var;
                            } else {
                                $WebmasterSectionTitle = @$WebmasterSection->$title_var2;
                            }
                            ?>
                            <li class="active">{!! $WebmasterSectionTitle !!}</li>
                        @elseif(@$search_word!="")
                            <li class="active">{{ @$search_word }}</li>
                        @else
                            <li class="active">{{ $User->name }}</li>
                        @endif
                        @if($CurrentCategory!="none")
                            @if(!empty($CurrentCategory))
                                <?php
                                $category_title_var = "title_" . @Helper::currentLanguage()->code;
                                ?>
                                <li class="active"><i
                                        class="icon-angle-right"></i>{{ $CurrentCategory->$category_title_var }}
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">    
        <div class="container">
        <div id="FilterProduct" class="FilterProduct"  style="float:right;" ><input type= "button" id ="showHide" onclick ="showHide()" value="Click to Shortlist"/></div>
            <div class="row">
                <div class="col-lg-{{(count($Categories)>0)? "12":"12"}}">
                    @if($Topics->total() == 0)
                        <div class="alert alert-warning">
                            <i class="fa fa-info"></i> &nbsp; {{ __('frontend.noData') }}
                        </div>
                    @else
                        <div class="row">
                            @if($Topics->total() > 0)

                                <?php
                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                $details_var = "details_" . @Helper::currentLanguage()->code;
                                $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                                $i = 0;
                                ?>
                                @foreach($Topics as $Topic)
                                    <?php
									
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

                                    // set row div
                                    if (($i == 3 && count($Categories) > 0) || ($i == 3 && count($Categories) == 0)) {
                                        $i = 0;
                                        echo "</div><div class='row'>";
                                    }
                                    $topic_link_url = Helper::topicURL($Topic->id);
                                    ?>
                                    <div class="col-lg-{{(count($Categories)>0)? "4":"3"}}" id="aa_{{$Topic->id}}">

                                        <article>
                                            @if($Topic->webmasterSection->type==2 && $Topic->video_file!="")
                                                {{--video--}}
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="{{ $topic_link_url }}">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                <h4 class="u-text u-text-1"> {{ $title }} </h4>
                                                            </a></h3>
                                                    </div>
                                                    <div class="video-container">
                                                        @if($Topic->video_type ==1)
                                                            <?php
                                                            $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                                            ?>
                                                            @if($Youtube_id !="")
                                                                {{-- Youtube Video --}}
                                                                <iframe allowfullscreen
                                                                        src="https://www.youtube.com/embed/{{ $Youtube_id }}">
                                                                </iframe>
                                                            @endif
                                                        @elseif($Topic->video_type ==2)
                                                            <?php
                                                            $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                                            ?>
                                                            @if($Vimeo_id !="")
                                                                {{-- Vimeo Video --}}
                                                                <iframe allowfullscreen
                                                                        src="http://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                                                </iframe>
                                                            @endif

                                                        @elseif($Topic->video_type ==3)
                                                            @if($Topic->video_file !="")
                                                                {{-- Embed Video --}}
                                                                {!! $Topic->video_file !!}
                                                            @endif

                                                        @else
                                                            <video width="100%" height="300" controls>
                                                                <source
                                                                    src="{{ URL::to('uploads/topics/'.$Topic->video_file) }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @endif


                                                    </div>
                                                </div>
                                            @elseif($Topic->webmasterSection->type==3 && $Topic->audio_file!="")
                                                {{--audio--}}
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="{{ $topic_link_url }}">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                <h4 class="u-text u-text-1"> {{ $title }} </h4>
                                                            </a></h3>
                                                    </div>
                                                    @if($Topic->photo_file !="")
                                                        <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}"
                                                             alt="{{ $title }}" style="height:350px !important"/>
                                                    @endif
                                                    <div>
                                                        <audio controls>
                                                            <source
                                                                src="{{ URL::to('uploads/topics/'.$Topic->audio_file) }}"
                                                                type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>

                                                    </div>
                                                </div>

                                            @elseif(count($Topic->photos)>0)
                                                {{--photo slider--}}
												
                                                <div class="post-slider">
												
			
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="{{ $topic_link_url }}">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                               <h4 class="u-text u-text-1"> {{ $title }} </h4>
                                                            </a></h3>
                                                    </div>
                                                    <!-- start flexslider -->
                                                    <div class="p-slider flexslider">
                                                        <ul class="slides">
                                                            @if($Topic->photo_file !="")
                                                                <li>
                                                                     <a href="{{ $topic_link_url }}"/> <img
                                                                        src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}"
                                                                        alt="{{ $title }}" style="height:350px !important"  /></a>
                                                                </li>
                                                            @endif
                                                            @foreach($Topic->photos as $photo)
															<?php $photo->file;?>
                                                                <li>
                                                                    <a href="{{ $topic_link_url }}"/> <img
                                                                        src="{{ URL::to('uploads/topics/'.$photo->file) }}"
                                                                        alt="{{ $photo->title  }}" style="height:350px !important" /></a>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                    <!-- end flexslider -->
                                                </div>

                                            @else
                                                {{--one photo--}}
                                                <div class="post-image" id="post-image_{{ $Topic->id }}">
                                                    <div class="post-heading" id="purchaseForm">
                                                        
                                                        <h3>
                                                            <!--<a href="{{ $topic_link_url }}"> -->
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                 <h4 class="u-text u-text-1"> {{ $title }} </h4>
                                                           <!-- </a>--></h3>
                                                    </div>
                                                    @if($Topic->photo_file !="")
                                                       <a href="{{ $topic_link_url }}" target="_blank"/> <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}"
                                                             alt="{{ $title }}" style="height:350px !important"/> </a>
                                                    @endif
                                                </div>
                                            @endif

                                            {{--Additional Feilds--}}
                                            @if(count($Topic->webmasterSection->customFields->where("in_listing",true)) >0)
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <?php
                                                            $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                                                            $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                                            ?>
                                                            @foreach($Topic->webmasterSection->customFields->where("in_listing",true) as $customField)
                                                                <?php
                                                                // check permission
                                                                $view_permission_groups = [];
                                                                if ($customField->view_permission_groups != "") {
                                                                    $view_permission_groups = explode(",", $customField->view_permission_groups);
                                                                }
                                                                if (in_array(0, $view_permission_groups) || $customField->view_permission_groups=="") {
                                                                // have permission & continue
                                                                ?>
                                                                @if ($customField->in_listing)
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

                                                                    @if(($cf_saved_val!="" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code))
                                                                        @if($customField->type ==12)
                                                                            {{--Vimeo Video Link--}}
                                                                        @elseif($customField->type ==11)
                                                                            {{--Youtube Video Link--}}
                                                                        @elseif($customField->type ==10)
                                                                            {{--Video File--}}
                                                                        @elseif($customField->type ==9)
                                                                            {{--Attach File--}}
                                                                        @elseif($customField->type ==8)
                                                                            {{--Photo File--}}
                                                                        @elseif($customField->type ==7)
                                                                            {{--Multi Check--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
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
                                                                                    @foreach ($cf_details_lines as $cf_details_line)
                                                                                        @if (in_array($line_num,$cf_saved_val_array))
                                                                                            <span class="badge">
                                                            {!! $cf_details_line !!}
                                                        </span>
                                                                                        @endif
                                                                                        <?php
                                                                                        $line_num++;
                                                                                        ?>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==6)
                                                                            {{--Select--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
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
                                                                                    @foreach ($cf_details_lines as $cf_details_line)
                                                                                        @if ($line_num == $cf_saved_val)
                                                                                            {!! $cf_details_line !!}
                                                                                        @endif
                                                                                        <?php
                                                                                        $line_num++;
                                                                                        ?>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==5)
                                                                            {{--Date & Time--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
                                                                                </div>
                                                                                <div class="col-lg-9">
                                                                                    {!! Helper::formatDate($cf_saved_val)." ".date("h:i A", strtotime($cf_saved_val)) !!}
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==4)
                                                                            {{--Date--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
                                                                                </div>
                                                                                <div class="col-lg-9">
                                                                                    {!! Helper::formatDate($cf_saved_val) !!}
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==3)
                                                                            {{--Email Address--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
                                                                                </div>
                                                                                <div class="col-lg-9">
                                                                                    {!! $cf_saved_val !!}
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==2)
                                                                            {{--Number--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
                                                                                </div>
                                                                                <div class="col-lg-9">
                                                                                    {!! $cf_saved_val !!}
                                                                                </div>
                                                                            </div>
                                                                        @elseif($customField->type ==1)
                                                                            {{--Text Area--}}
                                                                        @else
                                                                            {{--Text Box--}}
                                                                            <div class="row field-row">
                                                                                <div class="col-lg-3">
                                                                                    {!!  $cf_title !!} :
                                                                                </div>
                                                                                <div class="col-lg-9">
                                                                                    {!! $cf_saved_val !!}
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                <?php
                                                                }
                                                                ?>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            {{--End of -- Additional Feilds--}}

                                            <p>{!! mb_substr($Topic->$details,0, 150)."..." !!}</p>
                                            <div class="bottom-article">
                                                <ul class="meta-post">
                                                    @if($Topic->webmasterSection->date_status)
                                                        <li><i class="fa fa-calendar"></i> <a>{!! Helper::formatDate($Topic->date)  !!}</a>
                                                        </li>
                                                    @endif
                                                   
                                                    @if($Topic->webmasterSection->comments_status)
                                                        <li><i class="fa fa-comments"></i><a
                                                                href="{{ $topic_link_url }}#comments">{{ __('frontend.comments') }}
                                                                : {{count($Topic->approvedComments)}} </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                                <a href="{{ $topic_link_url }}"
                                                   class="pull-left u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1">{{ __('frontend.readMore') }} <i
                                                        class="fa fa-caret-{{ @Helper::currentLanguage()->right }}"></i></a>
                                                        <div class="pull-left u-shortList u-btn u-btn-round u-button-style u-btn-1 u-shortList-font">
                                                         <input class="ads_Checkbox" type="checkbox" id="{{ $Topic->id }}" value="{{ $Topic->id }}"/> Shortlist</dive>
                                                
                                            </div>
                                        </article>
                                    </div>
                                    <?php
                                    $i++;
                                    ?>
                                @endforeach

                        </div>
                        <div id="FilterProduct" class="FilterProduct"  style="float:right;" ><input type= "button" id ="showHide" onclick ="showHide()" value="Click to Shortlist"/></div>
                        <div id="FilterProductSendMail" class="FilterProductSendMail"  style="float:right;" >
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                
                                {!! $Topics->links() !!}
                            </div>
                            <div class="col-lg-4 text-right">
                                <br>
                                <small>{{ $Topics->firstItem() }} - {{ $Topics->lastItem() }} {{ __('backend.of') }}
                                    ( {{ $Topics->total()  }} ) {{ __('backend.records') }}</small>
                            </div>
                        </div>
                    @endif
                    @endif
                </div>
              
            </div>

        </div>
    </section>

@endsection
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
   // $(function(){
       function showHide(){
       //$('#FilterProduct').

    //$("#FilterProduct").replaceWith("<input type="button" id ="showHide" onclick ="show()" value="ClearAll"/>");
    $(".FilterProduct").html('<input type= "button" id ="showHide" onclick ="showAll()" value="ClearAll"/>');
  //  $(".FilterProductSendMail").html('<input type= "button" id ="showHide" onclick ="FilterProductSendMail()" value="FilterProductSendMail"/>');
    $(".FilterProductSendMail").html('  <input type= "button" id ="showHide" onclick ="FilterProductSendMail()" value="Enquire for selected items"/>');
  
        var arr = $('.ads_Checkbox:checked').map(function(){
        return this.value;
    }).get();
var container = $('.col-lg-4');
var purchaseForm = $('#purchaseForm');
      if (container.find(".ads_Checkbox").is(":checked")) {
       for(var i=0;i<arr.length;i++){
        var ids =arr[i]; 
     $("#aa_"+ids).show();

   $('input[type=checkbox]:not(:checked)').each(function(){
    var id = $(this).attr("id");
    $("#aa_"+id).hide();
  });
   
        }

  }
  else{
    container.show();
  }


}
function showAll(){
   // alert('Would you like to Clear!');   
       $(":checkbox").prop("checked", false);
      showHide();
      $(".FilterProduct").html('<input type= "button" id ="showHide" onclick ="showHide()" value="Click to Shortlist"/>');
      $(".FilterProductSendMail").hide('  <input type= "button" id ="showHide" onclick ="FilterProductSendMail()" value="Enquire for selected items"/>');
    }
    function FilterProductSendMail(){
        var selected = $('.ads_Checkbox:checked').map(function(){
        return this.value;
    }).get();
    alert('Filter products:'+selected);
	var strData = selected;
	var xhr = $.ajax({
                    type: "POST",
                    url: "{{ route("DesignPageSubmit") }}",
                    data: strData,
                    success: function (msg) {
                        if (msg == 'OK') {
                           
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $("#name").val('');
                            $("#email").val('');
                            $("#phone").val('');
                            $("#subject").val('');
                            $("#message").val('');
                            $(window).scrollTop($('#contact_div').offset().top);
                        } else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            alert(msg);
                            $('#errormessage').html(msg);
                        }

                    }
                });
				

    }
</script>