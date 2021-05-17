<!DOCTYPE HTML>
<html>
    <head>
        <title>GoGames | Myanmar</title>
	<link rel="icon" href="http://login.gogamesapp.com/public/logo/icon.png">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/my.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">
        
</head>
<body>
    <div class="nav-option">
    </div>

    @yield('content')

    <script type="text/javascript" src="{{asset('bower_components/jquery-1.12.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </script>
    @yield('scripts')
    <script type="text/javascript">
        $('.alert').delay(3000).hide(0);
    </script>

</body>
</html>










