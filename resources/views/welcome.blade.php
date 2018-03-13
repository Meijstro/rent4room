<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/album.css" rel="stylesheet">
        <title>Laravel</title>

    </head>
    <body>

                <div class="content">

                @include('layouts.nav')

                <div class="title m-b-md">
                </div>

                @include('layouts.layout')

                <div class="footer">
                @include('layouts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
