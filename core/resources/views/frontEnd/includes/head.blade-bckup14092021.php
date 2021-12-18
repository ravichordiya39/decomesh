<meta charset="utf-8"> 
<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="{{ URL::to('') }}"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Add Code -->


<?php
	if($PageTitle=='About Us'){?>

<link href="{{ URL::asset('assets/frontend/css/bootstrap.min2.css') }}" rel="stylesheet"/>	
	<link href="{{ URL::asset('assets/frontend/css/color.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/frontend/css/overwrite.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/animate.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/style.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/frontend/css/nicepage.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/frontend/css/About.css') }}" rel="stylesheet"/>
	
	  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	
<?php }
elseif($PageTitle=='Solutions'){?>
<link href="{{ URL::asset('assets/frontend/css/bootstrap.min2.css') }}" rel="stylesheet"/>	
<link href="{{ URL::asset('assets/frontend/css/color.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/overwrite.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/animate.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/style.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/frontend/css/nicepage.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/Solutions.css') }}" rel="stylesheet"/>
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

<?php }else{?>

<link href="{{ URL::asset('assets/frontend/css/bootstrap.min2.css') }}" rel="stylesheet"/>	
<link href="{{ URL::asset('assets/frontend/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/frontend/css/jcarousel.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/flexslider.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/style.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/color.css') }}" rel="stylesheet"/>
<link rel="stylesheet" href="{{ URL::asset('assets/frontend/js/owl-carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/frontend/js/owl-carousel/assets/owl.theme.default.min.css') }}"> 
<link href="{{ URL::asset('assets/frontend/css/nicepage.css') }}" rel="stylesheet"/>
<?php }
?>



@if( @Helper::currentLanguage()->direction=="rtl")
<link href="{{ URL::asset('assets/frontend/css/rtl.css') }}" rel="stylesheet"/>
@endif

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon"
          type="image/png">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif
@if(Helper::GeneralSiteSettings("style_apple") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="144x144">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif

<meta property='og:title'
      content='{{$PageTitle}} {{($PageTitle =="")? Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')):""}}'/>
@if(@$Topic->photo_file !="")
    <meta property='og:image' content='{{ URL::asset('uploads/topics/'.@$Topic->photo_file) }}'/>
@elseif(Helper::GeneralSiteSettings("style_apple") !="")
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}'/>
@else
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/nofav.png') }}'/>
@endif
<meta property="og:site_name" content="{{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}">
<meta property="og:description" content="{{$PageDescription}}"/>
<meta property="og:url" content="{{ url()->full()  }}"/>
<meta property="og:type" content="website"/>

@if(Helper::GeneralSiteSettings("css")!="")
    <style type="text/css">
        {!! Helper::GeneralSiteSettings("css") !!}
    </style>
@endif
{{-- Google Tags and google analytics --}}
@if($WebmasterSettings->google_tags_status && $WebmasterSettings->google_tags_id !="")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{!! $WebmasterSettings->google_tags_id !!}');</script>
    <!-- End Google Tag Manager -->
@endif
