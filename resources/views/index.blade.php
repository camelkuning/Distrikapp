@extends('layouts.main')
@section('title', 'Hallo | Beranda')
@section('content')
    <!-- Home Section -->

    <section id="home" class="home section">
        <div class="swiper init-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/bintuni-gero2.jpg') }}"
                        alt="Image">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/bintuni-hero1.jpg') }}"
                        alt="Image">
                </div>
                <div class="swiper-slide">
                    <img src="https://infobanknews.com/wp-content/uploads/2021/10/498E54CE-CE4B-4A93-9331-F73406D8BEC6.jpeg"
                        alt="Image">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="container container-desc">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                </div>
                <div class="col-lg-8 order-lg-1 text-light content-distrik">
                    <span class="section-subtitle" data-aos="fade-up">Selamat Datang</span>
                    <h1 class="mb-4 text-light" data-aos="fade-up">
                        Kabupaten Teluk Bintuni Distrik Bintuni Timur
                    </h1>
                    <p data-aos="fade-up">
                        Bintuni Timur, sebuah distrik yang terletak di Papua Barat, adalah wilayah yang kaya akan
                        keindahan alam dan keberagaman budaya. Dikenal dengan lanskapnya yang memukau, Bintuni Timur
                        dikelilingi oleh hutan hujan tropis yang lebat dan sungai-sungai yang berkelok, menawarkan
                        panorama yang menakjubkan bagi siapa pun yang mengunjunginya.
                    </p>
                    <a href="/profil" class="btn btn-get-started">Profil Distrik</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Section -->
@endsection

@section('js-addons')
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.init-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                speed: 600,
            });
        });
    </script>
@endsection
