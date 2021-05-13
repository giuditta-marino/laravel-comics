@extends('layouts.app')

@section('title')
<title>DC Comics</title>
@endsection

@section('content')
<main id="home-main">
  <div class="main-top">
    <div class="container">
      <div class="row">
        @foreach ($comics as $key=> $comic)

          <div class="comic col-lg-2">
            <a href="{{ route('detail', ['id' => $key]) }}">
              <div class="image" style="background-image: url('{{$comic['thumb']}}')">
              </div>
            </a>
            <div class="text">
              <a href="{{ route('detail', ['id' => $key]) }}">
                <p>{{$comic['series']}}</p>
              </a>
            </div>
          </div>

        @endforeach
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <button type="button" name="button">load more</button>
        </div>
      </div>
    </div>
  </div>
  <div class="main-bottom">
  </div>
</main>

@endsection
