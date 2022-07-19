<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/header-colors.css')}}"/>
    <title>Admin-Panel BUGFIX IT BD</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="topbar-logo-header">
                    <div class="">
                        <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                    </div>
                    <div class="">
                        <h4 class="logo-text">Bugfix IT BD Limited</h4>
                    </div>
                </div>
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span
                            class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i
                                class='bx bx-x'></i></span>
                    </div>
                </div>

                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
{{--                        <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">--}}
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">Admin</p>
                            <p class="designattion mb-0">User</p>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class="nav-container">
        <div class="mobile-topbar-header">
            <div>
                <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Bugfix IT BD Limited</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
    </div>
    <!--end navigation-->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Applications</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Panel</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">

                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="my-3">Dashboard</h5>
                            <div class="fm-menu">
                                <div class="list-group list-group-flush">
                                    <a href="{{route('admin.home')}}" class="list-group-item py-1"><i
                                            class='bx bx-home me-2'></i><span>Home</span></a>

                                    <a href="{{route('admin.specialization.list')}}" class="list-group-item py-1"><i
                                            class='bx bx-devices me-2'></i><span>Specialization</span></a>

                                    <a href="{{route('admin.message.list')}}" class="list-group-item py-1"><i
                                            class='bx bx-fast-forward-circle me-2'></i><span>Team</span></a>

                                    <a href="{{route('admin.project.list')}}" class="list-group-item py-1"><i
                                            class='bx bx-plug me-2'></i><span>Projects</span></a>

                                    <a href="{{route('admin.partner.list')}}" class="list-group-item py-1"><i
                                            class='bx bxl-product-hunt me-2'></i><span>Partners</span></a>

                                    <a href="{{route('admin.testimonial.list')}}" class="list-group-item py-1"><i
                                            class='bx bx-unite me-2'></i><span>Testimonials</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">

                        @include('alert.messages')
                        @yield('content')

                        <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->
{{--<!--start switcher-->--}}
{{--<div class="switcher-wrapper">--}}
{{--    <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i>--}}
{{--    </div>--}}
{{--    <div class="switcher-body">--}}
{{--        <div class="d-flex align-items-center">--}}
{{--            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>--}}
{{--            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <h6 class="mb-0">Theme Styles</h6>--}}
{{--        <hr/>--}}
{{--        <div class="d-flex align-items-center justify-content-between">--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>--}}
{{--                <label class="form-check-label" for="lightmode">Light</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">--}}
{{--                <label class="form-check-label" for="darkmode">Dark</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">--}}
{{--                <label class="form-check-label" for="semidark">Semi Dark</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">--}}
{{--            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <h6 class="mb-0">Header Colors</h6>--}}
{{--        <hr/>--}}
{{--        <div class="header-colors-indigators">--}}
{{--            <div class="row row-cols-auto g-3">--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor1" id="headercolor1"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor2" id="headercolor2"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor3" id="headercolor3"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor4" id="headercolor4"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor5" id="headercolor5"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor6" id="headercolor6"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor7" id="headercolor7"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor8" id="headercolor8"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!--end switcher-->--}}
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--app JS-->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('subtitle');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>

<script>
    CKEDITOR.replace('link');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>

<script>
    CKEDITOR.replace('description');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>

<script>
    CKEDITOR.replace('message');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>

<script>
    CKEDITOR.replace('projectBrief');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>

<script>
    CKEDITOR.replace('quote');
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>
</body>

</html>
