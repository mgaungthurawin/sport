@extends('web.layouts.master')
@section('content')

    <div class="page">
      <div class="py-2">
        <div class="news mb-n2" id="datas">

            @foreach($articles as $article)
              <a class="news-item mb-2"  href="{{ url($article->id.'/article/text/detail') }}">
                @if(isset($article->media))
                <img src="{{ asset($article->media->file_path . $article->media->file_name ) }}" alt="">
                @endif
                <span class="news-item__title">{{ $article->title }}</span>
              </a>
            @endforeach

          {{--<a class="news-item mb-2"  href="news-detail.html">
            <img src="{{ asset('web/images/1.jpg') }}" alt="">
            <span class="news-item__title">ဗန်ဒီဘိခ်ကို ရာဘီယော့နှင့်လဲရန် မန်ယူစီစဉ်</span>
          </a>
          <a class="news-item mb-2" href="news-detail.html">
            <img src="{{ asset('web/images/2.jpg') }}" alt="">
            <span class="news-item__title">ကြားသိရသမျှ သတင်းတိုများ</span>
          </a>
          <a class="news-item mb-2" href="news-detail.html">
            <img src="{{ asset('web/images/download.jpg') }}">
            <span class="news-item__title">ပေါင်သန်း ၃၀ တန် ကစားသမားကို အပြိုင်လုနေတဲ့ လီဗာပူးနဲ့ ချဲလ်ဆီး</span>
          </a>
          <a class="news-item mb-2" href="news-detail.html">
            <img src="{{ asset('web/images/2.jpg') }}">
            <span class="news-item__title">ကြားသိရသမျှ သတင်းတိုများ</span>
          </a>
          <a class="news-item mb-2" href="news-detail.html">
            <img src="{{ asset('web/images/download (1).jpg') }}">
            <span class="news-item__title">အလွတ်ပြောင်းရွှေ့ကြေးဖြင့် ၂၀၂၂ တွင် နေမာကိုပြန်ခေါ်ရန် ဘာစီလိုနာစီစဉ်</span>
          </a>
          <a class="news-item mb-2" href="news-detail.html">
            <img src="{{ asset('web/images/2.jpg') }}">
            <span class="news-item__title">ကြားသိရသမျှ သတင်းတိုများ</span>
          </a>--}}
       
        </div>
      </div>
@endsection