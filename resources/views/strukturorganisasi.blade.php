@extends('layouts.main')
@section('title', 'Hallo | Struktur Organisasi')
@section('content')
    <div class="index-page">
        <main class="main">
            <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Struktur Organisasi</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li><a href="/">Profil</a></li>
              <li class="current">Struktur Organisasi</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Team Section -->
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
                      <img src="https://i.pinimg.com/564x/79/5e/f7/795ef7b4c7e6588309713d64d877ce9b.jpg" alt="Image" class="img-fluid">
                    </div>
                    <h3 clas="">
                      <a href="#"><span class="">Monkey D</span> Luffy</a>
                    </h3>
                    <span class="d-block position">Kapten</span>
                    <p>
                      ISI TULISAN
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team">
                    <div class="pic">
                      <img src="https://i.pinimg.com/564x/99/76/e6/9976e678f02bd7fef3cdb9d4cb7f0551.jpg" alt="Image" class="img-fluid">
                    </div>
                    <h3 clas="">
                      <a href="#"><span class="">Roronoa</span> Zoro</a>
                    </h3>
                    <span class="d-block position">Wakil Kapten</span>
                    <p>
                    ISI TULISAN
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team">
                    <div class="pic">
                      <img src="https://i.pinimg.com/564x/a9/40/07/a94007af84c34f561e0893ed3f85d7d0.jpg" alt="Image" class="img-fluid">
                    </div>
                    <h3 clas="">
                      <a href="#"><span class="">Vinsmoke</span> Sanji</a>
                    </h3>
                    <span class="d-block position">Juru Masak</span>
                    <p>
                    ISI TULISAN
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team">
                    <div class="pic">
                      <img src="https://i.pinimg.com/564x/d6/56/16/d65616b121840373bc2e0bb79500882c.jpg" alt="Image" class="img-fluid">
                    </div>
                    <h3 clas="">
                      <a href="#"><span class="">Nami</span> </a>
                    </h3>
                    <span class="d-block position">Navigator</span>
                    <p>
                    ISI TULISAN
                    </p>
                  </div>
                </div>
                <!-- <div class="swiper-slide"></div> -->
              </div>
            </div>
          </div>
          <!-- /.container -->
        </div>
      </section><!-- /Team Section -->
        </main>
    </div>
@endsection