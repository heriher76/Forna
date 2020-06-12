<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Info Corona</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.0.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}"><span>FORNA</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('news') }}">Berita</a></li>
          <li><a href="{{ url('contact') }}">Kontak</a></li>
          @guest
          <li><a href="{{ url('login') }}">Login</a></li>
          @else
          <li class="drop-down"><a href="#">Hello, {{ \Auth::user()->name }}</a>
            <ul>
              <li><a href="{{ url('my-profile') }}">My Profile</a></li>
              <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
          @endguest
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="//twitter.com/kawalcovid-19" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="//facebook.com/kawalcovid-19.id" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="//instagram.com/kawalcovid-19" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  @yield('banner')

  <main id="main">
    @yield('content')
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Layanan Hotline 24 jam</h3>
            <p> Apabila membutuhkan bantuan terkait covid-19 bisa hubungi hotline pemerintah</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://kawalcorona.com/hotline/" target="_blank">Hubungi</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>FORNA</h3>
              <p>
                JL. JATI MAKMUR RAYA NO.22 KECAMATAN PONDOK GEDE<br>
                KOTA BEKASI JAWA BARAT<br><br>
                <strong>Phone:</strong> +62 8958862755<br>
                <strong>Email:</strong> info@forna.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="//twitter.com/kawalcovid-19" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="//facebook.com/kawalcovid-19.id" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="//instagram.com/kawalcovid-19" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">

          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Menu Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('news') }}">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('contact') }}">Kontak</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FORNA</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
