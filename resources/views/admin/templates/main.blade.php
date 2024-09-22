<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title-admin')
    </title>
    <meta content="Distrik Bintuni" name="description" />
    <meta content="DistrikBintuni" name="author" />
    <!-- Favicons -->
    <link href="{{ asset('assets/img/bintuni.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @yield('css-addons')
</head>

<body data-topbar="dark">

    <div id="layout-wrapper">
        @include('admin.templates.header')
        @include('admin.templates.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @yield('content-main')
            </div>
            <!-- End Page-content -->

            {{-- Footer --}}
            @include('admin.templates.footer')
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    @yield('js-addons')
</body>

</html>
