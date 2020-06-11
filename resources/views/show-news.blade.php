@extends('layouts.master')

@section('content')
<!-- ======= Single Blog Section ======= -->
<section class="hero-section inner-page">
  <div class="wave">

    <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
        </g>
      </g>
    </svg>

  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center hero-text">
            <h1 data-aos="fade-up" data-aos-delay="">{{ $news->title }}</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $news->created_at }} &bullet; By <a href="#" class="text-white">{{ $news->user->name }}</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="site-section mb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 blog-content">
        {!! $news->description !!}
        <div class="pt-5">
          <h3 class="mb-5">{{count($news->comments) }} Komentar</h3>
          <ul class="comment-list">
            @foreach($news->comments as $comment)
            <li class="comment">
              <div class="vcard bio">
                <img src="{{ url('assets/img/apple-touch-icon.png') }}">
              </div>
              <div class="comment-body">
                <h3>{{ $comment->user->name }}</h3>
                <div class="meta">{{ $comment->created_at }}</div>
                <p>{{ $comment->content }}</p>
              </div>
            </li>
            @endforeach
          </ul>
          <!-- END comment-list -->

          <div class="comment-form-wrap pt-5">
            @guest
            <h5>Silahkan <a href="{{ url('login') }}">Login / Daftar</a> Terlebih Dahulu Untuk Berkomentar</h5>
            @else
            <h3 class="mb-5">Tinggalkan Komentar</h3>
            <form action="{{ url('/news/'.$news->id.'/send-comment') }}" method="POST" class="">
              {{csrf_field()}}
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="content" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" value="Post Comment" class="btn btn-primary">Kirim</button>
              </div>

            </form>
            @endguest
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@stop
