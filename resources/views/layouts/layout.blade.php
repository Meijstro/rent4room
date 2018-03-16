<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>

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
