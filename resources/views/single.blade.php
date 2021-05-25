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
            <div class="title row">
              <div class="col-lg-12">
                  <h3>{{ $comic['title'] }}</h3>
              </div>
            </div>

            <div class="green-bar row">

              <div class="left flex col-lg-9">
                <p>U.S.Price: <span id="price">{{ $comic['price'] }}</span></p>
                <p>available</p>
              </div>
              <div class="right col-lg-3 text-center">
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
        <div class="credits row">
          <div class="talent col-lg-6">
            <h4>Talent</h4>
            <div class="art row">
              <div class="title col-lg-4">
                <p>Art by:</p>
              </div>
              <div class="list col-lg-8">
                @foreach ($comic['artists'] as $artist)

                @if (!($loop->last))
                    <a href="#">{{$artist}}</a>,
                  @else
                    <a href="#">{{$artist}}</a>
                  @endif

                @endforeach
              </div>
            </div>
            <div class="written row">
              <div class="title col-lg-4">
                <p>Written by:</p>
              </div>
              <div class="list col-lg-8">
                @foreach ($comic['writers'] as $writer)

                @if (!($loop->last))
                    <a href="#">{{$writer}}</a>,
                  @else
                    <a href="#">{{$writer}}</a>
                  @endif

                @endforeach
              </div>
            </div>
          </div>
          <div class="specs col-lg-6">
            <h4>Specs</h4>
            <div class="series row">
              <div class="title col-lg-4">
                <p>Series:</p>
              </div>
              <div class="list col-lg-8">
                <a href="#" id="series-title">{{ $comic['series'] }}</a>
              </div>
            </div>
            <div class="price row">
              <div class="title col-lg-4">
                <p>U.S. Price:</p>
              </div>
              <div class="list col-lg-8">
                <span>{{ $comic['price'] }}</span>
              </div>
            </div>
            <div class="sale row">
              <div class="title col-lg-4">
                <p>On Sale Date:</p>
              </div>
              <div class="list col-lg-8">
                <span>{{ $comic['sale_date'] }}</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="ctas">
      <div class="container">
        <div class="links row">
          <div class="col-lg-3">
            <div class="dc">
              <div class="text">
                <a href="#">digital comics</a>
              </div>
              <div class="image">
                <img src="/images/buy-comics-digital-comics.png" alt="dc-icon">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="shop">
              <div class="text">
                <a href="#">shop dc</a>
              </div>
              <div class="image">
                <img src="/images/buy-comics-subscriptions.png" alt="shop-icon">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="locator">
              <div class="text">
                <a href="#">comic shop locator</a>
              </div>
              <div class="image">
                <img src="/images/buy-comics-shop-locator.png" alt="location-icon">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="subscriptions">
              <div class="text">
                <a href="#">subscriptions</a>
              </div>
              <div class="image">
                <img src="/images/buy-comics-merchandise.png" alt="subscriptions-icon">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>
@endsection
