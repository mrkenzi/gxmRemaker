<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="alternate" href="http://gamexmod.com" hreflang="en-us"/>
<!-- Styles -->
<!-- Bootstrap CSS -->
<title>@yield('title') - Download Game</title>
<meta name="description" content="@yield('description') - Skidrow Download Game"/>
<meta property="og:title" content="@yield('title') - Download Game"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{Request::url()}}"/>
<meta property="og:image" content="@yield('wallpaper')"/>
<meta property="og:description" content="@yield('description')"/>
<meta property="og:site_name" content="GamexMod"/>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" href="{{asset('css/settings.css')}}" media="screen"/>
<!-- Pretty Photo CSS -->
<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
<!-- Parallax slider -->
<link rel="stylesheet" href="{{asset('css/slider.css')}}">
<!-- Flexslider -->
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
<!-- Font awesome CSS -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue
<link href="css/green.css" rel="stylesheet">-->
<link href="{{asset('css/organce.css')}}" rel="stylesheet">
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,600,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
<link href="https://plus.google.com/u/0/+FreeDownload_GamesOffline" rel="publisher">
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'en'
    }
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-58421402-1', 'auto');
    ga('send', 'pageview');

</script>
<meta name="p:domain_verify" content="d1b0ea38ef32205bc41bac32c10eb722"/>
{{--<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: "21cc631e-fc82-4cdc-b135-a88b096a0591",
        autoRegister: true, /* Set to true to automatically prompt visitors */
        subdomainName: 'gamexmod',
        notifyButton: {
            enable: true /* Set to false to hide */
        }
    }]);
</script>--}}
