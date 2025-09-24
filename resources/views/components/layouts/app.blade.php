<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/dist/tuicss.min.css"/>
        <script src="/dist/tuicss.min.js"></script>

        <title>{{ $title ?? 'ChiaFu' }}</title>
    </head>
    <body class="blue-255 h-full" >
    <div >
        <div class="center">
            <img src="./img/banner_transparent.png"/>
            <div class="tui-divider" ></div>
        </div>

            {{ $slot }}



    </div>

    </body>
</html>
