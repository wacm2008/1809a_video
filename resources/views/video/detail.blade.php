<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>despedida de Andrés Iniesta</h3>
    <video src="{{env('HOST')}}/{{$videoDetail['path']}}" controls="controls"></video>
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="x-ua-compatible" content="IE=edge" >--}}
    {{--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>--}}
    {{--<title>Aliplayer Online Settings</title>--}}
    {{--<link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />--}}
    {{--<script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="prism-player" id="player-con"></div>--}}
{{--<script>--}}
    {{--var player = new Aliplayer({--}}
            {{--"id": "player-con",--}}
            {{--"source": "{{env('HOST')}}/{{$videoDetail['path']}}",--}}
            {{--"width": "100%",--}}
            {{--"height": "500px",--}}
            {{--"autoplay": true,--}}
            {{--"isLive": false,--}}
            {{--"rePlay": false,--}}
            {{--"playsinline": true,--}}
            {{--"preload": true,--}}
            {{--"controlBarVisibility": "hover",--}}
            {{--"useH5Prism": true--}}
        {{--}, function (player) {--}}
            {{--console.log("The player is created");--}}
        {{--}--}}
    {{--);--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
