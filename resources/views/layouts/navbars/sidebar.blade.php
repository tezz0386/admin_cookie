<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
    Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper" style="width: 290px;">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}" class="simple-text">
                <img @if(! SITE_LOGO == '') src="{{asset('uploads/site/thumbnail/'.SITE_LOGO)}}"  @else  src="{{asset('front-assets/images/logo.png')}}" @endif  height="100">
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="{{route('admin.category.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p> {{ __('Category Management') }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="{{route('admin.subcategory.index')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __("Sub Category Management") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('product.index')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p> {{ __('Product Management') }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('special.index')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Todays Special") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('page.index')}}">
                     <i class="nc-icon nc-tv-2"></i>
                    <p> {{ __('Page Setting') }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('site.index')}}">
                     <i class="nc-icon nc-settings-gear-64"></i>
                    <p> {{ __('Site Setting') }}</p>
                </a>
            </li>
             <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('message.index')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Mail") }} <label style="background: red; color: white; width: 38px; text-align: center; margin-left: 2px;"> @if(isset($messages)) {{count($messages)}} @endif</label></p>
                </a>
            </li>
        </ul>
    </div>
</div>