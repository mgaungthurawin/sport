<div class="sidebar sidebar-right py-4">
  <img class="d-table m-auto" src="{{ asset('web/images/logo_l.png') }}" height="50px">
  <nav class="navbar mt-4">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="sidebar-close" data-savepage-href="/news" href="{{ url('news') }}">
          <div class="item-title">
            <svg class="icon icon-news mr-3">
              <use xlink:href="/assets/images/icons.svg#icon-news"></use>
            </svg>
            သတင်းများ
          </div>
        </a>
        <a class="sidebar-close" data-savepage-href="/videos" href="{{ url('videos') }}">
          <div class="item-title">
            <svg class="icon icon-videos mr-3">
              <use xlink:href="/assets/images/icons.svg#icon-videos"></use>
            </svg>
            ဗီဒီယို
          </div>
        </a>

        <a class="sidebar-close" data-savepage-href="/favorites" href="{{ url('favourites') }}">
          <div class="item-title">
            <svg class="icon icon-favorites mr-3">
              <use xlink:href="/assets/images/icons.svg#icon-favorites"></use>
            </svg>
            အနှစ်သက်ဆုံးများ
          </div>
        </a>
        <a class="sidebar-close" data-savepage-href="/faq" href="{{ url('faq') }}">
          <div class="item-title">
            <svg class="icon icon-favorites mr-3">
              <use xlink:href="/assets/images/faq.svg#katman_1"></use>
            </svg>
            မေးခွန်း နှင့် အဖြေများ
          </div>
        </a>
      </li>
    </ul>
  </nav>
</div>