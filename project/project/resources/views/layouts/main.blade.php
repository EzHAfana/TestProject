<!DOCTYPE html>
<html lang="en">
@yield('content_head')
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet"  href="{{ asset('assets/css/bootstrap.min.css') }}" >
    <!--Custom style.css-->
    <link rel="stylesheet"   href="{{ asset('assets/css/quicksand.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/style.css') }}">
    <!--Font Awesome-->
    <link rel="stylesheet"   href="{{ asset('assets/css/fontawesome.css') }}">
    <!--Chartist CSS-->
    <link rel="stylesheet"href="{{ asset('assets/css/chartist.min.css') }}">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet"href="{{ asset('assets/js/calendar/bootstrap_calendar.css') }}">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>control Admin</title>
  </head>
  <body>
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Ez<span class="small">Admin</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                    </div>

                    
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="{{ URL('assets/img/client-img4.png') }}" alt="" class="rounded-circle" />
                        <p><strong>Admin</strong></p>
                        <span class="text-primary small dash"><strong>Dashboard</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                           
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_elemen'); return false" class=""><i class="fa fa-puzzle-piece mr-4"></i>
                                <span class="none">Category <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_elemen">
                                    <li class="child"><a href="{{ URL('category/index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Show Category</a></li>
                                    <li class="child"><a href="{{ URL('category/create') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Create Category</a></li>
                                   
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i class="fa fa-folder-open mr-4"></i>
                                    <span class="none">Store <i class="fa fa-angle-down pull-right align-botm"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    <li class="child"><a href="{{ URL('stores/index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Show Store</a></li>
                                    <li class="child"><a href="{{ URL('stores/create') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Create Store</a></li>
                                   
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="{{ URL('rating/index') }}"><i class="fa fa-calendar mr-4"></i>
                                    <span class="none">Ratings </span>
                                </a>
                            </li>
                            <li class="parent">
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logout') }}</a>
                                </li>
                            @endif
                        @else
                                <div aria-labelledby="navbarDropdown">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="fa fa-power-off pr-4"></i>   <span class="none">Logout</span> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest

                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <div class="col-sm-9 col-xs-12 content pt-4 pl-0">
            @yield('content_body')
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!--Popper JS-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--Bootstrap-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--Sweet alert JS-->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <!--Progressbar JS-->
    <script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
    <!--Charts-->
    <!--Canvas JS-->
    <script src="{{ asset('assets/js/charts/canvas.min.js') }}"></script>
    <!--Chart JS-->
    <script src="{{ asset('assets/js/charts/chart.min.js') }}"></script>
    <!--Chartist JS-->
    <script src="{{ asset('assets/js/charts/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/charts/demo.js') }}"></script>
    <!--Charts-->
    <!--Bootstrap Calendar JS-->
    <script src="{{ asset('assets/js/calendar/bootstrap_calendar.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/demo.js') }}"></script>
    <!--Bootstrap Calendar-->

    <!--Custom Js Script-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!--Custom Js Script-->
  </body>
</html>