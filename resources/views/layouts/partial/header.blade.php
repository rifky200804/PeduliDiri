<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="">
                <img src="{{ asset('icon/pedulidiri2.png') }}" style="width:140px;height:50px;"
                    class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto mb-auto mt-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar"
                            @if(Auth::user()->foto != NULL && Auth::user()->foto > 1)style="background-image: url({{asset('foto/'. Auth::user()->foto)}})" @else
                            style="background-image: url({{asset('foto/default.png')}})"@endif></span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{Auth::user()->nama}}</span>
                            <small class="text-muted d-block mt-1">{{Auth::user()->nik}}</small>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{route('user.edit',Auth::user()->id)}}">
                            <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="dropdown-icon fe fe-log-out"></i> Sign out
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
                {{-- <form class="input-icon my-3 my-lg-0">
                    <input type="search" class="form-control header-search" placeholder="Search&hellip;"
                        tabindex="1">
                    <div class="input-icon-addon">
                        <i class="fe fe-search"></i>
                    </div>
                </form> --}}
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item dropdown">
                        <a href="{{route('dashboard')}}" class="nav-link {{ Request::url() == route('dashboard') ? 'active' : '' }}"><i class="fe fe-home"></i> Dashboard</a>
                    </li>
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item dropdown">
                        <a href="{{route('user.data')}}" class="nav-link {{ Request::url() == route('user.data') ? 'active' : '' }}"><i class="fe fe-user"></i>User</a>
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a href="{{route('perjalanan.data')}}" class="nav-link {{ Request::url() == route('perjalanan.data') ? 'active' : '' }}"><i class="fa fa-blind"></i> Data Perjalanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="fe fe-log-out"></i> 
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>