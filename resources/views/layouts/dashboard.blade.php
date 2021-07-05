<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Taxi Admin - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('doccure/admin/assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('doccure/admin/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('doccure/admin/assets/css/font-awesome.min.css')}}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('doccure/admin/assets/css/feathericon.min.css')}}">

@yield('style')

<!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('doccure/admin/assets/css/style.css')}}">

<!--[if lt IE 9]>
			<script src="{{asset('doccure/admin/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('doccure/admin/assets/js/respond.min.js')}}"></script>
		<![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    
    <div  class="header bg-primary bg-gradient">

        <!-- Logo -->
        <div class="header-left ">
                <img src="{{asset('doccure/admin/assets/img/logo.png')}}" alt="Logo" width="100" height="60">
            
           
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">
            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('doccure/admin/assets/img/doctors/doctor-thumb-01.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span>
                                                Schedule <span class="noti-title">her appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('doccure/admin/assets/img/patients/patient1.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Charlene Reed</span> has
                                                booked her appointment to <span
                                                    class="noti-title">Dr. Ruby Perrin</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('doccure/admin/assets/img/patients/patient2.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Travis Trimble</span> sent
                                                a amount of $210 for his <span class="noti-title">appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('doccure/admin/assets/img/patients/patient3.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Carl Kelly</span> send a
                                                message <span class="noti-title"> to his doctor</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle"
                                                src="{{url('images/admins/'.Auth()->user()->avatar)}}"
                                                width="31" alt="{{Auth()->user()->name}}"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{url('images/admins/'.Auth()->user()->avatar)}}" alt="User Image"
                                 class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{{Auth()->user()->name}}</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>

                    <a class="dropdown-item" href="#" onclick="document.getElementById('logout').submit()">Logout</a>
                    <form id="logout" class="d-none" action="{{route('logout')}} " method="POST">
                    @csrf
                    </form>


                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    
                    <li >
                        <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Admin</span></a>
                    </li>
                    <li class=" @if(request()->routeIs('cities.*')) active @endif">
                        <a href="{{route('cities.index')}}"><i class="fe fe-home"></i> <span>Cities</span></a>
                    </li>
                    <li class=" @if(request()->routeIs('areas.*')) active @endif" >
                        <a href="{{route('areas.index')}}"><i class="fe fe-home"></i> <span>Areas</span></a>
                    </li>
                    <li  class=" @if(request()->routeIs('profiles.*')) active @endif">
                        <a href="{{route('profiles.index')}}"><i class="fe fe-layout"></i> <span>Profiles</span></a>
                    </li>
                    <li  class=" @if(request()->routeIs('drivers.*')) active @endif">
                        <a href="{{route('drivers.index')}}"><i class="fe fe-layout"></i> <span>Profile Of Drivers</span></a>
                    </li>
                    <li class=" @if(request()->routeIs('brands.*')) active @endif">
                        <a href="{{route('brands.index')}}"><i class="fe fe-users"></i> <span>Brands</span></a>
                    </li>
                    <li class=" @if(request()->routeIs('carmodels.*')) active @endif">
                        <a href="{{route('carmodels.index')}}"><i class="fe fe-users"></i> <span>Models</span></a>
                    </li>
                    <li class=" @if(request()->routeIs('veichles.*')) active @endif">
                        <a href="{{route('veichles.index')}}"><i class="fe fe-users"></i> <span>Veichles</span></a>
                    </li>

                    <li class=" @if(request()->routeIs('wallets.*')) active @endif">
                        <a href="{{route('wallets.index')}}"><i class="fe fe-users"></i> <span>Wallets</span></a>
                    </li>
                   
                    <li class=" @if(request()->routeIs('roles.*')) active @endif">
                        <a href="{{route('roles.index')}}"><i class="fe fe-vector"></i> <span>Settings</span></a>
                    </li>
                    
                    <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li>
                  
                   
                   
                  
                   
               
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">@yield('page-title')</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"> @yield('page-breadcrumb')</li>
                        </ul>
                    </div>
                    @yield('action')
                </div>
            </div>

            @yield('page-wrapper')
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('doccure/admin/assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('doccure/admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('doccure/admin/assets/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('doccure/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

@yield('scripts')

<!-- Custom JS -->
<script src="{{asset('doccure/admin/assets/js/script.js')}}"></script>

</body>
</html>
