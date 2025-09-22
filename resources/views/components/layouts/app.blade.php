<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/dist/tuicss.min.css"/>
        <script src="/dist/tuicss.min.js"></script>
        <title>{{ $title ?? 'ChiaFu' }}</title>
    </head>
    <body class="blue-255 h-full">
    <div >
        <nav class="tui-nav">
            <ul>
                <li class="tui-dropdown">
                    <span class="red-168-text">M</span>enu
                    <div class="tui-dropdown-content">
                        <ul>
                            <li><a href="/"><span class="red-168-text">H</span>ome</a></li>
                            <li><a href="/buy"><span class="red-168-text">B</span>uy</a></li>
                            <li><a href="/"><span class="red-168-text">F</span>ight</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="full-height blue-255 white-255-text ">
            {{ $slot }}
        </div>


    </div>

    </body>
</html>
