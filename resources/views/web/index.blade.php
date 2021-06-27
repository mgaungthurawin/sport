<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myanmar</title>
    <link href="{{ asset('web/css/all.css') }}" rel="stylesheet">
</head>
<body>
<div class="ap">
    <p style="text-align: center; margin-bottom: 0;">
        <img src="{{ asset('web/images/logo_l.png') }}">
    </p>
    <p style="text-align: center; margin: 0;">&nbsp;</p>
    <main class="font-pyidaungsu">
        <div class="uk-container">
            <div style="margin: 0; padding: 0; box-sizing: border-box; height: 4px; display: flex;">
                <div style="margin: 0; padding: 0; box-sizing: border-box; background: #e6243b; width: 33.3%;">&nbsp;
                </div>
                <div style="margin: 0; padding: 0; box-sizing: border-box; background: #fdca15; width: 33.3%;">&nbsp;
                </div>
                <div style="margin: 0; padding: 0; box-sizing: border-box; background: #41ac38; width: 33.3%;">&nbsp;
                </div>
            </div>
            <div
                style="box-sizing: border-box; padding: 10px; text-align: center; font-size: 16px; background: none; color: #000000; border-radius: 10px; max-width: 500px; margin: 0 auto;">
                ပရီးမီးယားလိဒ်၊ မြန်မာနေရှင်နယ်လိဒ်နှင့် လိဒ်အစုံ၏ ရမှတ်၊ အဆင့်များကို အချိန်နှင့်တပြေးညီ သိရှိရမှာပါ။
            </div>
            <div style="width: 100%; text-align: center;"><img style="width: 320px; height: auto; border-radius: 10px;"
                                                               src="{{ asset('web/images/sports-lp.png') }}"/> <br/><br/></div>
            <div
                style="margin: 0; box-sizing: border-box; border-width: 3px 0px 3px 0px; border-color: #58c7d8; border-style: solid; padding: 6px; margin-top: 9px; font-size: 17px; color: black; textalign: center; padding-top: 15px; line-height: 2em; text-align: center;">
                စာရင်းသွင်းခြင်းအတွက်နေ့စဉ်(၁၅၀)ကျပ်
            </div>
            <div class="uk-flex uk-flex-center subs-div" style="text-align: center;"><br/>
                <a href="http://mymportals.com?service_type=MMSPORT&service_id=538" id="subscribe-button"
                        style="margin: 0; padding: 10px 20px;text-decoration: none; box-sizing: border-box; background: #1db33d; color: #ffffff; height: 50px; line-height: 48px; border-radius: 25px; width: 80%; max-width: 400px; font-size: 1.3em; border: 0;">
                    စာရင်းသွင်းရအောင်
            </a>
            </div>
        </div>
    </main>
</div>
<script src="{{ asset('web/js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '#subscribe-btn', function () {
            window.location.href = 'http://mymportals.com?service_type=MMSPORT&service_id=538';
        });
    })
</script>
</body>
</html>
