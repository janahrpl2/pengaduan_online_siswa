@extends('layoutsUser.app')
@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('assets_user/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Selamat Datang!!!</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Aplikasi pengaduan online siswa ini memiliki fitur seperti pembuatan laporan pengaduan, pelacakan status pengaduan, dan notifikasi pembaruan. Pengguna dapat meng-upload bukti, memberikan feedback, dan berinteraksi langsung dengan pihak terkait untuk menyelesaikan masalah. Antarmuka yang intuitif dan aksesibilitas yang baik juga sangat penting untuk pengalaman pengguna yang optimal.</p>
            </blockquote>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kategori Pengaduan</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title">Kekerasan Dan Bullying</h4>
              <p class="description">kekerasan Dan Bullying biasanya didefinisikan sebagai perilaku agresif yang dilakukan secara berulang terhadap seseorang yang lebih lemah</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title">Kerusakan Fasilitas</h4>
              <p class="description">erusakan fasilitas sekolah merujuk pada kondisi di mana infrastruktur dan peralatan pendidikan tidak berfungsi dengan baik atau telah rusak, mengganggu proses belajar mengajar.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title">Kenakalan Remaja</h4>
              <p class="description">Kenalan remaja di sekolah merupakan bagian penting dari pengalaman sosial dan perkembangan emosional mereka. Ini adalah waktu di mana mereka mulai membentuk hubungan yang lebih dalam dengan teman sebaya.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title">Penggunaan zat</h4>
              <p class="description">Penggunaan zat di sekolah, terutama yang berkaitan dengan penyalahgunaan narkoba, alkohol, dan rokok, merupakan masalah serius yang dapat berdampak negatif pada kesehatan dan kesejahteraan siswa.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title">Tindakan Krimninal</h4>
              <p class="description">Tindakan kriminal di sekolah mencakup berbagai perilaku ilegal yang dapat terjadi di lingkungan pendidikan, dan ini bisa memiliki dampak serius pada siswa, staf, dan komunitas sekolah. </p>
            
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title">Diskriminasi</h4>
              <p class="description">Diskriminasi di sekolah adalah perlakuan tidak adil terhadap siswa berdasarkan karakteristik tertentu, seperti ras, gender, agama, orientasi seksual, atau disabilitas. Ini dapat terjadi dalam berbagai bentuk dan dapat memiliki dampak negatif yang serius pada pengalaman belajar dan perkembangan emosional siswa.</p>
            
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->
  </main>
@endsection
