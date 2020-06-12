@extends('layouts.master')

@section('content')
<!-- ======= Single Blog Section ======= -->
<section class="hero-section inner-page">
<br><br>
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
        <center>
          <img src="{{ url('news-thumbnail/'.$news->thumbnail) }}" class="img-responsive" style="width: 40vw;">
        <br><br>
        </center>
        {!! $news->description !!}
        <div class="pt-5">
          <h3 class="mb-5">{{count($news->comments) }} Komentar</h3>
          <ul class="comment-list">
            @foreach($news->comments as $comment)
            <li class="comment">
              <div class="vcard bio">
                @if(isset(\Auth::user()->photo))
                <img src="{{ url('profile-photo/'.\Auth::user()->photo) }}" style="width: 50px;">
                @else
                <img src="{{ url('assets/img/apple-touch-icon.png') }}" style="width: 50px;">
                @endif
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
