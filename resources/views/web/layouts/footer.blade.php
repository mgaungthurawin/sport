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
      <a class="bottom-menu-item  active " data-savepage-href="/news" href="{{ $news }}">
        <svg class="icon icon-news">
          <use xlink:href="{{ asset('web/assets/images/icons.svg#icon-news') }}"></use>
        </svg>
        <small>သတင်းများ</small>
      </a>
      <a class="bottom-menu-item " data-savepage-href="/videos" href="{{ $videos }}">
        <svg class="icon icon-videos">
          <use xlink:href="/assets/images/icons.svg#icon-videos"></use>
        </svg>
        <small>ဗီဒီယို</small>
      </a>

      <a class="bottom-menu-item" data-savepage-href="/favorites" href="{{ url('favorites') }}">
        <svg class="icon icon-favorites">
          <use xlink:href="/assets/images/icons.svg#icon-favorites"></use>
        </svg>
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
        <a class="btn btn-light" href="http://myanmar-sport.com/cancelSubscription">အတည်ပြုပါ</a>
        <button class="btn btn-danger" type="button" data-dismiss="modal">ဖျက်သိမ်းခြင်း</button>
      </div>
    </div>
  </div>
</div>