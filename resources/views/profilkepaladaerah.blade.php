@extends('layouts.main')
@section('title', 'Hallo | Profil Kepala Daerah')
@section('content')
    <div class="index-page">
        <main class="main">
            <div class="page-title light-background">
                <div class="container">
                    <h1>Profil Distrik</h1>
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/">Profil</a></li>
                            <li class="current">Profil Kepala Daerah</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- End Page Title -->

            <!-- About 2 Section -->
            <section id="about-2" class="about-2 section light-background">

                <div class="container">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                                <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                                    <div class="img">
                                        <img src="https://telukbintunikab.go.id/upload/Settings/Bupati.jpg" alt="circle image" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                                <div class="px-3">
                                    <span class="content-subtitle">BUPATI KABUPATEN TELUK BINTUNI</span>
                                    <h2 class="content-title text-start">
                                        Ir. Petrus Kasihiw, M.T.
                                    </h2>
                                    <p class="lead">
                                        isi tulisan
                                    </p>
                                    <p class="mb-5">
                                        isi tulisan
                                    </p>
                                    {{-- <p>
                                        <a href="#" class="btn-get-started">Get Started</a>
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /About 2 Section -->

            <section id="stats" class="stats section light-background">

                <div class="container">

                    <div class="row gy-4 justify-content-center">

                        <div class="col-lg-5">
                            <div class="images-overlap">
                                <img src="https://telukbintunikab.go.id/upload/Settings/wabup.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
                            </div>
                        </div>

                        <div class="col-lg-4 ps-lg-5">
                            <span class="content-subtitle">WAKIL BUPATI KABUPATEN TELUK BINTUNI</span>
                            <h2 class="content-title">Matret Kokop, S.H.</h2>
                            <p class="lead">
                               isi tulisan
                            </p>
                            <p class="mb-5">
                               isi tulisan
                            </p>
        </main>
    </div>
@endsection
