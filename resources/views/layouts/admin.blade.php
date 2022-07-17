<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <title>{{ config('app.name', 'Manvik | Admin dashboard') }}</title> --}}

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Template CSS -->
    <link href="{{ asset('assets/css/float-chart.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- font awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show text-center mmb-0" role="alert">
        <strong>{{ Session::get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
        </button>
      </div>
    @endif
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="{{ route('admin.index') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <img src="{{ asset('/assets/images/logo-icon.png') }}" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!-- Logo text -->
                        <span class="logo-text ms-1">
                            <img src="{{ asset('/assets/images/logo-text.png') }}" alt="homepage"
                                class="light-logo" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <span class="hamburger-icon"><i class="fa-solid fa-bars"></i></span>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><span class="hamburger-icon"><i
                                        class="fa-solid fa-bars"></i></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Assign Role <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item search-box">
                        <a
                          class="nav-link waves-effect waves-dark"
                          href="javascript:void(0)"
                          ><i class="mdi mdi-magnify fs-4"></i
                        ></a>
                        <form class="app-search position-absolute">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Search &amp; enter"
                          />
                          <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                        </form>
                      </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 text-capitalize user-name">{{ Auth::user()->name }} <span
                                            class=""><i class="fa-solid fa-caret-down"></i></span></p>
                                    <img src="{{ asset('/assets/images/users/4.jpg') }}" alt="user"
                                        class="ms-3 rounded-circle user-icon" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated rounded  bg-dark"
                                aria-labelledby="navbarDropdown">
                                <div class="text-end pe-5">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="dropdown-item pt-4 pb-3 text-brand rounded bg-dark"
                                            href="{{ route('logout') }}">
                                            <i class="fa fa-power-off me-1 ms-1"></i> <span
                                                class="log-out">Logout</span>
                                        </a>
                                    </form>
                                </div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt">
                        <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active-menu' : '' }}">
                            <a class="custom-sidebar-link ps-4 waves-effect waves-dark"
                                href="{{ route('admin.index') }}" aria-expanded="false">
                                <span class="menu-icon"><i class="fa-solid fa-table-cells-large"></i></span>
                                <span class="hide-menu ms-3">Dashboard</span>
                            </a>
                        </li>
                        @role('admin')
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="menu-icon"><i class="fa-solid fa-file-signature"></i></span>
                                    <span class="hide-menu ms-2">Expenses </span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level sub-menu-bg ps-2">
                                    <li class="sidebar-item">
                                        <a href="form-basic.html" class="sidebar-link">
                                            <span class="hide-menu"> <span class="sub-menu-icon"><i
                                                        class="fa-solid fa-caret-right"></i></span> Expense List
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-basic.html" class="sidebar-link">
                                            <span class="hide-menu"> <span class="sub-menu-icon"><i
                                                        class="fa-solid fa-caret-right"></i></span> Fabric </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Accessories </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Iron </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i
                                                        class="fa-solid fa-caret-right"></i></span>Equipment Purchase
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Repair Cost </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Transport </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link"><span class="hide-menu"> <span
                                                    class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Rent </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link">
                                            <span class="hide-menu">
                                                <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Suppliers
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="menu-icon"><i class="fa-solid fa-users"></i></span>
                                    <span class="hide-menu ms-2">Employee </span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level bg-sky-blue ps-2">
                                    <li class="sidebar-item">
                                        <a href="icon-material.html" class="sidebar-link"><span class="hide-menu">
                                                <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Employee Details
                                            </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="icon-fontawesome.html" class="sidebar-link">
                                            <span class="hide-menu">
                                                <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                                Employee Salary
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false"><span class="menu-icon"><i
                                            class="fa-solid fa-circle-dollar-to-slot"></i></span><span
                                        class="hide-menu ms-2">Sales </span></a>
                                <ul aria-expanded="false" class="collapse first-level bg-dark-green ps-2">
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Sales List </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Whole Seller </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Retailer </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Reseller </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Merchant </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> CM </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false"><span class="menu-icon"><i
                                            class="fa-solid fa-box-tissue"></i></span><span class="hide-menu ms-2">China
                                        Products </span></a>
                                <ul aria-expanded="false" class="collapse first-level bg-info ps-2">
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Order List </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Order Booking </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false"><span class="menu-icon"><i
                                            class="fa-solid fa-boxes-stacked"></i></span><span
                                        class="hide-menu ms-2">Product Stock </span></a>
                                <ul aria-expanded="false" class="collapse first-level bg-dark-indigo">
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Product List </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                            <span class="hide-menu"> Add Product </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.users.index') }}"
                                    aria-expanded="false">
                                    <span class="menu-icon"><i class="fa-solid fa-user-check"></i></span>
                                    <span class="hide-menu ms-2">Users</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                    aria-expanded="false">
                                    <span class="menu-icon"><i class="fa-solid fa-table-cells"></i></span>
                                    <span class="hide-menu ms-2">Others</span>
                                </a>
                            </li>
                        @endrole
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><span class="menu-icon"><i
                                        class="fa-solid fa-network-wired"></i></span><span
                                    class="hide-menu ms-2">Digital Marketing </span></a>
                            <ul aria-expanded="false" class="collapse first-level bg-dark-red">
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                        <span class="hide-menu"> Digital Marketing List </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                        <span class="hide-menu"> Seller Code </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                        <span class="hide-menu"> Boosting </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                        <span class="hide-menu"> Page Setup </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <span class="sub-menu-icon"><i class="fa-solid fa-caret-right"></i></span>
                                        <span class="hide-menu"> Graphics Work </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <div class="ps-1">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="dropdown-item text-brand " href="{{ route('logout') }}">
                                        <i class="fa fa-power-off me-1 ms-1"></i> <span class="log-out">Logout</span>
                                    </a>
                                </form>
                            </div>
                        </li>
                        {{-- <li class="sidebar-item">
                        <a
                          class="sidebar-link has-arrow waves-effect waves-dark"
                          href="javascript:void(0)"
                          aria-expanded="false"
                          ><i class="mdi mdi-alert"></i
                          ><span class="hide-menu">Errors </span></a
                        >
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item">
                            <a href="error-403.html" class="sidebar-link"
                              ><i class="mdi mdi-alert-octagon"></i
                              ><span class="hide-menu"> Error 403 </span></a
                            >
                          </li>
                          <li class="sidebar-item">
                            <a href="error-404.html" class="sidebar-link"
                              ><i class="mdi mdi-alert-octagon"></i
                              ><span class="hide-menu"> Error 404 </span></a
                            >
                          </li>
                        </ul>
                      </li> --}}
                        {{-- <li class="sidebar-item p-3">
                        <a
                          href="https://github.com/wrappixel/matrix-admin-bt5"
                          target="_blank"
                          class="
                            w-100
                            btn btn-cyan
                            d-flex
                            align-items-center
                            text-white
                          "
                          ><i class="mdi mdi-cloud-download font-20 me-2"></i>Download
                          Free</a
                        >
                      </li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        {{ $slot }}
    </div>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
