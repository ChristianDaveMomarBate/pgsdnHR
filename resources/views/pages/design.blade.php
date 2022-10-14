<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quatantech</title>
    <link rel="stylesheet" href="{{ asset('/assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/demo_1/style.css') }}">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="header-fixed">
    <nav class="t-header">
        <div class="t-header-brand-wrapper text-center" style="margin-top:30px; margin-left:30px;">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="/assets/images/profile/male/image_1.jpg"
                        alt="profile image">
                </div>
            </div>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                            autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i
                                class="mdi mdi-arrow-right-thick"></i></button>
                    </div>
                </form>
                <h4 class="logo text-center mt-50 "><img class="logo" src="images/logo.webp"></h4>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-apps mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Aministrative Panel </h6>
                                <p class="dropdown-title-text mt-2">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="dropdown-body border-top pt-0">
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-notification-clear-all mdi-2x"></i>
                                    <span class="grid-tittle">Notif</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-face mdi-2x" data-toggle="modal"
                                        data-target="#formCredentials"></i>
                                    <span class="grid-tittle">Credentials</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-folder-multiple-image mdi-2x" data-toggle="modal"
                                        data-target="#formImage"></i>
                                    <span class="grid-tittle">Profile</span>
                                </a>
                                <a class="dropdown-grid">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <i class="grid-icon mdi mdi-logout mdi-2x" href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"></i>
                                    </form>
                                    <span class="grid-tittle">Sign-out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-body">
        <a href="/" class="btn btn-dark rounded-pill"
            style="font-size:13px; z-index:100; position: fixed; bottom:10px; right:10px;">Visitors Page</a>
        <div class="sidebar">
            <ul class="navigation-menu">
                <li class="nav-category-divider"></li>
                <li>
                    <a href="/dashboard">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#manage" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Management</span>
                        <i class="mdi mdi-newspaper link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="manage">
                        <li>
                            <a href="/product" style="color: rgb(0, 0, 0);">Products</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Shop</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Payment</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Bugs and Feedback</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Control-Panel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#reports" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Reports</span>
                        <i class="mdi mdi-newspaper link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="reports">
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Sales Reports</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Receipt</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Customers Query</a>
                        </li>
                        <li>
                            <a href="#" style="color: rgb(0, 0, 0);">Bugs and Feedback</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="link-title">Partnerships</span>
                        <i class="mdi mdi-currency-usd link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="link-title">Delivery</span>
                        <i class="mdi mdi-car link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="link-title">Events</span>
                        <i class="mdi mdi-calendar-multiple-check link-icon"></i>
                    </a>
                </li>
                <li class="nav-category-divider">WEBSITE MAINTENANCE</li>
                <li>
                    <a href="#">
                        <span class="link-title">Settings</span>
                        <i class="mdi mdi-settings link-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="page-content-wrapper-inner">
            <div class="content-viewport">
                @yield('content')
                @yield('script')
            </div>
        </div>
    </div>
    <form action="">
        <div class="modal fade" id="formImage" tabindex="-1" role="dialog" aria-labelledby="formImage"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formImage">Upload Administrative Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 text-center ">
                                <img class="image text-center rounded-circle"
                                    src="/assets/images/profile/male/image_1.jpg" alt="profile image"
                                    style="width:200px; height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="form-control " name=""type="file">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="">
        <div class="modal fade" id="formCredentials" tabindex="-1" role="dialog"
            aria-labelledby="formCredentials" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formCredentials">Update Credentials</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 text-center">
                            <input class="form-control border border-dark" type="email" placeholder="Change Email">
                            <br>
                            <input class="form-control border border-dark" type="text" placeholder="Change Name">
                            <br>
                            <input class="form-control border border-dark " type="password"
                                placeholder="Change Password">
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark">Update Credentials</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="/assets/vendors/js/core.js"></script>
<script src="/assets/js/template.js"></script>
<script src="/assets/js/dashboard.js"></script>

</html>
