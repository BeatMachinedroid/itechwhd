@if (Auth::user()->role == 'viewers / audience')
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="{{ route('index') }}" class="logo">
                {{-- <span class="logoclass">ITECH</span> --}}
                <img src="{{ asset('images/logo1.png') }}" width="60" height="70" alt="logo">
            </a>
            </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img
                            class="rounded-circle" src="{{ asset('images/akun.png') }}" width="31" alt="Soeng Souy"></span> </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm"> <img src="{{ asset('images/akun.png') }}" alt="User Image"
                                class="avatar-img rounded-circle"> </div>
                        <div class="user-text">
                            <h6>{{ Auth::user()->username }}</h6>
                            <span> ~ {{ Auth::user()->role }}</span>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{ '/staf/' . encrypt(Auth::user()->id) . '/setting' }}">Account Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </li>
        </ul>



    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active"> <a href="{{ route('index') }}"><i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span></a> </li>
                    <li class="list-divider"></li>
                    <li class="submenu"> <a href="#"><i class="fas fa-book"></i></i> <span> Report
                            </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">

                            <li><a href="{{ route('history') }}"> History </a></li>

                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-cube"></i> <span> Assets
                            </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">

                            <li><a href="{{ route('aset') }}"> All Asset </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-chart-area"></i> <span> Chart </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('chart.view.week') }}">Weekly Chart </a></li>
                            <li><a href="{{ route('chart.view.month') }}">Monthly Chart</a></li>
                            <li><a href="{{ route('chart.view.year') }}">Yearly Chart </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-comments"></i> <span> FAQs </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">

                            <li><a href="{{ route('faq') }}">All FAQs </a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>

    </div>

    @yield('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="footer">
                <p>© 2023 iTech - PT. ASDP Indonesia Ferry</p>
            </div>
        </div>
    </div>

</div>

@else
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="{{ route('index') }}" class="logo">
                {{-- <span class="logoclass">ITECH</span> --}}
                <img src="{{ asset('images/logo1.png') }}" width="60" height="70" alt="logo">
            </a>
            </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img
                            class="rounded-circle" src="{{ asset('images/akun.png') }}" width="31" alt="Soeng Souy"></span> </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm"> <img src="{{ asset('images/akun.png') }}" alt="User Image"
                                class="avatar-img rounded-circle"> </div>
                        <div class="user-text">
                            <h6>{{ Auth::user()->username }}</h6>
                            <span> ~ {{ Auth::user()->role }}</span>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{ '/staf/' . encrypt(Auth::user()->id) . '/setting' }}">Account Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </li>
        </ul>

    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active"> <a href="{{ route('index') }}"><i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span></a> </li>
                    <li class="list-divider"></li>
                    <li class="submenu"> <a href="#"><i class="fas fa-book"></i></i> <span> Report
                            </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('addrequest.get') }}"> Add Report </a></li>
                            <li><a href="{{ route('history') }}"> History </a></li>
                            <li><a href="{{ route('upload_view') }}">Upload</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-cube"></i> <span> Assets
                            </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('aset.get') }}"> Add Asset </a></li>
                            <li><a href="{{ route('aset') }}"> All Asset </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-chart-area"></i> <span> Chart </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('chart.view.week') }}">Weekly Chart </a></li>
                            <li><a href="{{ route('chart.view.month') }}">Monthly Chart</a></li>
                            <li><a href="{{ route('chart.view.year') }}">Yearly Chart </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-comments"></i> <span> FAQs </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('addfaq') }}"> Add FAQs </a></li>
                            <li><a href="{{ route('faq') }}">All FAQs </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('pegawai') }}">All Staff </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    @yield('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="footer">
                <p>© 2023 iTech - PT. ASDP Indonesia Ferry</p>
            </div>
        </div>
    </div>
</div>
@endif
