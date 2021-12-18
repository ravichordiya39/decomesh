<?php
$footer_style = "";
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $bg_color = Helper::GeneralSiteSettings("style_color1");
    $footer_style = "style='background: $bg_color url($bg_file) repeat-x center top'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
?>
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer container-fluid" id="sec-aafe" >

  <div class="u-clearfix u-sheet u-sheet-1 row" >

    <div class="col-md-3">
 <p class="u-align-left u-small-text u-text u-text-variant">Meshtech LLP<br>166, Indsutrial Area Jhotwara, Jaipur,&nbsp;<br>Rajasthan, India&nbsp;&nbsp;302012&nbsp; <br>
          <span style="font-size: 0.625rem;">&nbsp;@Copyrigth decoMESH 2021</span>
        </p>


    </div>

    <div class="col-md-3">
  <div class="u-align-left u-spacing-25 ">
         <p class="text-left"><b>Quick Link</b><br></p>
 <p class="text-left">

     <a class="" style="text-decoration:none" href="{{URL::to('/')}}/about">About</a></br>
<a class="" href="{{URL::to('/')}}/solutions">Solutions</a></br>
<a class="" href="{{URL::to('/')}}/contact">Contact</a></br>






          
        </p>
        </div>


    </div>

    <div class="col-md-3">

   <div >

    <p class="text-left"><b>Follow Us On</b></p>

    <div class="text-left">



          <a class="u-social-url" target="_blank" href="https://www.instagram.com/deco.mesh/?hl=en" title="Instagram Decomesh"><span class=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.034 551.034" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-45d5"></use></svg><svg class="u-svg-content" viewBox="0 0 551.034 551.034" x="0px" y="0px" id="svg-45d5" style="enable-background:new 0 0 551.034 551.034;"><g><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)"><stop offset="0" style="stop-color:#E09B3D"></stop><stop offset="0.3" style="stop-color:#C74C4D"></stop><stop offset="0.6" style="stop-color:#C21975"></stop><stop offset="1" style="stop-color:#7024C4"></stop>
</linearGradient><path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722   c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156   C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156   c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722   c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"></path><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)"><stop offset="0" style="stop-color:#E09B3D"></stop><stop offset="0.3" style="stop-color:#C74C4D"></stop><stop offset="0.6" style="stop-color:#C21975"></stop><stop offset="1" style="stop-color:#7024C4"></stop>
</linearGradient><path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517   S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083   s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"></path><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57" x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)"><stop offset="0" style="stop-color:#E09B3D"></stop><stop offset="0.3" style="stop-color:#C74C4D"></stop><stop offset="0.6" style="stop-color:#C21975"></stop><stop offset="1" style="stop-color:#7024C4"></stop>
</linearGradient><circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15"></circle>
</g></svg>
          
          
        </span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cd19"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-cd19" style="enable-background:new 0 0 512 512;"><path style="fill:#1976D2;" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64  C512,28.704,483.296,0,448,0z"></path><path style="fill:#FAFAFA;" d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64  v176h96V336h48L432,256z"></path></svg>
          
          
        </span>
          </a>
          </div>
        </div>

    </div>

 <div class="col-md-3">

    <p class="text-left"><b>Contact Us</b></p>
<a href="tel:+911417105151" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-alt-color" style="margin: 0; padding-top: 0;padding-left: 0;"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+91-141-7105151
        </a>
        <a href="mailto:hello@decomesh.in?subject=Inquiry%20from%20Website" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-palette-1-base" style="margin: 0; padding-left: 0;"><span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path style="fill:#64B5F6;" d="M0,192l246.528,156.896c2.816,2.08,6.144,3.104,9.472,3.104s6.656-1.024,9.472-3.104L512,192  L265.6,3.2c-5.696-4.256-13.504-4.256-19.2,0L0,192z"></path><path style="fill:#ECEFF1;" d="M416,0H96C78.368,0,64,14.368,64,32v352c0,8.832,7.168,16,16,16h352c8.832,0,16-7.168,16-16V32  C448,14.368,433.664,0,416,0z"></path><g><path style="fill:#90A4AE;" d="M144,96h224c8.832,0,16-7.168,16-16s-7.168-16-16-16H144c-8.832,0-16,7.168-16,16S135.168,96,144,96   z"></path><path style="fill:#90A4AE;" d="M368,128H144c-8.832,0-16,7.168-16,16s7.168,16,16,16h224c8.832,0,16-7.168,16-16   S376.832,128,368,128z"></path><path style="fill:#90A4AE;" d="M272,192H144c-8.832,0-16,7.168-16,16s7.168,16,16,16h128c8.832,0,16-7.168,16-16   S280.832,192,272,192z"></path>
</g><path style="fill:#1E88E5;" d="M265.472,348.896c-2.816,2.08-6.144,3.104-9.472,3.104s-6.656-1.024-9.472-3.104L0,192v288  c0,17.664,14.336,32,32,32h448c17.664,0,32-14.336,32-32V192L265.472,348.896z"></path><path style="fill:#2196F3;" d="M480,512H32c-17.952,0-32-14.048-32-32c0-5.088,2.432-9.888,6.528-12.896l240-160  c2.816-2.08,6.144-3.104,9.472-3.104s6.656,1.024,9.472,3.104l240,160C509.568,470.112,512,474.912,512,480  C512,497.952,497.952,512,480,512z"></path></svg><img></span>&nbsp;hello@decomesh.in
        </a>
 </div>




        
       
	
      
      </div>



    </footer>
	  
	   <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-15" data-href="#">
        <svg class="u-svg-link" style="width: 100%;height: 100%;" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script src="{{ URL::asset('assets/frontend/js/jquery.js') }}"></script>



<script src="{{ URL::asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/jquery.fancybox-media.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/google-code-prettify/prettify.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/portfolio/jquery.quicksand.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/portfolio/setting.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/animate.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/custom.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('assets/frontend/js/nicepage.js') }}"></script>




<script src="{{ URL::asset('assets/frontend/js/jquery.flexslider.js') }}"></script>

 <script defer src="../jquery.flexslider.js"></script> 