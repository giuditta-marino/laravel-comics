@extends('layouts.app')

@section ('title')
<title>Comic</title>
@endsection

@section('content')
  <main id="detail">
    <div class="image-comic">
      <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="cyan-bar">
    </div>
    <div class="main-top">
      <div class="container">
        <div class="info-comic row">
          <div class="col-lg-8">
            <h3>{{ $comic['title'] }}</h3>
            <div class="green-bar row">
              <div class="flex col-lg-9">
                <p>U.S.Price: <span id="price">{{ $comic['price'] }}</span></p>
                <p>available</p>
              </div>
              <div class="col-lg-3 text-center">
                <p><span id="check">Check Availability</span> <span class="caret-down">&#9660;</span></p>
              </div>
            </div>
            <div class="description row">
              <div class="col-lg-12">
                <p>{{ $comic['description'] }}</p>
              </div>
            </div>
          </div>
          <div class="advertisement col-lg-4 text-right">
            <div class="row">
              <div class="text col-lg-12">
                <p class="title text-uppercase">advertisement</p>
              </div>
              <div class="image col-lg-12">
                <img src="/images/adv.jpg" alt="superman">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Talent</h4>
            <div class="art row">
              <div class="col-lg-4">
                <span>Art by:</span>
                @foreach ($comic['artists'] as $artist)
                <span>{{ $artist }}</span>
                @endforeach
              </div>
              <div class="col-lg-8"><span></span></div>
            </div>
            <div class="written row">
              <div class="col-lg-4">
                <span>Written by:</span>

                <span></span>
                </div>
              <div class="col-lg-8"></div>
            </div>
          </div>
          <div class="col-lg-6"></div>

        </div>
      </div>
    </div>
  </main>
@endsection
