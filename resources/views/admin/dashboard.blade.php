@extends('admin.templates.main')
@section('title-admin', 'Dashboard Admin | Distrik Bintuni')
@section('content-main')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <!-- end ol -->
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <h3 class="mb-3"><span class="counter_value" data-target="504">0</span>
                                        </h3>
                                    </div>
                                </div>
                                <h5 class="text-muted font-size-14 mb-0">Total Pengunjung</h5>
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <h3 class="mb-3"><span class="counter_value" data-target="200">0</span>
                                        </h3>
                                    </div>
                                </div>
                                <h5 class="text-muted font-size-14 mb-0">Total Berita</h5>
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <h3 class="mb-3"><span class="counter_value" data-target="30">30</span>
                                        </h3>
                                    </div>
                                </div>
                                <h5 class="text-muted font-size-14 mb-0">Galeri</h5>
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <div class="d-flex">
                                    <div class="flex-1">
                                        <h3 class="mb-3"><span class="counter_value" data-target="15">15</span>
                                        </h3>
                                    </div>
                                </div>
                                <h5 class="text-muted font-size-14 mb-0">Kritik dan Saran</h5>
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container-fluid -->
@endsection
