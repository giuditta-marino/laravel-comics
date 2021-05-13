@extends('layouts.app')

@section ('title')
<title>Comic</title>
@endsection

@section('content')
  <main id="detail">
    <div class="image">
      <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h3>{{ $comic['title'] }}</h3>
          <div class="row">
            <div class="col-lg-9">
              <p>U.S.Price: {{ $comic['price'] }}</p>
              <p>available</p>
            </div>
            <div class="col-lg-3">
              <p>Check Availability</p>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <p>{{ $comic['description'] }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </main>
@endsection
