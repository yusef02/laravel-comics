@extends('layouts.app')


@section('main-content')
<section class="sectionComics" id="sectionComics">
  <div class="container">
    <button class="btn btn-primary" id="currents">CURRENT SERIES</button>

    <div class="row g-4">
      @foreach ($comics as $index => $comic)
      <div class="col-2">
        <div class="card">
          <div class="wrapper-image">
            <a href="{{ route('comicDesc', [
                'index' => $index
              ]) }}">
              <img src="{{ url($comic['thumb']) }}" alt="">
            </a>
          </div>
          <p>{{ $comic['title'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="container text-center mt-5">
    <button class="btn btn-primary" id="more">LOAD MORE</button>
  </div>

</section>

@endsection