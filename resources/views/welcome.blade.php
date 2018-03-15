<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/album.css" rel="stylesheet">
        <title>Room4Rent</title>

</head>
<body>



                @include('layouts.nav')
    <div class="welcome">

        <a href="{{ route('login') }}" class="button2">Bekijk het kameraanbod!</a> <br> <br> <br> <br>
        <a href="{{ route('login') }}" class="button2">Login</a>


        <p>Ga je studeren in de mooiste studentenstad, schrijf je dan nu <br>
          gratis in op onze website en vind de woonruimte die bij je past. </p>

        <a href="{{ route('register') }}" class="button1">Schrijf je nu gratis in!</a>

    </div>


                @include('layouts.footer')


</body>
</html>
