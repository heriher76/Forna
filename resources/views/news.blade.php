@extends('layouts.master')

@section('content')

<section class="section">
  <br><br>
  <center><h3>Berita Terkini Corona</h3></center>
  <br>
  <div class="container">
    <div class="row mb-5">
      @foreach($allNews as $news)
      <div class="col-md-4">
        <div class="post-entry">
          <a href="{{ url('news/'.$news->slug) }}" class="d-block mb-4">
            <img src="{{ url('news-thumbnail/'.$news->thumbnail) }}" alt="Image" class="img-fluid">
          </a>
          <div class="post-text">
            <span class="post-meta">{{ $news->created_at }} &bullet; By <a href="#">{{ $news->user->name }}</a></span>
            <h3><a href="{{ url('news/'.$news->slug) }}">{{ $news->title }}</a></h3>
            <p>{!! \Str::limit($news->description, $limit = 150, $end = '...') !!}</p>
            <p><a href="{{ url('/news/'.$news->slug) }}" class="readmore">Baca Lagi</a></p>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section>
@stop
