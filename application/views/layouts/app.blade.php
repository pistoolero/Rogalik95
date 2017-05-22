<!DOCTYPE html>
<html lang="pl">

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
    <link href="{{base_url('public_html/css/notific8.min.css')}}" rel="stylesheet">
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

<body class="elegant-color">
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
            {{--<a class="navbar-brand" href="#">--}}
                {{--<strong>Navbar</strong>--}}
            {{--</a>--}}
            <div class="collapse navbar-collapse  text-shadow-1" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{set_active("index")}}">
                        <a class="nav-link" href="{{base_url()}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{set_active("counter")}}">
                        <a class="nav-link" href="{{base_url('counter')}}">Licznik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="youtube-link" target="_blank">YouTube</a>
                    </li>
                    <li class="nav- {{set_active("shop")}}">
                        <a class="nav-link" href="{{base_url('shop')}}">Sklep</a>
                    </li>
                    <li class="nav- {{set_active("about")}}">
                        <a class="nav-link" href="{{base_url('about')}}">O mnie</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-fw fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-fw fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-fw fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text z-depth-1" data-ride="carousel" data-interval="false">
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


    <!--Content-->
    <div class="container-fluid m-0">
       @yield('video-bg')
        <div class="container pt-3 pb-3">
         @yield('content')
        </div>
     </div>
    <!--/.Content-->



    <!--Footer-->
    <footer id="footer" class="page-footer mt-0 center-on-small-only z-depth-2 text-shadow-1">        <!--Copyright-->
        <div class="footer-copyright">
            <span class="col">© 2017 Copyright: <a href="#"> Rogalik95 </a></span>
            <span class="col push-md-3 push-sm-2 push-lg-4 pr-1">
                @if(!$this->ion_auth->logged_in())
                <a href="{{base_url('login')}}"><small>Logowanie</small></a>
                    @else
                    <a href="{{base_url('logout')}}"><small>Wyloguj</small></a>
                @endif
            </span>
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
    <script type="text/javascript" src="{{base_url('public_html/js/notific8.min.js')}}"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=dxlf11gafsevwot1sm4vgszyn223lmbb5vccvnfnnr8qd1w3"></script>


    <script>
    new WOW().init();
    </script>
    <script type="text/javascript" src="{{base_url('public_html/js/site.js')}}" async>
    </script>
</body>

</html>
