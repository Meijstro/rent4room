<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <title>{{$room->street}}&nbsp;{{$room->housenumber}} op Room4Rent</title>
        <style>
        #slideshow {
          position:relative;
          height:350px;
          max-width: 1000px;
          position: relative;
          margin: auto;
          }

        #slideshow IMG {
            position:absolute;
            top:0;
            left:0;
            z-index:8;
          }

        #slideshow IMG.active {
            z-index:10;
          }

        #slideshow IMG.last-active {
            z-index:9;
          }
          .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 28px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            z-index:19;
          }

          /* Position the "next button" to the right */
          .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
          }
        </style>
    </head>
<body>

  @include('layouts.nav')
    @include('layouts.navigatie')
  <hr>

  <div class="container">
      <div class="row my-4">
          <div class="col-lg-8">

            <div id="slideshow">

              @foreach ($room->photos as $key => $photo)
                @if ($key == 0)
                  <img width= "100%" src="{{asset($photo->filename)}}"
                  alt="{!!asset($photo->filename)!!}" onerror="this.onerror=null;this.src='/defaultroom.jpg';"
                  class="active"/>
                @else
                  <img width= "100%" src="{{asset($photo->filename)}}"
                  alt="{!!asset($photo->filename)!!}" onerror="this.onerror=null;this.src='/defaultroom.jpg';"
                  />
                @endif
              @endforeach

          </div>
            <h5 class="next" onclick="slideSwitch()">&#10095;</h5>
        </div>
          <div class="col-lg-4">
                <h4 class="card-title">{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>
                <h5>Grootte: <small>{{$room->square_meter}} m</small><sup>2</sup></h5>
                <h5>Huur: <small>{{$room->price}} € p/m</small></h5>
                <h5>Aanbieder: <small>{{$room->user->name}}</small></h5>
                <h5>Locatie: </h5>

                  @include('layouts.googlemap')
                <br><br>
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

        <div class="card-footer">
          <small class="text-muted">Online since: {{$room->created_at->diffForHumans()}}</small>
            <h5>Beschikbaar vanaf: <small>{{$room->date_available}}</small></h5><hr>
            <p>{{$room->description}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      @include('layouts.footer')
  </div>
    <script async defer
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyAN6TE6Vw7wPbgC9-0n2yQIrr9UmrJdVTE&callback=initMap">
      </script>
    <script>
    function slideSwitch() {
    var $active = $('#slideshow IMG.active');
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
    : $('#slideshow IMG:first');

    $next.addClass('active');

    $active.removeClass('active');
    };
    </script>
</body>
</html>
