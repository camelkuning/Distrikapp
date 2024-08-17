@extends('layouts.main')
@section('title', 'Hallo | Profil Distrik')
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
                            <li class="current">Profil Distrik</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- End Page Title -->

            <section id="about" class="about section">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <!-- Bagian Penjelasan -->
                  <div class="col-lg-4 order-lg-1" data-aos="fade-up">
                    <div class="info-box p-3 border rounded bg-light shadow-sm">
                      <h4>Distrik Bintuni Timur</h4>
                      <hr>
                      <p><strong>Batas Distrik:</strong></p>
                      <p>Utara: -</p>
                      <p>Timur: -</p>
                      <p>Selatan: -</p>
                      <p>Barat: -</p>
                      <hr>
                      <p><strong>Luas Wilayah:</strong> -</p>
                      <p><strong>Jumlah Penduduk:</strong> -</p>
                      <p><strong>Kode Kemendagri:</strong> -</p>
                    </div>
                  </div>
            
                  <!-- Bagian Peta -->
                  <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper init-swiper">
                      <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          },
                          "breakpoints": {
                            "320": {
                              "slidesPerView": 1,
                              "spaceBetween": 40
                            },
                            "1200": {
                              "slidesPerView": 1,
                              "spaceBetween": 1
                            }
                          }
                        }
                      </script>
            
                      <div class="img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255169.82378007457!2d133.41295239792927!3d-2.142766092706149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d4e65e9f483d6e3%3A0x945cb0d778b5a8ad!2sBintuni%2C%20Teluk%20Bintuni%20Regency%2C%20West%20Papua!5e0!3m2!1sen!2sid!4v1723787500608!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- /About Section -->
            

            
            </section><!-- /Services Section -->

            {{-- <!-- Stats Section -->
            <section id="stats" class="stats section light-background">
                <div class="container">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-5">
                            <div class="images-overlap">
                                <img src="https://papuabarat.bpk.go.id/wp-content/uploads/2009/03/adminsitrasi-teluk-bintuni.jpg"
                                    alt="student" class="img-fluid img-1" data-aos="fade-up">
                            </div>
                        </div>
                        <div class="col-lg-4 ps-lg-5">
                            <span class="content-subtitle">Pertumbuhan Jumlah Penduduk</span>
                            <h2 class="content-title">JUMLAH PENDUDUK</h2>
                            <p class="lead">
                                Menurut data dari Badan Pekerja Statistik Kabupaten Teluk Bintuni, pada tahun 2016, 2017,
                                dan 2018
                            </p>
                            <p class="mb-5">
                                Jumlah keseluruhan penduduk dari beberapa tahun terakhir di Distrik Bintuni Timur dirinci
                                sebagai berikut:
                            </p>
                            <div class="row mb-5 count-numbers">

                                <!-- Start Stats Item -->
                                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                                    <span data-purecounter-separator="true" data-purecounter-start="0"
                                        data-purecounter-end="23177" data-purecounter-duration="1"
                                        class="purecounter number"></span>
                                    <span class="d-block">Tahun 2016</span>
                                </div>
                                <!-- End Stats Item -->

                                <!-- Start Stats Item -->
                                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                                    <span data-purecounter-separator="true" data-purecounter-start="0"
                                        data-purecounter-end="23988" data-purecounter-duration="1"
                                        class="purecounter number"></span>
                                    <span class="d-block">Tahun 2017</span>
                                </div>
                                <!-- End Stats Item -->

                                <!-- Start Stats Item -->
                                <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                                    <span data-purecounter-separator="true" data-purecounter-start="0"
                                        data-purecounter-end="24742" data-purecounter-duration="1"
                                        class="purecounter number"></span>
                                    <span class="d-block">Tahun 2018</span>
                                </div>
                                <!-- End Stats Item -->

                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- /Stats Section --> --}}

            {{-- <!-- Team Section -->
          <section id="team" class="team section">
      
            <div class="site-section slider-team-wrap">
              <div class="container">
      
                <div class="slider-nav d-flex justify-content-end mb-3">
                  <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
                  <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
                </div>
      
                <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "1",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "navigation": {
                        "nextEl": ".js-custom-next",
                        "prevEl": ".js-custom-prev"
                      },
                      "breakpoints": {
                        "640": {
                          "slidesPerView": 2,
                          "spaceBetween": 30
                        },
                        "768": {
                          "slidesPerView": 3,
                          "spaceBetween": 30
                        },
                        "1200": {
                          "slidesPerView": 3,
                          "spaceBetween": 30
                        }
                      }
                    }
                  </script>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="team">
                        <div class="pic">
                          <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h3 clas="">
                          <a href="#"><span class="">Jeremy</span> Walker</a>
                        </h3>
                        <span class="d-block position">CEO, Founder, Atty.</span>
                        <p>
                          Separated they live in. Separated they live in Bookmarksgrove
                          right at the coast of the Semantics, a large language ocean.
                        </p>
                        <p class="mb-0">
                          <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team">
                        <div class="pic">
                          <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h3 clas="">
                          <a href="#"><span class="">Lawson</span> Arnold</a>
                        </h3>
                        <span class="d-block position">CEO, Founder, Atty.</span>
                        <p>
                          Separated they live in. Separated they live in Bookmarksgrove
                          right at the coast of the Semantics, a large language ocean.
                        </p>
                        <p class="mb-0">
                          <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team">
                        <div class="pic">
                          <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h3 clas="">
                          <a href="#"><span class="">Patrik</span> White</a>
                        </h3>
                        <span class="d-block position">CEO, Founder, Atty.</span>
                        <p>
                          Separated they live in. Separated they live in Bookmarksgrove
                          right at the coast of the Semantics, a large language ocean.
                        </p>
                        <p class="mb-0">
                          <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team">
                        <div class="pic">
                          <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h3 clas="">
                          <a href="#"><span class="">Kathryn</span> Ryan</a>
                        </h3>
                        <span class="d-block position">CEO, Founder, Atty.</span>
                        <p>
                          Separated they live in. Separated they live in Bookmarksgrove
                          right at the coast of the Semantics, a large language ocean.
                        </p>
                        <p class="mb-0">
                          <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                        </p>
                      </div>
                    </div>
                    <!-- <div class="swiper-slide"></div> -->
                  </div>
                </div>
              </div>
              <!-- /.container -->
            </div>
          </section><!-- /Team Section --> --}}

        </main>
    </div>

@endsection
