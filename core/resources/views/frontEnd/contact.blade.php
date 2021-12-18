@extends('frontEnd.layout')

@section('content')
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
    <section class="u-clearfix u-section-1" id="sec-e099">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img src="images/0eb2059c234b648b059a9f193368bc39f040c3a8ad429d996869cf7caf8be890b3c3fe20324880902c2348c1a6c288cb85bf10a558c788611f3565_1280.jpg" alt="" class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" data-image-width="1280" data-image-height="854">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-grey-70 u-text-1">Get In Touch</h2>
                      <p class="u-text u-text-grey-50 u-text-2">
                        <a href="mailto:hello@decomesh.in?subject=Inquiy%20From%20The%20Website" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">hello@decomesh.in</a>
                        <br>
                        <br>+91-_________<br>
                        <br>
                        <a href="tel:+9114171005151" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">+91-141-7105151</a>
                        <br>
                        <br>166, Jhotwara Industrial Area,<br>Jaipur, Rajasthan<br>India 302012&nbsp;<br>
                        <br>
                        <br>
                      </p><span class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f692"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-f692" style="enable-background:new 0 0 60 60;"><g><path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
		s-5-2.243-5-5S27.243,14,30,14z"></path><path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
		s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
		s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
		C10.882,24.468,11.628,13.08,17.677,7.031z"></path><path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
		c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
		c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
		C60,47.739,52.646,44.247,42.117,43.007z"></path>
</g></svg></span><span class="u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-78fd"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-78fd" style="enable-background:new 0 0 60 60;"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path><path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path><path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path><path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
</g></svg></span><span class="u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e531"></use></svg><svg class="u-svg-content" viewBox="0 0 54 54" x="0px" y="0px" id="svg-e531" style="enable-background:new 0 0 54 54;"><g><path d="M27,8c-9.374,0-17,7.626-17,17c0,7.112,4.391,13.412,11,15.9V50c0,0.553,0.447,1,1,1h1v2c0,0.553,0.447,1,1,1h6
		c0.553,0,1-0.447,1-1v-2h1c0.553,0,1-0.447,1-1v-9.1c6.609-2.488,11-8.788,11-15.9C44,15.626,36.374,8,27,8z M30,49
		c-0.553,0-1,0.447-1,1v2h-4v-2c0-0.553-0.447-1-1-1h-1v-5h8v5H30z M31.688,39.242C31.277,39.377,31,39.761,31,40.192V42h-8v-1.808
		c0-0.432-0.277-0.815-0.688-0.95C16.145,37.214,12,31.49,12,25c0-8.271,6.729-15,15-15s15,6.729,15,15
		C42,31.49,37.855,37.214,31.688,39.242z"></path><path d="M27,6c0.553,0,1-0.447,1-1V1c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C26,5.553,26.447,6,27,6z"></path><path d="M51,24h-4c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S51.553,24,51,24z"></path><path d="M7,24H3c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S7.553,24,7,24z"></path><path d="M43.264,7.322l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S43.654,6.932,43.264,7.322z"></path><path d="M12.15,38.436l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S12.541,38.045,12.15,38.436z"></path><path d="M41.85,38.436c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2.828,2.828c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L41.85,38.436z"></path><path d="M12.15,11.564c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-2.828-2.828
		c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L12.15,11.564z"></path><path d="M27,13c-6.617,0-12,5.383-12,12c0,0.553,0.447,1,1,1s1-0.447,1-1c0-5.514,4.486-10,10-10c0.553,0,1-0.447,1-1
		S27.553,13,27,13z"></path>
</g></svg></span><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5605"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-5605" style="enable-background:new 0 0 60 60;"><g><path d="M14,36.182h14v-10H14V36.182z M16,34.182v-3h10v3H16z M26,28.182v1H16v-1H26z"></path><path d="M14,40.182v12h14v-12H14z M20,42.182v3h-4v-3H20z M16,47.182h4v3h-4V47.182z M22,50.182v-3h4v3H22z M26,45.182h-4v-3h4
		V45.182z"></path><path d="M32,36.182h14v-10H32V36.182z M34,34.182v-1h10v1H34z M44,28.182v3H34v-3H44z"></path><path d="M59,48.182c-0.553,0-1,0.448-1,1v1h-1v-1c0-0.552-0.447-1-1-1s-1,0.448-1,1v1h-1V29.978
		c0.521,0.234,1.073,0.363,1.626,0.363c1.073,0,2.139-0.436,2.927-1.284c0.76-0.818,1.145-1.925,1.057-3.038
		c-0.089-1.112-0.644-2.145-1.522-2.833L32.722,3.345L30,0.818L27.343,3.29L1.913,23.186c-0.879,0.688-1.434,1.721-1.522,2.833
		c-0.088,1.113,0.297,2.22,1.057,3.038c1.194,1.286,3.021,1.61,4.553,0.922v20.204H5v-1c0-0.552-0.447-1-1-1s-1,0.448-1,1v1H2v-1
		c0-0.552-0.447-1-1-1s-1,0.448-1,1v9c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h1v1c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h1v2h26h14h8v-2h1
		v1c0,0.552,0.447,1,1,1s1-0.448,1-1v-1h1v1c0,0.552,0.447,1,1,1s1-0.448,1-1v-9C60,48.63,59.553,48.182,59,48.182z M2.912,27.695
		c-0.385-0.415-0.572-0.954-0.527-1.518c0.045-0.564,0.314-1.067,0.761-1.416L28.64,4.811l1.361-1.265l1.424,1.319l25.43,19.896
		c0.446,0.349,0.716,0.852,0.761,1.416c0.045,0.564-0.143,1.104-0.527,1.518c-0.708,0.762-1.861,0.858-2.686,0.223L54,27.608v0
		l-24-18.5l-23.61,18.2l-0.001,0.001l-0.791,0.609C4.772,28.553,3.62,28.457,2.912,27.695z M2,55.182v-3h1v3H2z M5,55.182v-3h1v3H5z
		 M34,57.182v-15h10v15H34z M52,57.182h-6v-17H32v17H8V28.591l22-16.959l22,16.959V57.182z M54,55.182v-3h1v3H54z M57,55.182v-3h1v3
		H57z"></path>
</g></svg></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
                    <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                      <h2 class="u-text u-text-grey-70 u-text-3">Write to us</h2>
                    </div>
					</div>
					 <div id="sendmessage"><i class="fa fa-check-circle"></i>
                        &nbsp;{{ __('frontend.youMessageSent') }}</div>
                    <div id="errormessage">{{ __('frontend.youMessageNotSent') }}</div>
					
                  <div class="u-container-style u-layout-cell u-right-cell u-size-40 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                       <div class="u-form u-form-1">
                       
						  {{Form::open(['route'=>['contactPage'],'method'=>'POST','class'=>'contactForm u-clearfix u-form-spacing-10 u-form-vertical u-inner-form'])}}
                    <div class="form-group u-form-email u-form-group">
					<label for="name-da97" class="u-form-control-hidden u-label">Name</label>
                        {!! Form::text('contact_name',@Auth::user()->name, array('placeholder' => __('frontend.yourName'),'class' => 'form-control u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle','id'=>'name', 'data-msg'=> __('frontend.enterYourName'),'data-rule'=>'minlen:4')) !!}
                        <div class="alert alert-warning validation"></div>
                    </div>
                    <div class="form-group u-form-email u-form-group">
                        {!! Form::email('contact_email',@Auth::user()->email, array('placeholder' => __('frontend.yourEmail'),'class' => 'form-control u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle','id'=>'email', 'data-msg'=> __('frontend.enterYourEmail'),'data-rule'=>'email')) !!}
                        <div class="validation"></div>
                    </div>
                    <div class="form-group u-form-group u-form-phone u-form-group-3">
					 <label for="phone-90d8" class="u-form-control-hidden u-label">Phone</label>
                        {!! Form::text('contact_phone',"", array('placeholder' => __('frontend.phone'),'class' => 'form-control u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle','id'=>'phone', 'data-msg'=> __('frontend.enterYourPhone'),'data-rule'=>'minlen:4')) !!}
                        <div class="validation"></div>
                    </div>
                  
                    <div class="form-group u-form-group u-form-message">
					<label for="message-da97" class="u-form-control-hidden u-label">Message</label>
					<?php 
					
						
						$resultValue = isset($_GET['enq']) ? 'Interested in '.base64_decode($_GET['enq']) : ''; 
						
						
						
					?>
                        {!! Form::textarea('contact_message',$resultValue, array('placeholder' => __('frontend.message'),'class' => 'form-control u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle','id'=>'message','rows'=>'4', 'cols' => '50', 'data-msg'=> __('frontend.enterYourMessage'),'data-rule'=>'required')) !!}
                        <div class="validation"></div>
                    </div>

                    @if(env('NOCAPTCHA_STATUS', false))
                        <div class="form-group">
                            {!! NoCaptcha::renderJs(@Helper::currentLanguage()->code) !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                    @endif
                    <div>
                        <button type="submit" class="btn btn-theme">{{ __('frontend.sendMessage') }}</button>
                    </div>
                    <br>
                    {{Form::close()}}
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

@endsection
@section('footerInclude')
    @if(count($Topic->maps) >0)
        @foreach($Topic->maps->slice(0,1) as $map)
            <?php
            $MapCenter = $map->longitude . "," . $map->latitude;
            ?>
        @endforeach
        <?php
        $map_title_var = "title_" . @Helper::currentLanguage()->code;
        $map_details_var = "details_" . @Helper::currentLanguage()->code;
        ?>
        <script type="text/javascript"
                src="//maps.google.com/maps/api/js?key={{ env("GOOGLE_MAPS_KEY") }}"></script>

        <script type="text/javascript">
            // var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
            var iconURLPrefix = "{{ asset('assets/dashboard/images/')."/" }}";
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
                    @foreach($Topic->maps as $map)
                ['<?php echo "<strong>" . $map->$map_title_var . "</strong>" . "<br>" . $map->$map_details_var; ?>', <?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>, <?php echo $map->id; ?>, <?php echo $map->icon; ?>],
                @endforeach
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
    @endif
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            "use strict";
            //Contact
            $('form.contactForm').submit(function () {

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
                    url: "{{ route("contactPageSubmit") }}",
                    data: str,
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
                //console.log(xhr);
                return false;
            });

        });
    </script>

@endsection
