<footer class="footer">
  <div class="footer__upper">
    <div class="container d-flex">
      <div class="wrapper-left-section d-flex">
        <div class="wrapper">
          <ul class="mb-3">
            <li>
              <h4>DC COMICS</h4>
            </li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>

          <ul>
            <li>
              <h4>SHOP</h4>
            </li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>
        </div>

        <ul class="wrapper">
          <li>
            <h4>DC</h4>
          </li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
        </ul>

        <ul class="wrapper">
          <li>
            <h4>SITES</h4>
          </li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
          <li><a href="">Lorem, ipsum.</a></li>
        </ul>
      </div>

      <div class="wrapper-right-section">
        <div class="wrapper-image">
          {{-- <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png') }}" class="logo"> --}}
        </div>

      </div>
    </div>

    <div class="container">
      <div class="wrapper mt-4">
        <ul>
          <li>&copy; {{ env('APP_AUTHOR', 'DC Entertainment') }} {{ now()->year }}</li>
          <li><a href="#">Cookies Settings</a></li>
        </ul>
      </div>
    </div>

  </div>

  <div class="footer__bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <button class="btn btn-outline-primary">SIGN UP NOW!</button>
      <ul class="d-flex">
        <li>
          <h4>FOLLOW US</h4>
        </li>
        <li>
          <a href=""><img src="{{ Vite::asset('/resources/images/footer-facebook.png') }}" class="logo"></a>
        </li>
        <li>
          <a href=""><img src="{{ Vite::asset('/resources/images/footer-twitter.png') }}" class="logo"></a>
        </li>
        <li>
          <a href=""><img src="{{ Vite::asset('/resources/images/footer-youtube.png') }}" class="logo"></a>
        </li>
        <li>
          <a href=""><img src="{{ Vite::asset('/resources/images/footer-pinterest.png') }}" class="logo"></a>
        </li>
        <li>
          <a href=""><img src="{{ Vite::asset('/resources/images/footer-periscope.png') }}" class="logo"></a>
        </li>
      </ul>
    </div>
  </div>
</footer>