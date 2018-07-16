<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="zet-soft">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>CRM | Taxi - Альфа версия</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/default-dark.css') }}" id="theme" rel="stylesheet">
    @yield('top_assets')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style type="text/css">
        
    </style>
</head>

<body class="fix-sidebar fix-header boxed card-no-border
">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('page.main') }}">
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text"> <img src="{{ asset('assets/images/logo.png') }}" height="50px"> </span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="{{ trans('layouts.search') }}"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="{{ route('page.message.main') }}"> <i class="mdi mdi-email"></i>
                                
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->photo != null)
                                    <img src="{{ config('app.url') }}/{{ Auth::user()->photo }}" alt="{{ Auth::user()->name }}" class="profile-pic" />
                                @else
                                    <img src="{{ asset('public/profile_photo/white.jpg') }}" alt="{{ Auth::user()->name }}" class="profile-pic" />
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                @if(Auth::user()->photo != null)
                                                    <img src="{{ config('app.url') }}/{{ Auth::user()->photo }}" alt="{{ Auth::user()->name }}" />
                                                @else
                                                    <img src="{{ asset('public/profile_photo/white.jpg') }}" alt="{{ Auth::user()->name }}" />
                                                @endif
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->last_name }} {{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('page.profile') }}"><i class="ti-user"></i> {{ trans('layouts.my_profile') }}</a></li>
                                    <li><a href="{{ route('page.balance') }}"><i class="ti-wallet"></i> {{ trans('layouts.my_balance') }}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ trans('layouts.logout') }}</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <? 
                            if(app()->getLocale() == 'en'){ 
                                $lang = 'gb';  
                                }
                            else{
                                $lang = app()->getLocale();
                                }
                            ?>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-{{ $lang }}"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> 
                                <a class="dropdown-item" href="{{ route('localization.ru') }}"><i class="flag-icon flag-icon-ru"></i> {{ trans('layouts.ru') }}</a> 
                                <a class="dropdown-item" href="{{ route('localization.en') }}"><i class="flag-icon flag-icon-gb"></i> {{ trans('layouts.en') }}</a> 
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="in">
                        <? $premising = json_decode(Auth::user()->premmising); ?>
                        <li class="nav-small-cap">{{ trans('layouts.crm') }}</li>
                        @if($premising->crm == "true")
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-histogram"></i><span class="hide-menu">{{ trans('layouts.integration') }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.crm.yandex') }}">{{ trans('layouts.crm_yandex') }}</a></li>
                                <li><a href="{{ route('page.crm.vezet') }}">{{ trans('layouts.crm_vezet') }}</a></li>
                                <li><a href="{{ route('page.crm.gibdd') }}">{{ trans('layouts.crm_gibdd') }}</a></li>
                                <li><a href="{{ route('page.crm.wage_driver') }}">{{ trans('layouts.crm_wage_driver') }}</a></li>
                                <li><a href="{{ route('page.crm.wage_admin') }}">{{ trans('layouts.crm_wage_admin') }}</a></li>
                            </ul>
                        </li>

                        
                        @endif
                        @if($premising->task == "true")
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">{{ trans('layouts.task') }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.task.main') }}">{{ trans('layouts.task_main') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if($premising->message == "true")
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-message"></i><span class="hide-menu">{{ trans('layouts.message') }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.message.main') }}">{{ trans('layouts.message_main') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if($premising->setting == "true")
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">{{ trans('layouts.setting') }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.setting.main') }}">{{ trans('layouts.main_setting') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        <li class="nav-devider"></li>
                        @if($premising->user == "true")
                        <li class="nav-small-cap">{{ trans('layouts.user') }}</li>

                        <li>
                        	<a class="has-arrow waves-effect waves-dark" href="{{ route('page.user.admin') }}" aria-expanded="false"><i class="mdi mdi-coffee"></i><span class="hide-menu">{{ trans('layouts.boss') }}</span></a>
                            
                            <!--
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.user.add') }}">{{ trans('layouts.add_user') }}</a></li>
                                <li><a href="{{ route('page.user.remove') }}">{{ trans('layouts.remove_user') }}</a></li>
                                <li><a href="{{ route('page.user.premising') }}">{{ trans('layouts.premising_user') }}</a></li> 
                            </ul>
                            -->
                        </li>
                        <li>
                        	<a class="has-arrow waves-effect waves-dark" href="{{ route('page.user.manager') }}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">{{ trans('layouts.manager') }}</span></a>
                            
                            <!--
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.user.add') }}">{{ trans('layouts.add_user') }}</a></li>
                                <li><a href="{{ route('page.user.remove') }}">{{ trans('layouts.remove_user') }}</a></li>
                                <li><a href="{{ route('page.user.premising') }}">{{ trans('layouts.premising_user') }}</a></li> 
                            </ul>
                            -->
                        </li>
                        <li>
                        	<a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">{{ trans('layouts.driver') }}</span></a>
                            
                            
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.user.driver.on') }}">{{ trans('layouts.driver_on') }}</a></li>
                                <li><a href="{{ route('page.user.driver.off') }}">{{ trans('layouts.driver_off') }}</a></li> 
                            </ul>
                            
                        </li>

                        <li class="nav-devider"></li>
                        @endif
                        @if($premising->auto == "true")
                        <li class="nav-small-cap">{{ trans('layouts.park') }}</li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('page.auto.all') }}" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">{{ trans('layouts.auto') }}</span></a>
                            <!--
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('page.auto.main') }}">{{ trans('layouts.auto_add') }}</a></li>
                                <li><a href="{{ route('page.auto.all') }}">{{ trans('layouts.auto_all') }}</a></li>
                            </ul>
                            -->
                        </li>

                        <li class="nav-devider"></li>
                        @endif
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <!-- <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a> -->
                <!-- item-->
                <!-- <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                <!-- item-->
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="{{ trans('layouts.logout') }}"><i class="mdi mdi-power"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form> 
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>{{ trans('layouts.this_month') }}</small></h6>
                                    <h4 class="m-t-0 text-info">₽ 950 000</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>{{ trans('layouts.last_month') }}</small></h6>
                                    <h4 class="m-t-0 text-primary">₽ 1 000 000</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                


                @yield('content')

                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> {{ trans('layouts.all_users') }} <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="m-t-20 chatonline">
                                <? $users = Crm::all_users(); ?>
                                @foreach($users as $u) 
                                @if($u->id == Auth::user()->id)
                                    <? continue; ?>
                                @endif
                                <li>
                                    <a href="javascript:void(0)">
                                        @if($u->photo != null)<img src="{{ config('app.url') }}/{{ $u->photo }}" alt="{{ $u->name }}" class="img-circle">@else<img src="{{ asset('public/profile_photo/white.jpg') }}" alt="{{ $u->name }}" class="img-circle">@endif <span>{{ $u->last_name }} {{ $u->name }} @if($u->isOnline())<small class="text-success">online</small>@else<small class="text-muted">Offline</small>@endif</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
        
    @if(!empty($arResult['alert']))
    <!-- Sweet-Alert  -->
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
        @if($arResult['alert']['code'] == 1)
        <script type="text/javascript">
            swal("{{ $arResult['alert']['title'] }}", "{{ $arResult['alert']['description'] }}")
        </script>
        @endif
    @endif
    
    @yield('bottom_assets')
</body>

</html>
