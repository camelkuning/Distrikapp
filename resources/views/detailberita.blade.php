@extends('layouts.main')
@section('title', 'Hallo | Berita')
@section('content')
    <div class="index-page">
        <main class="main">
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Detail Berita</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li><a href="/">Berita</a></li>
              <li class="current">Detail Berita</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <div class="container">
        <div class="row">
  
          <div class="col-lg-8">
  
            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
              <div class="container">
  
                <article class="article">
  
                  <div class="post-img">
                    <img src="https://i.pinimg.com/564x/d9/dd/ae/d9ddaedcd793d29ca1be38d723cffc1e.jpg" alt="" class="img-fluid">
                  </div>
  
                  <h2 class="title">NAKAMAA</h2>
  
                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Armada Topi Jerami</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">14 Agustus, 2024</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="/detailberita"></a></li>
                    </ul>
                  </div><!-- End meta top -->
  
                  <div class="content">
                    <p>
                      INI TULISAN
                    </p>
  
                    <p>
                     INI TULISAN
                    </p>
  
                    <blockquote>
                      <p>
                        INI TULISAN
                      </p>
                    </blockquote>
  
                    <p>
                      INI TULISAN
                    </p>
  
                    <h3>INI TULISAN.</h3>
                    <p>
                      INI TULISAN
                    </p>
                    <img src="https://i.pinimg.com/originals/1b/59/d4/1b59d461731d311b1422c29e2a1ae7ce.jpg" class="img-fluid" alt="">
  
                    <h3>INI TULISAN</h3>
                    <p>
                      INI TULISAN
                    </p>
                    <p>
                      INI TULISAN
                    </p>
  
                  </div><!-- End post content -->
  
                  <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <li><a href="#">Business</a></li>
                    </ul>
  
                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">Tips</a></li>
                      <li><a href="#">Marketing</a></li>
                    </ul>
                  </div><!-- End meta bottom -->
  
                </article>
  
              </div>
            </section><!-- /Blog Details Section -->
          </div>
  
          <div class="col-lg-4 sidebar">
  
            <div class="widgets-container">
  
              <!-- Blog Author Widget -->
              <div class="blog-author-widget widget-item">
  
                <div class="d-flex flex-column align-items-center">
                  <img src="https://i.pinimg.com/564x/26/9d/4e/269d4e92008382d003a09bb211f04b24.jpg" class="rounded-circle flex-shrink-0" alt="">
                  <h4>Vinsmoke Sanji</h4>
                  <div class="social-links">
                    <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
                  </div>
  
                  <p>
                    Saya adalah orang dengan tendangan terhebat
                  </p>
  
                </div>
              </div><!--/Blog Author Widget -->
  
              <!-- Recent Posts Widget -->
              <div class="recent-posts-widget widget-item">
  
                <h3 class="widget-title">Berita Lainnya</h3>
  
                <div class="post-item">
                  <h4><a href="blog-details.html">Kevin Bawa Lari Orang Pu Anak</a></h4>
                  <time datetime="2020-01-01"> 14 Agustus, 2024</time>
                </div><!-- End recent post item-->
  
                <div class="post-item">
                  <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div><!-- End recent post item-->
  
                <div class="post-item">
                  <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div><!-- End recent post item-->
  
                <div class="post-item">
                  <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div><!-- End recent post item-->
  
                <div class="post-item">
                  <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div><!-- End recent post item-->
  
              </div><!--/Recent Posts Widget -->
  
              <!-- Tags Widget -->
              <div class="tags-widget widget-item">
  
                <h3 class="widget-title">Tags</h3>
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
  
              </div><!--/Tags Widget -->
  
            </div>
  
          </div>
  
        </div>
      </div>
        </main>
    </div>
@endsection