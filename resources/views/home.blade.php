<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SumaTransport</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('homepage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('homepage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('homepage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="homepage/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="home" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1>SumaTransport</h1>
        <a href="home" class="sitename"></a>
        </h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home" class="active">Beranda</a></li>
          <li><a href="jadwal">Jadwal</a></li>
          <li><a href="rute">Rute</a></li>
          <li class="dropdown"><a href="#"><span>Informasi Bus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="kbt">KBT</a></li>
              <li><a href="kpt">KPT</a></li>
              <li><a href="tiomaz">TIOMAZ</a></li>
              <li><a href="karyaagung">Karya Agung</a></li>
            </ul>
          </li>
          <li><a href="qna">QnA</a></li>
          <!-- Tampilkan tombol logout jika pengguna telah login -->
          @auth
            <li>
              <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">
                  Logout
                </button>
              </form>
            </li>
          @endauth
          <!-- Link login dan register jika pengguna belum login -->
          @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          @endguest
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('homepage\img\Background.jpeg') }}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Informasi Lengkap, Perjalanan Mudah</h2>
            <p data-aos="fade-up" data-aos-delay="200">Temukan Informasi Lengkap Bus Favorit Anda</p>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="homepage\img\clients\Karya Agung.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="homepage\img\clients\KBT.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="homepage\img\clients\KPT.webp" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="homepage\img\clients\Tiomaz.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
        </div>
      </div>
    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h2>Temukan Informasi Bus Favorit Anda</h2>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

            <div class="card" style="width: 18rem;">
                <img src="homepage\img\KBT1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">KBT</h5>
                  <p class="card-text">Layanan bus andalan dengan rute Medan - Tarutung, menawarkan kenyamanan, keamanan, dan fasilitas modern untuk perjalanan jarak jauh di Sumatera Utara.</p>
                  <a href="kbt" class="btn btn-primary stretched-link">Baca Selengkapnya</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="homepage\img\KPT1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">KPT</h5>
                  <p class="card-text">Menyediakan transportasi nyaman dengan rute Medan - Toba, dilengkapi fasilitas modern dan pelayanan terbaik untuk perjalanan di Sumatera Utara.</p>
                  <a href="kpt" class="btn btn-primary stretched-link">Baca Selengkapnya</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="homepage\img\Tiomaz1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">TIOMAZ</h5>
                  <p class="card-text">Transportasi handal dengan rute Medan - Tarutung, menawarkan perjalanan aman dan nyaman dengan fasilitas lengkap untuk kenyamanan penumpang.</p>
                  <a href="tiomaz" class="btn btn-primary stretched-link">Baca Selengkapnya</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="homepage\img\KaryaAgung.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Karya Agung</h5>
                  <p class="card-text">Layanan bus terpercaya dengan rute Medan - Sibolga, memberikan kenyamanan dan keamanan untuk perjalanan jarak jauh di Sumatera Utara.</p>
                  <a href="karyaagung" class="btn btn-primary stretched-link">Baca Selengkapnya</a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">SumaTransport</span>
          </a>
          <p>Hubungi Kami</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>


  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('homepage/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('homepage/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('homepage/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('homepage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('homepage/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('homepage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('homepage/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('homepage/js/main.js') }}"></script>

</body>

</html>