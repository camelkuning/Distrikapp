@extends('layouts.main')
@section('title', 'Hallo | Hubungi Kami')
@section('content')
    <div class="index-page">
        <main class="main">
            <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
          <h1>Hubungi Kami</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li class="current">Hubungi Kami</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Contact Section -->
      <section id="contact" class="contact section">
  
        <div class="container" data-aos="fade">
  
          <div class="row gy-5 gx-lg-5">
  
            <div class="col-lg-4">
  
              <div class="info">
                <h3>Kantor Distrik Bintuni Timur</h3>
                <p>Hubungi kami untuk keperluan anda, atau datang langsung ke kantor </p>
  
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi:</h4>
                    <p>Jl. Raya Bintuni</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>distrikbintunitimur@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>No Hp:</h4>
                    <p>085254178609</p>
                  </div>
                </div><!-- End Info Item -->
  
              </div>
  
            </div>
  
            <div class="col-lg-8">
              <form action="" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" placeholder="Pesan" required=""></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Memuat</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesanmu Terkirim, Terima Kasih!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->
        </main>
    </div>
@endsection