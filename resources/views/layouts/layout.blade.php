<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


        <title>Room4Rent</title>

    </head>

  <body>
    <section>
      <p>Ga je studeren in de mooiste studentenstad, schrijf je dan nu gratis in op onze website en vind de woonruimte die bij je past. </p>
          <a href="{{ route('register') }}" class="button1">Schrijf je nu in!</a>
          <p> of </p>
          <a href="/kamers" class="button1">Bekijk het actuele kamer aanbod!</a>
        </p>
    </section>

    include ('layouts.searchbar')

    <div class="album text-muted">
      <div class="container">

        @foreach ($rooms as $room)

          @include ('layouts.room')

        @endforeach

        </div>

    </footer>
  </body>
</html>
