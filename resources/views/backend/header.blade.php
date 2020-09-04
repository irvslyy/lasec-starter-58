<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light">

<!-- Header with logos -->
<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center bg-white">			
    <div class="navbar-brand navbar-brand-md">
        <a href="{{route('home')}}" class="d-inline-block">
            <!-- <img src="{{asset('//images/logo_im.png/')}}" alt="" style="height:50px" class="ml-3"> -->
        </a>
    </div>
    
    <div class="navbar-brand navbar-brand-xs">
        <a href="index.html" class="d-inline-block">
            <!-- <img src="{{URL::to('/')}}/public/assets/images/logo_icon_light.png" alt=""> -->
        </a>
    </div>
</div>
<!-- /header with logos -->


<!-- Mobile controls -->
<div class="d-flex flex-1 d-md-none">
    <div class="navbar-brand mr-auto">
        <a href="index.html" class="d-inline-block">
            <img src="" alt="">
        </a>
    </div>	

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
        <i class="icon-tree5"></i>
    </button>

    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
        <i class="icon-paragraph-justify3"></i>
    </button>
</div>
<!-- /mobile controls -->


<!-- Navbar content -->
<div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
            </a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown dropdown-user">
            <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('/images/placeholders/placeholder.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
                <span>{{Auth::user()->name}}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="icon-switch2"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
            </div>
        </li>
    </ul>
</div>
<!-- /navbar content -->

</div>
<!-- /main navbar -->