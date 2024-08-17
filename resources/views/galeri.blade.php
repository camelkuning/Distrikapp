@extends('layouts.main')
@section('title', 'Hallo | Galeri')
@section('content')
    <div class="index-page">
        <main class="main">
            <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Galeri</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li class="current">Galeri</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Sanji</li>
              <li data-filter=".filter-product">Luffy</li>
              <li data-filter=".filter-branding">Zoro</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="https://i.pinimg.com/564x/a9/40/07/a94007af84c34f561e0893ed3f85d7d0.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vinsmoke Sanji</h4>
                  <p>Juru Masak Kapten</p>
                  <a href="https://i.pinimg.com/564x/a9/40/07/a94007af84c34f561e0893ed3f85d7d0.jpg"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="https://i.pinimg.com/564x/79/5e/f7/795ef7b4c7e6588309713d64d877ce9b.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Monkey D Luffy</h4>
                  <p>Gear 5</p>
                  <a href="https://i.pinimg.com/564x/79/5e/f7/795ef7b4c7e6588309713d64d877ce9b.jpg"  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="https://i.pinimg.com/564x/99/76/e6/9976e678f02bd7fef3cdb9d4cb7f0551.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Roronoa Zoro</h4>
                  <p>Tangan Kanan Kapten</p>
                  <a href="https://i.pinimg.com/564x/99/76/e6/9976e678f02bd7fef3cdb9d4cb7f0551.jpg"  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="https://i.pinimg.com/736x/67/01/70/670170160518d2f49805b3e4fa0bc2b4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Vinsmoke Sanji</h4>
                  <p>Juru Masak Kapten</p>
                  <a href="https://i.pinimg.com/736x/67/01/70/670170160518d2f49805b3e4fa0bc2b4.jpg"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="https://i.pinimg.com/564x/d3/f4/aa/d3f4aab08383c3de8e5e9d053f7a7516.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Monkey D Luffy</h4>
                  <p>Kapten</p>
                  <a href="https://i.pinimg.com/564x/d3/f4/aa/d3f4aab08383c3de8e5e9d053f7a7516.jpg"  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="https://i.pinimg.com/564x/ae/4f/8e/ae4f8ee194ce20ffc06d6a507a6f5437.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Roronoa Zoro</h4>
                  <p>Tangan Kanan Kapten</p>
                  <a href="https://i.pinimg.com/564x/ae/4f/8e/ae4f8ee194ce20ffc06d6a507a6f5437.jpg"  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item --> --}}
  
              {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item --> --}}
  
              {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item --> --}}
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Portfolio Section -->
  
        </main>
    </div>
@endsection