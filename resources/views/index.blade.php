@extends('layouts.master')

@section('content')
<!-- ======= Home Section ======= -->
<section class="section">
  <div class="container">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-5" data-aos="fade-up">
        <h2 class="section-heading">Data Terkini Covid-19</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
        <div class="feature-1 text-center">
          <div class="wrap-icon icon-1">
            <span class="icon la la-globe"></span>
          </div>
          <h3 class="mb-3">Internasional</h3>
          <p>
            <label>Positif: {{ $globalPositif->value }}</label><br>
            <label>Sembuh: {{ $globalSembuh->value }}</label><br>
            <label>Meninggal: {{ $globalMati->value }}</label>
          </p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-1 text-center">
          <div class="wrap-icon icon-1">
            <span class="icon la la-flag"></span>
          </div>
          <h3 class="mb-3">Nasional</h3>
          <p>
            <label>Positif: {{ $indonesia->positif }}</label><br>
            <label>Sembuh: {{ $indonesia->sembuh }}</label><br>
            <label>Meninggal: {{ $indonesia->meninggal }}</label>
          </p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-1 text-center">
          <div class="wrap-icon icon-1">
            <span class="icon la la-users"></span>
          </div>
          <h3 class="mb-3">Provinsi Anda (Jawa Barat)</h3>
          <p>
            <label>Positif: {{ $jawaBarat->Kasus_Posi }}</label><br>
            <label>Sembuh: {{ $jawaBarat->Kasus_Semb }}</label><br>
            <label>Meninggal: {{ $jawaBarat->Kasus_Meni }}</label>
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section">

  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8">
        <h2 class="section-heading">Berita Terkini Covid-19</h2>
      </div>
    </div>

    <div class="row">
      @foreach($allNews as $news)
      <div class="col-md-4">
        <div class="step">
          <h4>{{ $news->title }}</h4>
          <p>{!! \Str::limit($news->description, $limit = 150, $end = '...') !!}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <br>
  <center><a href="{{ url('news') }}" class="btn btn-primary">Berita Lainnya</a></center>

</section>

<!-- ======= Testimonials Section ======= -->
<section class="section border-top border-bottom">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8">
        <h2 class="section-heading">Sekilas Fakta Covid-19</h2>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="owl-carousel testimonial-carousel">
          @foreach($allFacts as $fact)
          <div class="review text-center">
            <h3>{{ $fact->title }}</h3>
            <blockquote>
              <p>{!! $fact->description !!}</p>
            </blockquote>

            <p class="review-user">
            </p>

          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section><!-- End Testimonials Section -->
@stop

@section('banner')
<!-- ======= Hero Section ======= -->
<section class="hero-section" id="hero">

  <div class="wave">

    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
        </g>
      </g>
    </svg>

  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 hero-text-image">
        <div class="row">
          <div class="col-lg-7 text-center text-lg-left">
            <h1 data-aos="fade-right">#StayAtHome dan #StayUpToDate</h1>
            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Sebuah website yang menyediakan data terkini mengenai perkembangan covid-19 dan berita-berita faktual yang dapat anda cerna setiap saat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->
@stop
