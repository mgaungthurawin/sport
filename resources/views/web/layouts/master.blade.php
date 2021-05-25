<!DOCTYPE html>
<html lang="en">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>

<head>
  <link rel="icon" data-savepage-href="/settings/September2019/IEG9EvSuZ4HxFaJ0xWsF.png" href="#">
  <title>Myanmar</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" data-savepage-href="#" type="image/png">
  <meta name="description" value="Site Description">
  <meta name="author">
  <meta name="tags">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="{{ asset('web/css/swiper.min.css ') }}" rel="stylesheet">
  <link href="{{ asset('web/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/css/jquery.scrollbar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/css/index.css') }}" rel="stylesheet">
  <link href="{{ asset('web/css/custom.css@v=5.css') }}" rel="stylesheet">



  <!-- Google Tag Manager -->
  <script></script>
  <!-- End Google Tag Manager -->
  <!-- Google Analytics -->
  <script></script>
  <!-- End Google Analytics -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9TKFTR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <script id="savepage-shadowloader" type="application/javascript">
    "use strict";
    window.addEventListener("DOMContentLoaded",
      function (event) {
        savepage_ShadowLoader(5);
      }, false);
    function savepage_ShadowLoader(c) { createShadowDOMs(0, document.documentElement); function createShadowDOMs(a, b) { var i; if (b.localName == "iframe" || b.localName == "frame") { if (a < c) { try { if (b.contentDocument.documentElement != null) { createShadowDOMs(a + 1, b.contentDocument.documentElement) } } catch (e) { } } } else { if (b.children.length >= 1 && b.children[0].localName == "template" && b.children[0].hasAttribute("data-savepage-shadowroot")) { b.attachShadow({ mode: "open" }).appendChild(b.children[0].content); b.removeChild(b.children[0]); for (i = 0; i < b.shadowRoot.children.length; i++)if (b.shadowRoot.children[i] != null) createShadowDOMs(a, b.shadowRoot.children[i]) } for (i = 0; i < b.children.length; i++)if (b.children[i] != null) createShadowDOMs(a, b.children[i]) } } }
  </script>

</head>

<body class="layout-menu" cz-shortcut-listen="true">

  <div class="wrapper">
    
    @include('web.layouts.sidebar')

    @include('web.layouts.menu')

    @yield('content')


  @include('web.layouts.footer')


  <script src="{{ asset('web/js/jquery.min.js') }}"></script>
  <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('web/js/popper.min.js') }}"></script>
  <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/js/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('web/js/amplitude.min.js') }}"></script>
  <script src="{{ asset('web/js/index.js') }}"></script>
  <script src="{{ asset('web/js/custom.js') }}"></script>

  <script type="text/javascript" id="">
    $(".swiper-container:before").click(function () {
      var leftPos = $('.swiper-wrapper').scrollLeft();
      $(".swiper-wrapper").animate({ scrollLeft: leftPos - 200 }, 800);
    });

    $(".swiper-container:after").click(function () {
      var leftPos = $('.swiper-wrapper').scrollLeft();
      $(".swiper-wrapper").animate({ scrollLeft: leftPos + 200 }, 800);
    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2228550784125379&amp;ev=PageView&amp;noscript=1">
  </noscript>
</body>

</html>