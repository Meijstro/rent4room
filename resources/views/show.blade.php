<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="/css/album.css" rel="stylesheet">

        <title>{{$room->street}}&nbsp;{{$room->housenumber}} op Room4Rent</title>

    </head>
    <body>

                <div class="content">

                @include('layouts.nav')

                <div class="title m-b-md">
                </div>

                <div class='card'>
                  <img src="http://cdn-wp.s3-eu-central-1.amazonaws.com/wp-content/uploads/sites/10/2016/02/Eindhoven_Rooms_04.jpg"
                      alt="Kamer Foto" height="100%" width="100%">
                </div>

                <div class="card">
                  GEGEVENS
                </div>

                <div class="footer">
                @include('layouts.footer')
                </div>
            </div>
    </body>
</html>
