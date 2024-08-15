@extends('layouts.main')
@section('title', 'Hallo | Visi & Misi')
@section('content')
    <div class="index-page">
        <main class="main">
            <!-- Page Title -->
            <div class="page-title light-background">
                <div class="container">
                    <h1>Visi & Misi Daerah</h1>
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/">Profil</a></li>
                            <li class="current">Visi & Misi Daerah</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- End Page Title -->

            <!-- About 2 Section -->
            <section id="about-2" class="about-2 section">

                <div class="container">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                                <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                                    <div class="img">
                                        <img src="https://mcwnews.com/uploads/berita/berita_1718528561.webp"
                                            alt="circle image" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                                <div class="px-3">
                                    <span class="content-subtitle">BUPATI DAN WAKIL BUPATI</span>
                                    <h2 class="content-title text-start">
                                        Kabupaten Teluk Bintuni
                                    </h2>
                                    <p class="lead">
                                        Visi & Misi
                                    </p>
                                    <p class="mb-5">
                                        1. Mewujudkan pembangunan sumberdaya manusia yang berkualitas, terampil dan berdaya
                                        saing;<br>
                                        2. Mewujudkan percepatan pembangunan infrastruktur daerah yang terfokus pada wilayah
                                        terisolir,<br> 3. kurang berkembang, wilayah perbatasan, pesisir dan pulau-pulau
                                        kecil, wilayah rentan <br>bencana 4. alam, kampung-kampung, kawasan pegunungan dan
                                        rawa-rawa;<br>
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

        </main>
    </div>
@endsection
