<div class="sidebar sidebar-left py-4" data-title="သတင်းအချက်အလက်">
  <div class="w-100">
    <div class="container-fluid w-100"><i class="fas fa-info-circle fa-4x m-auto d-table"></i>
      <div class="border rounded-sm mt-3 w-100">
        <div class="d-flex justify-content-between border-bottom p-2">
          <span>အသုံးပြုခနှုန်</span><span>150 / MMK</span>
        </div>
        <div class="d-flex justify-content-between p-2">
          <span>စာရင်းသွင်းသည့်ရက်စွဲ</span><span>2018-10-31 19:03:35</span>
        </div>
      </div>

      <button class="btn btn-danger m-auto d-table mt-3" data-toggle="modal" data-target="#open-cancel">
        စာရင်းမှပယ်ဖျက်ရန်</button>
    </div>
  </div>
  <img class="mt-3" src="{{ asset('web/images/logo_2.png') }}" height="50px">
</div>

<header class="row m-0 fixed-header no-shadow bg-primary top-menu">
  <div class="top-menu-left">
    <a class="top-menu-back " data-savepage-href="/news" href="#"><i class="fas fa-arrow-left"></i></a>
    <a class="top-menu-left-open  active " href="#"><i class="fas fa-info-circle"></i></a>
  </div>
  <div class="col center text-center"><a class="logo" href=""> သတင်းများ</a></div>
  <div class="top-menu-right"><a class="top-menu-close" href="#"><i class="fas fa-times"></i></a><a
      class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a></div>
</header>


<div class="page-content triangle-background">
  <div class="home-swiper home-tags">
    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
      <div class="swiper-wrapper text-center">

          @foreach(getAllCategories() as $category)
            <div class="swiper-slide"><a class="home-tags-item" href="{{ url($category->id.'/news') }}">
                <img class="header-menu-icon" src="{{ asset($category->media->file_path . $category->media->file_name ) }}" alt="">
                <span>{{ $category->name }}</span></a>
            </div>
          @endforeach
    </div>
    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button"
      aria-label="Previous slide" aria-disabled="true"><i class="fas fa-chevron-left"></i></div>
    <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide"
      aria-disabled="true"><i class="fas fa-chevron-right"></i></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  </div>
</div>