@extends('web.layouts.master')
@section('content')

    <div class="page">
      

      <div class="page-content triangle-background">
        <div class="container-fluid">
          <div class="py-3">
            <div class="accordion mt-n2" id="accordion">

              <div class="card-header justify-content-between mt-2 collapsed" data-toggle="collapse"
                href="#collapseOne">
                <a class="card-title">
                  <i class="fab fa-youtube mr-2"></i>
                  အနှစ်သက်ဆုံး ဗွီဒီယိုများ
                </a>
                <a class="collapse-icon">
                  <i class="fas fa-angle-down"></i>
                </a>
              </div>
              <div class="card-body collapse p-0" id="collapseOne" data-parent="#accordion">
                <section class="videos py-1" id="otherVideos">
                  <div class="border-bottom py-2" id="fav1671">
                    <div class="videos-item d-flex"><a class="videos-item__image w-50" href="#">
                        <img src="images/favorites/ewyuqg-muaythai-mma-boxing-sportpng.png"><i
                          class="videos-item__play fas fa-play-circle"></i></a>
                      <div class="flex-1 px-3 py-1">
                        <a style="color:#000;text-decoration: none;" href="#">
                          <div class="videos-item__title">မွေထိုင်းနှင့်မြန်မာ့လက်ဝှေ့</div>
                          <div class="videos-item__sub-title mt-2"></div>
                        </a>
                        <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="javascript:;" rel="remove"
                          data-id="1671"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom py-2" id="fav1674">
                    <div class="videos-item d-flex"><a class="videos-item__image w-50" href="#"><img
                          src="images/favorites/pgxdkh-karting3png.png"><i
                          class="videos-item__play fas fa-play-circle"></i></a>
                      <div class="flex-1 px-3 py-1">
                        <a style="color:#000;text-decoration: none;" href="#">
                          <div class="videos-item__title">ပြိုင်ကား ချံပီယံရှစ်ပြိုင်ပွဲ ၂၀၁၈</div>
                          <div class="videos-item__sub-title mt-2"></div>
                        </a>
                        <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="javascript:;" rel="remove"
                          data-id="1674"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <div class="card-header justify-content-between mt-2 collapsed" data-toggle="collapse"
                href="#collapseTwo">
                <a class="card-title">
                  <i class="far fa-newspaper mr-2"></i>
                  အနှစ်သက်ဆုံး သတင်းများ
                </a>
                <a class="collapse-icon">
                  <i class="fas fa-angle-down"></i>
                </a>
              </div>
              <div class="card-body collapse" id="collapseTwo" data-parent="#accordion">
                <section class="videos py-1" id="otherVideos">
                  <div class="border-bottom py-2" id="fav1469">
                    <div class="videos-item d-flex"><a class="videos-item__image w-50" href="#"><img
                          src="images/favorites/10-2 (1).jpg" class="w-100"></a>
                      <div class="flex-1 px-3 py-1">
                        <a style="color:#000;text-decoration: none;" href="#">
                          <div class="videos-item__title">၂၀၁၉-၂၀၂၀ ဖူဆယ်လိဂ်ပြိုင်ပွဲကို အသင်း ၁၂ သင်းဖြင့် ကျင်းပမည်
                          </div>
                          <div class="videos-item__sub-title mt-2"></div>
                        </a>
                        <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="javascript:;" rel="remove"
                          data-id="1469"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom py-2" id="fav1652">
                    <div class="videos-item d-flex"><a class="videos-item__image w-50" href="#"><img
                          src="images/favorites/2-1 (2).jpg" class="w-100"></a>
                      <div class="flex-1 px-3 py-1">
                        <a style="color:#000;text-decoration: none;" href="#">
                          <div class="videos-item__title">အာဆင်နယ်ကိုပြောင်းရင် နာမည်ပျက်လိမ့်မယ်</div>
                          <div class="videos-item__sub-title mt-2"></div>
                        </a>
                        <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="javascript:;" rel="remove"
                          data-id="1652"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom py-2" id="fav3282">
                    <div class="videos-item d-flex"><a class="videos-item__image w-50" href="#"><img
                          src="images/favorites/jNMunW2LAjmc4AAePPIn.jpg" class="w-100"></a>
                      <div class="flex-1 px-3 py-1">
                        <a style="color:#000;text-decoration: none;" href="#">
                          <div class="videos-item__title">အလွတ်ပြောင်းရွှေ့ကြေးဖြင့် ၂၀၂၂ တွင် နေမာကိုပြန်ခေါ်ရန်
                            ဘာစီလိုနာစီစဉ်</div>
                          <div class="videos-item__sub-title mt-2"></div>
                        </a>
                        <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="javascript:;" rel="remove"
                          data-id="3282"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

            </div>
          </div>
        </div>
      </div>
@endsection
