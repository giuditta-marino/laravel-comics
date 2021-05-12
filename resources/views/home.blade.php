@extends('layouts.app')

@section('content')

<div class="main-top">
  <div class="container">
    <div class="row">
      @foreach ($comics as $comic)

        <div class="comic col-lg-2">
          <a href="#">
            <div class="image" style="background-image: url('{{$comic['thumb']}}')">
            </div>
          </a>
          <div class="text">
            <a href="#">
              <p>{{$comic['series']}}</p>
            </a>
          </div>
        </div>

      @endforeach
    </div>
  </div>
</div>
<div class="main-bottom">
</div>

@endsection
