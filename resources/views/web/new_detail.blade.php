@extends('web.layouts.master')
@section('content')

  <div class="page">
      <div class="page-content triangle-background">
          <img src="{{ asset($article->media->file_path.$article->media->file_name) }}" style="width: 100%;">
          <section class="border-bottom py-3" id="detail">
              <div class="container-fluid">

                  <div class="page-video-buttons d-flex align-items-center mb-3">
                      <a class="flex-1 page-video-buttons__item btn btn-light mr-2 active " data-id="3286"
                          rel="favorite" id="favoriteBtn" href="javascript:;">
                          <i class=" far  fa-star "></i></a>
                      <div class="flex-1 page-video-buttons__item btn btn-primary mr-2 position-relative">
                          <a class="page-video-buttons__item" id="shareBtn" href="javascript:;"
                              style="color: white;"><i class="fas fa-share"></i></a>
                          <div class="page-share-buttons shadow-sm rounded px-2 pt-3 pb-2 w-100"
                              style="display: none">
                              <a class="page-share-buttons__item--facebook m-1 p-0" href="javascript:;"><i
                                      class="fab fa-facebook-square"></i></a>
                              <a class="page-share-buttons__item--twitter m-1 p-0" href="javascript:;"><i
                                      class="fab fa-twitter-square"></i></a>
                              <a class="page-share-buttons__item--linkedin m-1 p-0" href="javascript:;"><i
                                      class="fab fa-linkedin"></i></a>
                              <a class="page-share-buttons__item--pinterest m-1 p-0" href="javascript:;"><i
                                      class="fab fa-pinterest-square"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="d-flex justify-content-between align-items-start flex-wrap">
                      <div class="flex-1 mr-2">
                          <h1 class="h5 page-video__title mb-2">{{ $article->title }}</h1>
                      </div>
                  </div>
                  <h2 class="h6 page-video__sub-title mb-0">
                      <p><strong></strong></p>
                  </h2>
                  <p>{{ $article->description }}</p>
              </div>
          </section>
      </div>

@endsection