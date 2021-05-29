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
                    @foreach($videos as $video)
                        <div class="border-bottom py-2" id="{{ $video->id }}">
                          <div class="videos-item d-flex"><a class="videos-item__image w-50" href="{{ url($video->article_id.'/article/video/detail') }}">
                              <img src="{{ asset($video->file_path.$video->file_name) }}"><i
                                class="videos-item__play fas fa-play-circle"></i></a>
                            <div class="flex-1 px-3 py-1">
                              <a style="color:#000;text-decoration: none;" href="{{ url($video->article_id.'/article/video/detail') }}">
                                <div class="videos-item__title">{{ $video->title }}</div>
                                <div class="videos-item__sub-title mt-2"></div>
                              </a>
                              <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="{{ url('remove/'. $video->id.'/favourite') }}"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                            </div>
                          </div>
                        </div>
                    @endforeach
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

                    @foreach($texts as $text)
                        <div class="border-bottom py-2" id="{{ $text->id }}">
                          <div class="videos-item d-flex"><a class="videos-item__image w-50" href="{{ url($text->article_id.'/article/text/detail') }}"><img
                                src="{{ asset($text->file_path.$text->file_name) }}" class="w-100"></a>
                            <div class="flex-1 px-3 py-1">
                              <a style="color:#000;text-decoration: none;" href="{{ url($text->article_id.'/article/text/detail') }}">
                                <div class="videos-item__title">{{ $text->title }}
                                </div>
                                <div class="videos-item__sub-title mt-2"></div>
                              </a>
                              <a class="btn btn-sm btn-outline-danger mt-3 d-table ml-auto" href="{{ url('remove/'. $text->id.'/favourite') }}" data-id="{{ $text->id }}"><i class="fas fa-trash-alt mr-1"></i>အမှိုက်</a>
                            </div>
                          </div>
                        </div>
                    @endforeach
                  
                </section>
              </div>

            </div>
          </div>
        </div>
      </div>
@endsection
