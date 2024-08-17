@extends('layouts.main')
@section('title', 'Hallo | Beranda')
@section('content')
    <div class="index-page">
        <main class="main">
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Beranda</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
            <!-- About Section -->
            <section id="about" class="about section">
        
              <div class="container">
                <div class="row align-items-center justify-content-between">
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
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="https://gpriority.co.id/wp-content/uploads/2023/09/Tempat-Wisata-Teluk-Bintuni.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                          <img src="https://cdngnfi2.sgp1.cdn.digitaloceanspaces.com/gnfi/uploads/images/2020/11/2920182020-teluk-bintuni.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                          <img src="https://infobanknews.com/wp-content/uploads/2021/10/498E54CE-CE4B-4A93-9331-F73406D8BEC6.jpeg" alt="Image" class="img-fluid">
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="col-lg-4 order-lg-1">
                    <span class="section-subtitle" data-aos="fade-up">Selamat Datang</span>
                    <h1 class="mb-4" data-aos="fade-up">
                      Kabupaten Teluk Bintuni Distrik Bintuni Timur
                    </h1>
                    <p data-aos="fade-up">
                        Bintuni Timur, sebuah distrik yang terletak di Papua Barat, adalah wilayah yang kaya akan keindahan alam dan keberagaman budaya. Dikenal dengan lanskapnya yang memukau, Bintuni Timur dikelilingi oleh hutan hujan tropis yang lebat dan sungai-sungai yang berkelok, menawarkan panorama yang menakjubkan bagi siapa pun yang mengunjunginya. 
                    </p>
                    <p class="mt-5" data-aos="fade-up">
                      <a  href="/profil" class="btn btn-get-started">Profil Distrik</a>
                      
                    </p>
                  </div>
                </div>
              </div>
            </section><!-- /About Section -->
        </main>
        
        

    </div>
@endsection
