@extends('web.layouts.master')
@section('content')

    <div class="page">
      <div class="py-2">
          <div class="news mb-n2" id="datas">
              @foreach($articles as $article)
                <a class="news-item mb-2"  href="{{ url($article->id.'/article/video/detail') }}">
                  <img src="{{ asset($article->media->file_path . $article->media->file_name ) }}" alt="">
                  <span class="news-item__title">{{ $article->title }}</span>
                </a>
              @endforeach

              {{--<a class="news-item mb-2" href="video-detail.html">
                  <img src="{{ asset('web/images/video/1.jfif') }}" alt="">
                  <span class="news-item__title">IR Iran VS Portugal - 2018 FIFA World Cup Russia</span>
              </a>
              <a class="news-item mb-2"  href="video-detail.html">
                  <img src="{{ asset('web/images/video/2.jfif') }}" alt="">
                  <span class="news-item__title">Portugal VS Spain - 2018 FIFA World Cup Russia</span>
              </a>
              <a class="news-item mb-2"  href="video-detail.html">
                  <img src="{{ asset('web/images/video/3.jfif') }}">
                  <span class="news-item__title">Russia VS Saudi Arabia 5:0</span>
              </a>
              <a class="news-item mb-2"  href="video-detail.html">
                  <img src="{{ asset('web/images/video/4.jfif') }}">
                  <span class="news-item__title">ကIceland v Croatia -၂၀၁၈ ကမ္ဘာ့ဖလားပြိုင်ပွဲ(ရှရှား)</span>
              </a>
              <a class="news-item mb-2"  href="video-detail.html">
                  <img src="{{ asset('web/images/video/5.jfif') }}">
                  <span class="news-item__title">Argentina VS Iceland -၂၀၁၈ ကမ္ဘာ့ဖလားပြိုင်ပွဲ(ရှရှား)</span>
              </a>--}}
          </div>
      </div>
@endsection