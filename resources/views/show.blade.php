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
                  <img height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
                  alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />

                  @foreach ($room->photos as $photo)
                  <div>
                  <img height="20%" width="20%" src="{{asset($room->photos->first()['filename'])}}"
                  alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
                  </div>
                  @endforeach
                </div>

                <div class="card">
                  <h3>{{$room->street}}, {{$room->housenumber}}</h3>
                  <h3>{{$room->city->name}}, {{$room->postcode}}</h3>
                  <h3>{{$room->square_meter}} m<sup>2</sup></h3>
                  <h3>{{$room->price}} € p/m</h3>
                  <h3>Aanbieder: {{$room->user->name}}</h3>
                  <p>{{$room->created_at->diffForHumans()}}</p>
                </div>

                <div class="card">
                  @if (Auth::check())
                    <a href="/reageer_url_komt_hier"><h2>Reageer op deze kamer</h2></a>
                  @else
                  <p><strong> <a href="/login">
                    Log in
                  </a> of <a href="/register">
                    registeer
                  </a> om te kunnen reageren op dit kameraanbod</strong></p>
                @endif
                </div>
                <div class="footer">
                @include('layouts.footer')
                </div>
            </div>
    </body>
</html>
