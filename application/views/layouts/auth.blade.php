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
    <link href="{{base_url('public_html/css/auth.css')}}" rel="stylesheet">

    <link href="{{base_url('public_html/css/odometer-theme-minimal.css')}}" rel="stylesheet">
</head>
<body>
@yield('content')
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
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