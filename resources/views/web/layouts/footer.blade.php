    @if(isset($category_id)) 
      <?php 

        $news = url($category_id.'/news');
        $videos = url($category_id.'/videos'); 

      ?>
    @else 
      <?php
        $news = url('news');
        $videos = url('videos');
      ?>
    @endif

    <nav class="bottom-menu">
      <a class="bottom-menu-item {{ Request::is('news*') ? 'active' : '' }}" data-savepage-href="/news" href="{{ $news }}">
          <img class="item-icon" src="{{ asset('web/images/icons/ico-11.png') }}" alt="">
        <small>သတင်းများ</small>
      </a>
      <a class="bottom-menu-item {{ Request::is('videos*') ? 'active' : '' }}" data-savepage-href="/videos" href="{{ $videos }}">
          <img class="item-icon" src="{{ asset('web/images/icons/ico-12.png') }}" alt="">
        <small>ဗီဒီယို</small>
      </a>
      <a class="bottom-menu-item {{ Request::is('favorites*') ? 'active' : '' }}" data-savepage-href="/favorites" href="{{ url('favorites') }}">
        <img class="item-icon" src="{{ asset('web/images/icons/ico-05.png') }}" alt="">
        <small id="navbar-favorites">အနှစ်သက်ဆုံးများ</small>
      </a>
    </nav>

  </div>
</div>

<div class="modal fade" id="open-cancel" tabindex="-1" role="dialog" aria-labelledby="cancelModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h6 class="modal-title text-center" id="cancelModal">စာရင်းပယ်ဖျက်မှုဖြစ်သွားပါလိမ့်မည်။ အတည်ပြုပါသလား?</h6>
      </div>
      <div class="modal-footer">
        <a class="btn btn-light" href="{{ url('unsubscribe') }}">အတည်ပြုပါ</a>
        <button class="btn btn-danger" type="button" data-dismiss="modal">ဖျက်သိမ်းခြင်း</button>
      </div>
    </div>
  </div>
</div>