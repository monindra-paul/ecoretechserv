<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ECore TechServ</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/logo_main.png') }}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('backend/gins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />
</head>

<body>
    <!-- header -->
    @include('backend.common.header')
    <!-- header end -->
    <!-- sidebar -->
    @include('backend.common.sidebar')
    <!-- sidebar end -->

    @yield('content')


    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('backend/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/js/index.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.dashboard-social-list');
        new PerfectScrollbar('.dashboard-top-countries');
    </script>
</body>
</html>
