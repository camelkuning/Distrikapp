@extends('layouts.main')
@section('title', 'Hallo | Berita')
@section('content')
    <div class="index-page">
        <main class="main">
                <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Berita</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li class="current">Berita</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Blog Posts 2 Section -->
      <section id="blog-posts-2" class="blog-posts-2 section">
  
        <div class="container">
  
          <div class="row gy-5">
  
            <div class="col-lg-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="https://i.pinimg.com/564x/9d/d9/f1/9dd9f1b80bacbf44530ceb98ca2d8003.jpg" alt="" class="img-fluid">
                </div>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><a href="blog-details.html">Berita Harian</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">Agustus 14, 2024</time></a></li>
                  </ul>
                </div>
  
                <h2 class="title">
                  <a href="/detailberita">Kevin Tabrak Pohon</a>
                </h2>
  
              </article>
            </div><!-- End post list item -->
  
            <div class="col-lg-4 col-md-6">
  
              <article>
  
                <div class="post-img">
                  <img src="https://i.pinimg.com/564x/39/b9/2d/39b92ddec13934de3418501721072f2d.jpg" alt="" class="img-fluid">
                </div>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><a href="blog-details.html">Berita Harian</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">Agustus 14, 2024</time></a></li>
                  </ul>
                </div>
  
                <h2 class="title">
                  <a href="#">Kevin Mobil Baru</a>
                </h2>
  
              </article>
  
            </div><!-- End post list item -->
  
            <div class="col-lg-4 col-md-6">
  
              <article>
  
                <div class="post-img">
                  <img src="https://i.pinimg.com/564x/7a/af/cc/7aafcc0fd6829bfe87506800f34804c6.jpg" alt="" class="img-fluid">
                </div>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><a href="blog-details.html">Berita Harian</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-dot"></i> <a href="blog-details.html"><time datetime="2022-01-01">Agustus 14, 2024</time></a></li>
                  </ul>
                </div>
  
                <h2 class="title">
                  <a href="#">Kevin Ganti Oli</a>
                </h2>
  
              </article>
  
            </div><!-- End post list item -->
  
          </div><!-- End blog posts list -->
  
        </div>
  
      </section><!-- /Blog Posts 2 Section -->
  
      {{-- <!-- Blog Pagination Section -->
      <section id="blog-pagination" class="blog-pagination section">
  
        <div class="container">
          <div class="d-flex justify-content-center">
            <ul>
              <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
              <li><a href="#"class="active">1</a></li>
              <li><a href="#" >2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>...</li>
              <li><a href="#">10</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
  
      </section><!-- /Blog Pagination Section --> --}}
        </main>
    </div>
@endsection