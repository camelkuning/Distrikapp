@extends('admin.templates.main')
@section('title-admin', 'Beranda Admin | Distrik Bintuni')
@section('css-addons')
<!-- Plugins css -->
<link href="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content-main')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Form Editor</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Editor</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-bold fs-2">Tambah Konten beranda</h4>
                    <p class="card-title-desc">Form editor ini dirancang untuk menambah konten di beranda sistem ini.
                        Dengan antarmuka yang sederhana, pengguna dapat dengan mudah memasukkan teks dan mengirimkan
                        konten baru.</p>

                    <div>
                        <form method="post" action="{{ route('admin.uploadberanda') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basicpill-judul-input">Judul Beranda</label>
                                <input type="text" class="form-control" id="basicpill-judul-input" name="judul_beranda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basicpill-deskripsi-input">Deskripsi</label>
                                <textarea id="elm1" name="deskripsi_beranda"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Unggah Gambar</label>
                                <input class="form-control" type="file" id="formFileMultiple" name="file[]" multiple>
                                <span class="text-dark fst-italic">File harus bertipe jpg, png, dan jpeg</span>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                        <!-- end form -->
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
<!-- container-fluid -->
@endsection
@section('js-addons')
<!--tinymce js-->
<script src="{{ asset('admin/assets/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/tinymce/tinymce.js') }}"></script>
<!-- init js -->
<script src="{{ asset('admin/assets/js/pages/form-editor.init.js') }}"></script>

<script src="{{ asset('admin/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection
