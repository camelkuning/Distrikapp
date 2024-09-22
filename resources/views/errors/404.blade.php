<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>404 Error | Distrik Bintuni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Distrik Bintuni" name="description" />
    <meta content="DistrikBintuni" name="author" />
    <!-- App favicon -->
    <link href="{{ asset('assets/img/bintuni.png') }}" rel="icon">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center my-5">
                                <h1 class="fw-bold text-error">4<img src="{{ asset('admin/assets/img/error-img1.png') }}" alt="error-img"
                                        class="error-img">4</h1>
                                <!-- <h2 class="mt-4 fw-bold">Oops !</h2> -->
                                <h3 class=" mt-4"><span class="fw-bold">Oops !</span> Sorry, Page Not Found</h3>
                                <div class="mt-4 text-center">
                                    <a class="btn btn-info waves-effect waves-light" href="{{ route('index') }}"><i
                                            class="mdi mdi-home-outline font-size-16 me-1"></i>Back to
                                        Dashboard</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>
