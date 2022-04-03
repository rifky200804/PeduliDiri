<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="/">
                <img src="{{ asset('icon/pedulidiri2.png') }}" style="width:140px;height:50px;"
                    class="header-brand-img" alt="tabler logo">
            </a>
            @if (isset(Auth::user()->id))
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

            @else
            <div class="d-flex order-lg-2 ml-auto mb-auto mt-auto">
                <a href="{{route('login')}}" class="btn btn-info btn-lg rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" style="margin-right:5px;" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    LOGIN
                </a>
            </div>
            @endif
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
                    @if (isset(Auth::user()->id))
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
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>