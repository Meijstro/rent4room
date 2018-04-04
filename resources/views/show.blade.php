<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="//getbootstrap.com/docs/4.0/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">

        <title>{{$room->street}}&nbsp;{{$room->housenumber}} op Room4Rent</title>

    </head>
    <body>



                @include('layouts.nav')
<hr>


<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
          alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />

            @foreach ($room->photos as $photo)

          <div>
            <img class="img-fluid rounded" height="20%" width="20%" src="{{asset($room->photos->first()['filename'])}}"
            alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
          </div>

            @endforeach

        </div>

        <div class="col-lg-4">
              <h4 class="card-title">{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>
              <h5>Grootte: <small>{{$room->square_meter}} m</small><sup>2</sup></h5>
              <h5>Huur: <small>{{$room->price}} € p/m</small></h5>
              <h5>Aanbieder: <small>{{$room->user->name}}</small></h5>
              <h5>Locatie: </h5>

                @include('layouts.googlemap')

        </div>
      </div>

      <div class="card-footer">
        <small class="text-muted">Online since: {{$room->created_at->diffForHumans()}}</small>
          <h4>Beschikbaar vanaf: <small>{{$room->date_available}}</small></h4>
      </div>
    </div>
  </div>
</div>

      <div class="card">
          @if (Auth::check() && $room->user->id == Auth::user()->id)
          <p><strong> <a href="/kamer/{{$room->id}}/aanpassen">Update deze kamer</a></strong></p>
          @elseif (Auth::check() && Auth::user()->premium == '1')
            <p><strong><a href="/message/{{$room->user->id}}/{{$room->id}}">Reageer op deze kamer</a></strong></p>
          @elseif (Auth::check())
          <p><strong><a href="/dashboard">Upgrade je Account </a> om te kunnen reageren</strong></p>
          @else
          <p><strong> <a href="/login">Log in</a> of <a href="/register">registeer</a></strong></p>
          @endif
      </div>

    </div>

            <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
