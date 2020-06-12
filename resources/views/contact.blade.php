@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container">
    <br><br>
    <div class="section-title" data-aos="fade-up">
      <h2>Hubungi Kami</h2>
    </div>

    <div class="row">

      <div class="col-lg-5 align-items-stretch" data-aos="fade-right">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Lokasi:</h4>
            <p>JL. JATI MAKMUR RAYA NO.22 KECAMATAN PONDOK GEDE<br>
            KOTA BEKASI JAWA BARAT</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>info@forna.com</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>+62 8958862755</p>
          </div>

        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
        <form action="{{ url('send-message') }}" method="post" role="form" class="php-email-form">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="name">Nama Anda</label>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Email Anda</label>
            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Pesan</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@stop
