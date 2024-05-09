<header class="d-flex justify-content-center">
    <div class="main-wrapper d-flex justify-content-around align-items-center">
      <div class="menu d-flex">
      <ul class="d-flex list-unstyled align-items-center">
        <li>
          <a href="#">Donna</a>
        </li>
        <li>
          <a href="#">Uomo</a>
        </li>
        <li>
          <a href="#">Bambini</a>
        </li>
      </ul>
    </div>
    <div class="logo d-flex align-items-center justify-content-center">
      <div class="img-container">
        <img src="/public/img/boolean-logo.png" alt="logo">
      </div>
    </div>
    <div class="icon d-flex align-items-center justify-content-end">
      <ul class="d-flex list-unstyled align-items-center">
        <li v-for="(icon,index) in icons" :key="index">
          <a href="icon.link" v-html="icon.img"></a>
        </li>
      </ul>
    </div>
    </div>
  </header>
