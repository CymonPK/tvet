<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Font Awesome Icons -->
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Added DataTables -->
    <link href="{{ asset('js/plugins/dataTables/dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('js/plugins/dataTables/Buttons-1.5.1/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables/dataTables.tableTools.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    @yield("styles")
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
     @include('layouts.includes.nav')
      @include('layouts.includes.aside')
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <!-- AdminLTE -->
    <script src="{{ asset('js/adminlte.js') }}"></script>

    <script src="{{ asset('js/plugins/dataTables/dataTables.min.js') }}"></script>

    <script src="{{ asset('js/plugins/dataTables/Buttons-1.5.1/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/JSZip-2.5.0/jszip.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/pdfmake-0.1.32/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/Buttons-1.5.1/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/Buttons-1.5.1/js/buttons.print.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('js/custom.js') }}"></script>
     @stack("scripts")
</body>
</html>
