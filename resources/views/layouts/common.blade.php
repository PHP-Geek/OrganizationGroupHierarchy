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
        <link href="{{ url('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <!--        <link href="{{ url('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />-->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ url('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url('/assets/global/css/plugins.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ url('/assets/pages/css/login-3.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ url('/assets/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ url('assets/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/css/custom.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

        <script src="{{ url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ url('/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.min.js"></script></head>
    <script>
var base_url = '{{url("/")}}';
    </script>

    <style>
        .login {
            background:url("images/bg.png");
        }
        .login .content {
            background-color: #417D6B;
        }
        .login .content .form-actions, .captcha .captcha-body {
            background-color: #417D6B;
        }
        .login .content h4, .captcha .captcha-body, .captcha  {
            color: #fff;
        }
        .login .logo {
            margin: 100px auto 20px;
        }
        .login-custom-header .page-header-inner {
            background: rgba(0,0,0, 0.3);
        }
        .login-custom-header .page-header-inner {
            padding: 14px;
        }
        .top-menu .navbar-nav li a{
            background: transparent;
        }
        .top-menu .navbar-nav li a, .page-logo .intro{
            font-size: 16px;
            color: #fff;
            font-weight: 500;
        }
        .top-menu .navbar-nav li a:hover{
            color: #32c5d2; 
        }
        .top-menu .navbar-nav li a, .page-logo a{
            text-decoration: none;
            display: inline-block;
            vertical-align: middle;
        }
        .page-logo .intro{
            margin-left: 10px;
        }
        .login-custom-header .page-header-inner .navbar-brand{
            padding: 6px;
        }
    </style>

    <body class="login">
        {{csrf_field()}}
        <div class="login-custom-header">
            <div class="navbar navbar-fixed-top">
                <div class="navbar navbar-fixed-top" role="navigation">
                    <div class="page-header-inner">
                        <div class="container">
                            <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
                                    <span class="icon-bar bg-white"></span>
                                    <span class="icon-bar bg-white"></span>
                                    <span class="icon-bar bg-white"></span>
                                </button>
                                <a class="navbar-brand" href="javascript:;">
                                    <div class="page-logo">
                                        <img style="max-height:40px;" src="{{ url('/assets/customer_admin/images/logo-login.png')}}" alt="logo" class="logo-default">
                                        <span class="intro">
                                            Introduction
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <div class="top-menu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php $currentRoute = Route::getFacadeRoot()->current()->uri(); ?>

                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="javascript:;">Contact Us</a></li>
                                        <?php if (in_array($currentRoute, ['login'])) { ?>

                                            <li class=""><a href="{{url('/signup')}}">Sign Up</a></li>
                                        <?php } else { ?>

                                            <li class=""><a href="{{url('/login')}}">Login</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div><!-- /.nav-collapse -->
                        </div><!-- /.container -->
                    </div>
                </div><!-- /.navbar -->

            </div>
        </div>


        <!--      <div class="page-header-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 col-xs-6">
        
                                    </div>
                                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span></span>
                                    </a>
                                    <div class="col-md-7 col-sm-6 col-xs-6">
                                        <div class="top-menu">
                                            <ul class="nav navbar-nav pull-right">
        <?php $currentRoute = Route::getFacadeRoot()->current()->uri(); ?>
        
        
                                                <li><a href="javascript:;">Help</a></li>
                                                <li><a href="javascript:;">Contact Us</a></li>
        <?php if (in_array($currentRoute, ['login'])) { ?>
                            
                                                                        <li class=""><a href="{{url('/signup')}}">Sign Up</a></li>
        <?php } else { ?>
                            
                                                                        <li class=""><a href="{{url('/login')}}">Login</a></li>
        <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>-->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <!--        <a href="index.php">
                        <img src="images/logo-vadi.png" alt="logo" class="logo-default center-block img-responsive">
                    </a>-->
           
        </div>

        @yield('content')
        <!-- END HEADER -->

    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ url('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ url('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ url('/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="{{ url('/assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ url('/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/layout3/scripts/demo.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
    <script>
$(document).ready(function () {
    $('.dropdown-submenu a.test').on("click", function (e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});


    </script>
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>