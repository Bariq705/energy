<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed layout-header-fixed">


<!-- Mirrored from html.phoenixcoded.net/auric/bootstrap/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 23:58:53 GMT -->
<head>
    <title>Auric | B4+ admin template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Auric Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Auric, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" class="style-link">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layout.sidebar')
            <!-- [ Layout sidenav ] End -->

            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layout.navbar-header')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                @yield('content')
                <!-- [ Layout content ] Start -->
                @include('layout.footer')
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->
    <!-- Core scripts -->
    <script src="{{asset('assets/js/vendor.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard-main.js')}}"></script>
    <!-- Demo -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>


<!-- Mirrored from html.phoenixcoded.net/auric/bootstrap/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Aug 2022 00:02:53 GMT -->
</html>
