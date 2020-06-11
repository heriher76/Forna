<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>(BERANI) Berita Corona Terkini</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand - v2.0.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Portal BERANI</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
              <li><a href="{{ url('/news') }}" class="nav-link">Berita</a></li>
              <li><a href="{{ url('/contact') }}" class="nav-link">Kontak</a></li>
              @guest
              <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
              @else
              @endguest
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>

  @yield('banner')

  <main id="main">

    @yield('content')

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10 mr-auto text-center text-md-left mb-5 mb-md-0">
            <h2>Stay Safe And Keep Healty</h2>
          </div>
          <div class="col-md-2 text-center text-md-right">
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>Tentang BERANI</h3>
          <p>Sebuah website yang menyediakan data terkini mengenai perkembangan covid-19 dan berita-berita faktual yang dapat anda cerna setiap saat.</p>
          <p class="social">
            <a href="//twitter.com/herhermawan007"><span class="icofont-twitter"></span></a>
            <a href="//facebook.com/hidden76"><span class="icofont-facebook"></span></a>
            <a href="//instagram.com/heriher76"><span class="icofont-instagram"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">

            </div>
            <div class="col-md-4 mb-4 mb-md-0">

            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Menu Navigasi</h3>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/news') }}">Berita</a></li>
                <li><a href="{{ url('/contact') }}">Kontak</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright BERANI - Berita Corona Terkini</p>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
