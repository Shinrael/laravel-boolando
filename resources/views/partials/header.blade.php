<header class="d-flex justify-content-center">
    <div class="main-wrapper d-flex justify-content-around align-items-center">
      <div class="menu d-flex">
      <ul class="d-flex list-unstyled align-items-center">
            <li>
                <a href="{{ route('woman') }}">Donna</a>
            </li>
            <li>
                <a href="{{ route('man') }}">Uomo</a>
            </li>
            <li>
                <a href="{{ route('kid') }}">Bambino</a>
            </li>
      </ul>
    </div>
    <div class="logo d-flex align-items-center justify-content-center">
      <div class="img-container">
        <a href="{{ route('home') }}">
            <img src={{asset("img/boolean-logo.png")}} alt="logo">
        </a>
      </div>
    </div>
    <div class="icon d-flex align-items-center justify-content-end">
      <ul class="d-flex list-unstyled align-items-center">
        @foreach ($hicon as $icon)
        <li>
            <a href={{ $icon['link'] }}>{!! $icon['img'] !!}</a>
          </li>
        @endforeach
      </ul>
    </div>
    </div>
  </header>
