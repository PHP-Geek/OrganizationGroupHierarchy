<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Vadi</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/morris/morris.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ url('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <!--<link href="{{ url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />-->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ url('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/pages/css/login-3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ url('/assets/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ url('/assets/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/css/custom.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ url('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css" />
        <script type="text/javascript" src="//cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
        <script src="{{ url('assets/global/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<!--	 <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.min.js"></script>

        <script src="{{ url('/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
        <script src="{{ url('/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}" type="text/javascript"></script>
        <script> var base_url = '{{url("/")}}';</script>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <body class="page-container-bg-solid">
        {{csrf_field()}}
        <div class="page-wrapper-row"> 

            <div class="page-wrapper-top">
                <!-- BEGIN HEADER -->
                <div class="page-header">

                    <!-- BEGIN HEADER TOP -->
                    <div class="page-header-top">
                        <div class="container-fluid">
                            <!-- BEGIN LOGO -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="page-logo">
                                        <a href="{{url('/home')}}">
                                            <img src="{{ url('images/logo-vadi.png')}}" alt="logo" class="logo-default">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-menu">
                                        <ul class="nav navbar-nav pull-right">

                                            <!--                              
                                            <!--                                    BEGIN INBOX DROPDOWN -->
                                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                                <!--                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                            <span class="circle">3</span>
                                                                                            <span class="corner"></span>
                                                                                        </a>-->
                                                <ul class="dropdown-menu">
                                                    <!--                                            <li class="external">
                                                                                                    <h3>You have
                                                                                                        <strong>7 New</strong> Messages</h3>
                                                                                                    <a href="app_inbox.html">view all</a>
                                                                                                </li>-->
                                                    <li>
                                                        <ul class="dropdown-menu-list scroller">
                                                            <li>
                                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="{{ url('assets/layouts/layout3/img/avatar2.jpg')}}" class="img-circle" alt=""> </span>
                                                                    <span class="subject">
                                                                        <span class="from"> Lisa Wong </span>
                                                                        <span class="time">Just Now </span>
                                                                    </span>
                                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="{{ url('assets/layouts/layout3/img/avatar3.jpg')}}" class="img-circle" alt=""> </span>
                                                                    <span class="subject">
                                                                        <span class="from"> Richard Doe </span>
                                                                        <span class="time">16 mins </span>
                                                                    </span>
                                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="{{url('/assets/layouts/layout3/img/avatar1.jpg')}}" class="img-circle" alt=""> </span>
                                                                    <span class="subject">
                                                                        <span class="from"> Bob Nilson </span>
                                                                        <span class="time">2 hrs </span>
                                                                    </span>
                                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="{{url('/assets/layouts/layout3/img/avatar2.jpg')}}" class="img-circle" alt=""> </span>
                                                                    <span class="subject">
                                                                        <span class="from"> Lisa Wong </span>
                                                                        <span class="time">40 mins </span>
                                                                    </span>
                                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="{{url('/assets/layouts/layout3/img/avatar3.jpg')}}" class="img-circle" alt=""> </span>
                                                                    <span class="subject">
                                                                        <span class="from"> Richard Doe </span>
                                                                        <span class="time">46 mins </span>
                                                                    </span>
                                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown dropdown-user dropdown-dark">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <img alt="" class="img-circle" src="{{url('/assets/layouts/layout3/img/avatar9.jpg')}}">
                                                    <span class="username username-hide-mobile">{{Auth::user()->firstName.' '.Auth::user()->lastName}}</span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-default">
                                                    <li>
                                                        <a href="{{url('/profile')}}">
                                                            <i class="icon-user"></i> My Profile </a>
                                                    </li>

                                                    <li class="divider"> </li>

                                                    <li>
                                                        <a href="{{url('/logout')}}">
                                                            <i class="icon-key"></i> Log Out </a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END LOGO -->
                            <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                            <!-- END RESPONSIVE MENU TOGGLER -->
                            <!-- BEGIN TOP NAVIGATION MENU -->
                            <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">
                                </ul>
                            </div>
                            <!-- END TOP NAVIGATION MENU -->
                        </div>
                    </div>

                    @include('layouts.includes.menu.'.Auth::user()->userRole[0]->roleUrlPrefix) 

                    <!-- END MEGA MENU -->
                </div>
            </div>
            @yield('content')
        </div>
        <!--</div>-->

        <div class="page-wrapper-row">
            <div class="page-wrapper-bottom">
                <!-- BEGIN FOOTER -->
                <!-- BEGIN PRE-FOOTER -->
                <div class="page-prefooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12 footer-block">
                                <h2 class="color-white-soft">About</h2>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs12 footer-block">
                                <h2 class="color-white-soft">Subscribe Email</h2>
                                <div class="subscribe-form">
                                    <form action="javascript:;">
                                        <div class="input-group">
                                            <input type="text" placeholder="mail@email.com" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn" type="submit">Submit</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--			    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                                            <h2>Follow Us On</h2>
                                                            <ul class="social-icons">
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                                                </li>
                                                            </ul>
                                                        </div>-->
                            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                <h2 class="color-white-soft">Contacts</h2>
                                <address class="margin-bottom-40"> Phone: 800 123 3456
                                    <br> Email:
                                    <a class="font-yellow-soft" href="#">info@vadi.com</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRE-FOOTER -->
                <!-- BEGIN INNER FOOTER -->
                <div class="page-footer">
                    <div class="container"> 2018 &copy;
                        <a target="_blank" href="#">Vadi</a>
                    </div>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
                <!-- END INNER FOOTER -->
                <!-- END FOOTER -->
            </div>
        </div>
    </div>
    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
    <script src=".../../assets/global/plugins/respond.min.js"></script>
    <script src=".../../assets/global/plugins/excanvas.min.js"></script> 
    <script src=".../../assets/global/plugins/ie8.fix.min.js"></script> 
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ url('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <!--<script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>-->
    <!--<script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>-->
    <!--<script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>-->
    <script src="{{ url('/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!--    <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
     END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ url('/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--<script src="{{ url('assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>-->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ url('/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/layout3/scripts/demo.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
    <script>
$('.date').datepicker({
    autoclose: true,
    clearBtn: true,
    format: 'mm/dd/yyyy'
});
    </script>
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>