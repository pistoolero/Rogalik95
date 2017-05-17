<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{base_url('public_html/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{base_url('public_html/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{base_url('public_html/css/style.css')}}" rel="stylesheet">

    <link href="{{base_url('public_html/css/odometer-theme-minimal.css')}}" rel="stylesheet">
    <!-- Template styles -->
   <style rel="stylesheet">
       /* TEMPLATE STYLES */
       /* Necessary for full page carousel*/

       html,
       body {
           height: 100%;
       }
       /* Navigation*/

       .navbar {
           background-color: transparent;
       }

       .top-nav-collapse {
           background-color: #0288d1 ;
       }

       footer.page-footer {
           background-color: #0288d1 ;
       }

       @media only screen and (max-width: 768px) {
           .navbar {
               background-color: #4285F4;
           }
       }

       .scrolling-navbar {
           -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
           -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
           transition: background .5s ease-in-out, padding .5s ease-in-out;
       }
       /* Carousel*/

       .carousel {
           height: 30%;
       }

       @media (max-width: 776px) {
           .carousel {
               height: 15%;
           }
       }

       .carousel-item,
       .active {
           height: 100%;
       }

       .carousel-inner {
           height: 100%;
       }

       /*Caption*/

       .flex-center {
           color: #fff;
       }
   </style>
</head>

<body class="elegant-color-dark">
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
    <!-- Start your project here-->
    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <strong>Navbar</strong>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{set_active("index")}}">
                        <a class="nav-link" href="{{base_url()}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{set_active("counter")}}">
                        <a class="nav-link" href="{{base_url('counter')}}">Licznik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About</a>
                    </li>
                </ul>
                <form class="form-inline waves-effect waves-light">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
      <!--  <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
      -->
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" id="channelBackground" style="background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->


        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
    @yield('content')
  </div>
    <!--/.Content-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Recent Trips</h5>
                    <ul>
                        <li><a href="#!">Balkans</a></li>
                        <li><a href="#!">Tatra Mountains</a></li>
                        <li><a href="#!">Norway Fjords</a></li>
                        <li><a href="#!">Baikal Lake</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">My guest articles</h5>
                    <ul>
                        <li><a href="#!">"Things I learn on the road"</a></li>
                        <li><a href="#!">"Low-budget traveling made simple"</a></li>
                        <li><a href="#!">"Talking with locals"</a></li>
                        <li><a href="#!">"Leaving things behind"</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Follow me on</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Instagram</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Pinterest</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info" rel="nofollow">Sign up!</a></li>
                <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{base_url('public_html/js/jquery-3.1.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{base_url('public_html/js/tether.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{base_url('public_html/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{base_url('public_html/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{base_url('public_html/js/odometer.min.js')}}"></script>



    <script>
    new WOW().init();
    </script>
    <script type="text/javascript" src="{{base_url('public_html/js/site.js')}}" async>
    </script>
</body>

</html>
