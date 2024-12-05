@extends('layoutsUser.app')
@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('assets_user/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Selamat Datang!!! {{ Auth::User()->nama }}</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Di Pengaduan Online Siswa</p>
              <p>Jika Anda Ingin Mengajukan Sebuah Pengaduan Silahkan Klik Dibawah Ini</p>

              <li><a href="/tambah/pengaduan">Tambah PengaduanKu<br></a></li>
              <li><a href="/listpengaduan">PengaduanKu<br></a></li>
            </blockquote>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    

    <!-- Services Section -->
    
  </main>
@endsection
