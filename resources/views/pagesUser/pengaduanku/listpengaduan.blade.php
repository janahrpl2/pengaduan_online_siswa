<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pengaduan Online Siswa</title>
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
          <li><a href="/pengaduan/profile">Profile</a></li>
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
        <h1>Pengaduanku</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/user">Home</a></li>
            <li class="current">Pengaduanku</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="container-fluid">
    <div class="card">
        <form action="" method="">
            <table class="table table-bordered">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Pengaduan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Foto</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
            @foreach ($pengaduans as $no => $pengaduan)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td> {{ Auth::user()->nama }}</td>
                    <td>{{ $pengaduan->kelas }}</td>
                    <td>{{ $pengaduan->pengaduan }}</td>
                    <td>{{ $pengaduan->kategori->nama_kategori}}</td>
                    <td><img width="100" src="{{ asset('images/'.$pengaduan->foto) }}" alt=""></td>
                    <td>{{ $pengaduan->status }}</td>
                    <td>
                        <a onClick="return confirm('Anda Yakin Ingin Menghapus Ini')" href="/destroyPengaduan/{{$pengaduan->id}}"class="btn btn-danger">Hapus</a>
                    </td>

                </tr>
                @endforeach
            </table>
            <a href="/tambah/pengaduan" class="btn btn-success mb-5">Tambah</a>
        </form>
    </div>
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