<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('assets/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('assets/backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <!-- App-dark css -->
        <link href="{{ asset('assets/backend/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled"/>
        <link href="{{ asset('assets/backend/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled"/>

        <!-- icons -->
        <link href="{{ asset('assets/backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "dark", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('assets/backend/assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('assets/backend/assets/images/users/user-5.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div> 
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/backend/assets/images/users/user-1.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/backend/assets/images/users/user-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/backend/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Nowak <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="contacts-profile.html" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="auth-logout.html" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/backend/assets/images/Weli Travel Logo_-08.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/backend/assets/images/Weli Travel Logo_-10.svg')}}" alt="" height="83">
                            </span>
                        </a>
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/backend/assets/images/Weli Travel Logo_-08.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/backend/assets/images/Weli Travel Logo_-09.svg')}}" alt="" height="83">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Dashboard</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                     <!-- User box -->
                    <div class="user-box text-center">

                        <img src="{{ asset('assets/backend/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">Nowak Helme</a>
                                <div class="dropdown-menu user-pro-dropdown">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user me-1"></i>
                                        <span>My Account</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Settings</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="fe-log-out me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                    
                                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                       @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-responsive-nav-link>
                                    </form>
        
                                </div>
                            </div>

                        <p class="text-muted left-user-info">Admin Head</p>

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted left-user-info">
                                    <i class="mdi mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="index.html">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span class="badge bg-success rounded-pill float-end">9+</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="#email" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> About Us </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="email">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.aboutus') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addaboutus') }}">Add New</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarTasks" data-bs-toggle="collapse">
                                    <i class="mdi mdi-cbook-open-page-variant-outline"></i>
                                    <span> Blog </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTasks">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.blog') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addblog') }}">Add Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#bookingTerms" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Booking terms </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="bookingTerms">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.booking') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addbooking') }}">Add Terms</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#Category" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="Category">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.category') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addcategory') }}">Add Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#Commitments" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Commitments </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="Commitments">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.commitments') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.commit_add') }}">Add Commitments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#contacts" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Contacts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="contacts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.contacts') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addcontacts') }}">Add Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#counters" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Counters </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="counters">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.counters') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addcounters') }}">Add Counters</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#facts" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Facts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="facts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.facts') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addfacts') }}">Add Facts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#faqs" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Faqs </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="faqs">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.faqs') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addfaqs') }}">Add Faqs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#gallery" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Gallery </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="gallery">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.gallery') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addgallery') }}">Add Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#hotels" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Hotel bookings </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="hotels">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.bookings') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addbookings') }}">Add Hotel</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#packages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Packages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="packages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.packages') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addpackages') }}">Add Package</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#services" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Services </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="services">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.services') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addservices') }}">Add Service</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#slider" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Slider </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="slider">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.slider') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addslider') }}">Add Slider</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.slidersetting') }}">Slider Setting</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#teams" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Teams </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="teams">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.teams') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addteams') }}">Add Team</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#testimonils" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Testimonils </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="testimonils">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.testimonils') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addtestimonils') }}">Add Testimony</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#tours" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Tours </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="tours">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.tours') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addtours') }}">Add Tour</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#wallpapers" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Wallpapers </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="wallpapers">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.wallpapers') }}">All</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.addwallpapers') }}">Add Wallpaper</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    {{ $slot }}

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>
        
                <!-- Tab panes -->
                <div class="tab-content pt-0">  

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand" id="brand-check" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftsidebar-user" value="fixed" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="{{ asset('assets/backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('assets/backend/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/backend/assets/libs/morris.js06/morris.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/libs/raphael/raphael.min.js')}}"></script>
  
        <!-- Dashboar init js-->
        <script src="{{ asset('assets/backend/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset('assets/backend/assets/js/app.min.js')}}"></script>
        @livewireScripts()
    </body>
</html>