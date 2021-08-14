<div class="sidebar sidebar-right py-4">
  <img class="d-table m-auto" src="{{ asset('web/images/logo_l.png') }}" height="50px">
  <nav class="navbar mt-4">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="sidebar-close" data-savepage-href="/news" href="{{ url('news') }}">
          <div class="item-title">
            <img class="item-icon" src="{{ asset('web/images/icons/ico-11.png') }}" alt="">
            သတင်းများ
          </div>
        </a>
        <a class="sidebar-close" data-savepage-href="/videos" href="{{ url('videos') }}">
          <div class="item-title">
            <img class="item-icon" src="{{ asset('web/images/icons/ico-12.png') }}" alt="">
            ဗီဒီယို
          </div>
        </a>

        <a class="sidebar-close" data-savepage-href="/favorites" href="{{ url('favorites') }}">
          <div class="item-title">
            <img class="item-icon" src="{{ asset('web/images/icons/ico-05.png') }}" alt="">
            အနှစ်သက်ဆုံးများ
          </div>
        </a>
        <a class="sidebar-close" data-savepage-href="/faq" href="{{ url('faq') }}">
          <div class="item-title">
            <img class="item-icon" src="{{ asset('web/images/icons/ico-07.png') }}" alt="">
            မေးခွန်း နှင့် အဖြေများ
          </div>
        </a>
      </li>
    </ul>
  </nav>
</div>