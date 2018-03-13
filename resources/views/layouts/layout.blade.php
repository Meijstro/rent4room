<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Album example for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>


    <section class="jumbotron text-center">
      <div class="container">
        <p class="lead text-muted">Ga je studeren in de mooiste studentenstad, schrijf je dan nu gratis in op onze website en vind de woonruimte die bij je past. </p>
        <p>
          <a href="{{ route('register') }}" class="btn btn-primary">Schrijf je nu in!</a>
          <p> of </p>
          <a href="{{ route('login') }}" class="btn btn-primary">Bekijk het actuele kamer aanbod!</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        @foreach ($rooms as $room)

          @include ('layouts.room')

        @endforeach
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>

          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>

          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>

          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>


        </div>

      </div>
    </div>

    </footer>
  </body>
</html>
