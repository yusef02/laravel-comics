@extends('layouts.app')


@section('main-content')
<div class="container d-flex justify-content-center" id="comicDesc">
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="wrapper-comic text-center">
        <h1>{{ $comic['title'] }}</h1>

        <div class="wrapper-image">
          <img src="{{ url($comic['thumb']) }}">
        </div>
        <div class="caption d-flex justify-content-center">
          <p>{{ $comic['description'] }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection