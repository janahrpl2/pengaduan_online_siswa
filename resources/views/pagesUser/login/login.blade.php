<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - Pengaduan Online Siswa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets_user/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets_user/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets_user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_user/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets_user/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets_user/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_user/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets_user/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Pengaduan Online Siswa</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/user">Home<br></a></li>
          <li><a href="/login">Login</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets_user/img/contact-page-title-bg.jpg);">
      <div class="container">
        <h1>Login</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/user">Home</a></li>
            <li class="current">Login</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-box-arrow-in-right"></i>
              <div>
                <h3>login</h3>
                <p>Silahkan Login Untuk Masuk Ke Akun Anda</p>
              </div>
            </div>
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-person-plus-fill"></i>
              <div>
                <h3>Register</h3>
                <p>Jika belum memiliki akun silahkan tekan tombol di bawah ini untuk membuat akun anda</p>
                <a href="/register" class="btn btn-primary">Register</a>
              </div>
            </div>

          </div>
          <div class="col-lg-7">
            <form action="/login/store" method="post" data-aos="fade-up" data-aos-delay="500">
             @csrf
            <div class="row gy-4">
            <div class="col-md-12">
                  <input name="email" type="text" class="form-control"  placeholder=" Your email" required="">
                  @error('email')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input name="password" type="password" class="form-control"  placeholder=" Your Password" required="">
                  @error('password')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets_user/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets_user/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets_user/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets_user/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets_user/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets_user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets_user/js/main.js')}}"></script>

</body>

</html>