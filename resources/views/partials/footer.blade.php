<footer class="d-flex align-items-center justify-content-center">
    <div class="main-wrapper d-flex">
      <div class="left d-flex flex-column">
      <h5>Boolando S.R.L.</h5>
      <ul class="d-flex list-unstyled ">
        @foreach ($info as $inf)
        <li>
            <a href={{ $inf['link'] }}>{{ $inf['title'] }}</a>
          </li>
        @endforeach
      </ul>
      </div>
      <div class="right d-flex flex-column align-items-end ">
        <h6>Trovaci anche su</h6>
        <ul  class="d-flex list-unstyled">
            @foreach ($social as $soc)
            <li>
                <a href={{ $soc['link'] }}>{!! $soc['img'] !!}</a>
              </li>
            @endforeach

        </ul>
      </div>
    </div>
  </footer>
