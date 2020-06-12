@extends('layouts.master')

@section('content')
<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item" data-aos="fade-up">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <h4>Data Covid-19 Dunia</h4>
            </a>
          </li>
          <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <h4>Data Covid-19 Indonesia</h4>
            </a>
          </li>
          <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <h4>Data Covid-19 Jawa Barat</h4>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <figure>
              <br>
              <h1><u>Data Statistik Dunia</u></h1>
              <h2>Positif : {{ $globalPositif->value }}</h2>
              <h2>Sembuh : {{ $globalSembuh->value }}</h2>
              <h2>Meninggal : {{ $globalMati->value }}</h2>
            </figure>
          </div>
          <div class="tab-pane" id="tab-2">
            <figure>
              <br>
              <h1><u>Data Statistik Indonesia</u></h1>
              <h2>Positif : {{ $indonesia->positif }}</h2>
              <h2>Sembuh : {{ $indonesia->sembuh }}</h2>
              <h2>Meninggal : {{ $indonesia->meninggal }}</h2>
            </figure>
          </div>
          <div class="tab-pane" id="tab-3">
            <figure>
              <br>
              <h1><u>Data Statistik Jawa Barat</u></h1>
              <h2>Positif : {{ $jawaBarat->Kasus_Posi }}</h2>
              <h2>Sembuh : {{ $jawaBarat->Kasus_Semb }}</h2>
              <h2>Meninggal : {{ $jawaBarat->Kasus_Meni }}</h2>
            </figure>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Berita-Berita Covid-19</h2>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      @foreach($allNews as $news)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{ url('news-thumbnail/'.$news->thumbnail) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $news->title }}</h4>
            <p>{!! \Str::limit($news->description, $limit = 100, $end = '...') !!}</p>
          </div>
          <div class="portfolio-links">
            <a href="{{ url('news/'.$news->slug) }}" title="More Details" style="height: 20px;">Baca Lagi..</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <center><a href="{{ url('news') }}" class="btn btn-primary">Berita Lainnya</a></center>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Fakta-Fakta Covid-19</h2>
    </div>

    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

      @foreach($allFacts as $fact)
      <div class="testimonial-item">
        <h3>{{$fact->title}}</h3>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          {{$fact->description}}
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>FAQ tentang Covid-19</h2>
    </div>

    <ul class="faq-list">

      <li data-aos="fade-up">
        <a data-toggle="collapse" class="" href="#faq1">Di mana virus corona pertama kali muncul? <i class="icofont-simple-up"></i></a>
        <div id="faq1" class="collapse show" data-parent=".faq-list">
          <p>
            Kasus Awal infeksi novel corona virus (2019-nCov) Kasus tersebut berasal dari Kota Wuhan, Provinsi Hubei, China. Kasus tersebut menimbulkan gejala infeksi saluran napas mulai dari ringan hingga berat, dengan angka kematian sekitar 2,5 % dari kasus infeksi berat.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="100">
        <a data-toggle="collapse" href="#faq2" class="collapsed">Bagaimana cara penyebaran virus corona yang banyak terjadi? <i class="icofont-simple-up"></i></a>
        <div id="faq2" class="collapse" data-parent=".faq-list">
          <p>
            Ia menyebut penularan virus Covid-19 tidak langsung paling banyak terjadi. Penularan itu terjadi melalui benda di sekitar kita yang tercemar virus Covid-19 yang kita sentuh dan kemudian menyentuh mulut, hidung, dan mata.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="200">
        <a data-toggle="collapse" href="#faq3" class="collapsed">Berapa lama virus corona bertahan di permukaan benda? <i class="icofont-simple-up"></i></a>
        <div id="faq3" class="collapse" data-parent=".faq-list">
          <p>
            Sampai saat ini belum diketahui dengan pasti berapa lama COVID-19 mampu bertahan di permukaan suatu benda, meskipun studi awal menunjukkan bahwa COVID-19 dapat bertahan hingga beberapa jam, tergantung jenis permukaan, suhu, atau kelembaban lingkungan.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="300">
        <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah penyebab COVID-19 sama dengan SARS? <i class="icofont-simple-up"></i></a>
        <div id="faq4" class="collapse" data-parent=".faq-list">
          <p>
            COVID-19(Coronavirus Disease-19) adalah penyakit menular yang disebabkan oleh severe acute respiratory syndrome coronavirus 2(SARS-CoV-2),yang sama dengan penyebab SARS pada tahun 2003. Meski tergolong dalam satu keluarga besar virus,namun berbeda jenis virus,dan penyebarannya lebih luas dan cepat dibanding virus SARS.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="400">
        <a data-toggle="collapse" href="#faq5" class="collapsed">Apa efek virus corona pada tubuh? <i class="icofont-simple-up"></i></a>
        <div id="faq5" class="collapse" data-parent=".faq-list">
          <p>
            Virus SARS-corona 2 yang mengakibatkan COVID-19 (corona virus disease 2019) adalah virus yang menginfeksi saluran napas atas dan bawah; serta dapat mengakibatkan gagal napas berat yang terjadi dengan cepat, diikuti gagal banyak organ tubuh dan berakibat kematian.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="500">
        <a data-toggle="collapse" href="#faq6" class="collapsed">Apakah virus corona bisa menular ke manusia? <i class="icofont-simple-up"></i></a>
        <div id="faq6" class="collapse" data-parent=".faq-list">
          <p>
            Virus 2019 Novel Coronavirus (2019-nCoV) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang siapa saja, baik bayi, anak-anak, orang dewasa, lansia, ibu hamil, maupun ibu menyusui.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End Frequently Asked Questions Section -->
@stop

@section('banner')
<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
          <h1>Tetap Update Berita Terkini Mengenai Perkembangan Covid-19</h1>
          <h2>Website FORNA membantu anda agar menjadi masyarakat terupdate mengenai info corona.</h2>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->
@stop
