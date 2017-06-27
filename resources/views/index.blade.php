
<html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/lato-webfont.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css"/>

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>



        
    </head>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->

    <nav class="navbar col-lg-3 navbar-fixed-top Pagnav" style="background-color: #330033">
        <div style="margin: 150px 0px;">
            @yield('nab')
        </div>


    </nav>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/images/logo1.png" alt="" /></a>
            </div>
            @yield('menu')
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="{{'home'}}">Home</a></li>
                                <li class="active"><a href="{{'login'}}">Login</a></li>
                            </ul>
                        </div> /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <!--Home page style-->
    <header id="home" class="home" style="margin: 0px 200px;" >

        <div class="container" style="margin: 100px 40px" >

            <div class="row">

                <div class="container">



                    @yield('content')



                </div>
            </div>

        </div>

    </header>




    <!--Footer-->
    <footer id="footer" class="footer colorsbg">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12 col-lg-offset-3">
                    <div class="copyright text-left">
                        <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="copyright text-right">
                        <p>Terms of Service | Privacy Policy</p>
                    </div>
                </div>

            </div>
        </div>

    </footer>


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>


    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="assets/js/gmaps.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</html>
