@extends('web.layouts.master')
@section('content')

	    <div class="page">

	        <header class="row m-0 fixed-header no-shadow bg-primary top-menu">
	            <div class="top-menu-left">
	                <a class="top-menu-back active" data-savepage-href="/news" href="{{ url('videos') }}">
	                    <i class="fas fa-arrow-left"></i></a>
	                <a class="top-menu-left-open" href="#"><i class="fas fa-info-circle"></i></a>
	            </div>
	            <div class="col center text-center"><a class="logo" href="">ဗီဒီယို</a></div>
	            <div class="top-menu-right"><a class="top-menu-close" href="#"><i class="fas fa-times"></i></a><a
	                    class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a></div>
	        </header>
	        <div class="page-content triangle-background">
	            <video class="page-video__item" height="240" controls="true" type='video/mp4'>
	                <source
	                    src="{{ asset($article->videomedia->file_path . $article->videomedia->file_name) }}"
	                    type="video/mp4">
	            </video>

	            <section class="border-bottom py-3" id="detail">
	                <div class="container-fluid">

	                    <div class="page-video-buttons d-flex align-items-center mb-3">
	                        <a class="flex-1 page-video-buttons__item btn btn-light mr-2 active {{ checkFav($article->id, 'video') }}" data-id="{{ $article->id }}" data-url="{{ url('favourite/video') }}"
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

	                    <p>&nbsp;</p>

	                </div>
	            </section>
	        </div>

	        <nav class="bottom-menu">
	            <a class="bottom-menu-item   " data-savepage-href="/news" href="news.html">
	              <svg class="icon icon-news">
	                <use xlink:href="/assets/images/icons.svg#icon-news"></use>
	              </svg>
	              <small>သတင်းများ</small>
	            </a>
	            <a class="bottom-menu-item active" data-savepage-href="/videos" href="videos.html">
	              <svg class="icon icon-videos">
	                <use xlink:href="/assets/images/icons.svg#icon-videos"></use>
	              </svg>
	              <small>ဗီဒီယို</small>
	            </a>
	           
	            <a class="bottom-menu-item" data-savepage-href="/favorites" href="favorites.html">
	              <svg class="icon icon-favorites">
	                <use xlink:href="/assets/images/icons.svg#icon-favorites"></use>
	              </svg>
	              <small id="navbar-favorites">အနှစ်သက်ဆုံးများ</small>
	            </a>
	        </nav>

	    </div>
	</div>


@endsection