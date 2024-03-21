<header class="header">

  <div class="container d-flex justify-content-center align-items-center">
    <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" class="logo">

    <nav class="d-flex justify-content-center align-items-center">

      <ul class="d-flex">
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'home']) href="{{ route('home') }}">home</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'about']) href="{{ route('about') }}">about</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'contacts']) href="{{ route('contacts') }}">contacts</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'comics']) href="{{ route('comics') }}">comics</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'movies']) href="{{ route('movies') }}">movies</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'tv']) href="{{ route('tv') }}">tv</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'games']) href="{{ route('games') }}">games</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'collectibles']) href="{{ route('collectibles') }}">collectibles</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'videos']) href="{{ route('videos') }}">videos</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'fans']) href="{{ route('fans') }}">fans</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'news']) href="{{ route('news') }}">news</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'shop']) href="{{ route('shop') }}">shop</a>
        </li>
        <li>
          <a @class (['link','active'=> Route::currentRouteName() == 'characters']) href="{{ route('characters') }}">characters</a>
        </li>
      </ul>
    </nav>
  </div>
</header>