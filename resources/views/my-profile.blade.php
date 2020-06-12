@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<section class="hero-section inner-page" style="padding-bottom: 0px;">
  <br><br>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center hero-text">
            <h1 data-aos="fade-up" data-aos-delay="">Profil Saya</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="section">
  <div class="container">

    <div class="row">

      <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
        <form action="{{ url('/my-profile') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('put') }}
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}"/>
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" value="{{ $user->email }}" />
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
              <label for="address">Alamat</label>
              <textarea class="form-control" name="address" cols="30" rows="8">{{ $user->address }}</textarea>
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
              <label for="photo">Foto Profil</label>
              <br>
              @if(isset($user->photo))
                  <br>
                  <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('profile-photo/'.$user->photo) }}">
              @endif
              <input type="file" name="photo">

              <div class="validate"></div>
            </div>

            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary d-block w-100">Kirim</button>
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
</section>
@stop
