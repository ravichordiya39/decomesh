@if (@Auth::check())
    
@endif
<?php 
$CategoryMenu = DB::table('sections')->where('webmaster_id', '8')->Where('status', '1')->orderBy('id', 'asc')->get();
?>


 <header class="u-clearfix u-grey-5 u-header u-sticky u-valign-middle u-header" id="sec-2b9a">
 <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="{{URL::to('/')}}" style="padding: 10px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="{{URL::to('/')}}/about" style="padding: 10px;">About</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="{{URL::to('/')}}/solutions" style="padding: 10px;">Solutions</a>
</li>

<li class="u-nav-item dropdown">
 <a href="javascript:void(0)" class="dropdown-toggle u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true">Design</a>
							    <ul class="dropdown-menu">
								 @foreach($CategoryMenu as $CatTopic)
											 <li class="u-nav-item">
                                                    <a href="{{URL::to('/')}}/products/{{ $CatTopic->id }}" class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base">>
                                                        @if($CatTopic->icon !="")
                                                            <i class="fa {{$CatTopic->icon}}"></i> &nbsp;
                                                        @endif
                                                        {{ $CatTopic->title_en }}ddddd</a>
                                                </li>
 
 @endforeach
 
						
								</ul>

<!--<a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="{{URL::to('/')}}/solutions" style="padding: 10px;">Design</a>-->
</li>


<li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="{{URL::to('/')}}/contact" style="padding: 10px;">Contact</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{URL::to('/')}}" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{URL::to('/')}}/about" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{URL::to('/')}}/solutions" style="padding: 10px 20px;">Solutions</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{URL::to('/')}}/products/23" style="padding: 10px 20px;">Design 1</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{URL::to('/')}}/contact" style="padding: 10px 20px;">Contact</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav><a href="{{URL::to('/')}}" class="u-image u-logo u-image-1" data-image-width="1051" data-image-height="601">
        <img src="{{URL::to('/')}}/assets/frontend/images/Stationery-02.jpg" class="u-logo-image u-logo-image-1" data-image-width="301">
      </a>
	  
	  </header>
