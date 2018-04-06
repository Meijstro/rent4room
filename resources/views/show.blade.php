@extends('layouts.layout')
      <title>{{$room->street}}&nbsp;{{$room->housenumber}} op Room4Rent</title>
@section('content')

  @include('layouts.nav')
    @include('layouts.navigatie')
  <hr>


  <div class="container">
      <div class="row my-4">
          <div class="col-lg-8">
            <img class="img-fluid rounded" height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
            alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='/defaultroom.jpg';" />

              @foreach ($room->photos as $photo)

            <div>
              <img class="img-fluid rounded" height="20%" width="20%" src="{{asset($room->photos->first()['filename'])}}"
              alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='/defaultroom.jpg';" />
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


@endsection

@section('footer')
  @include('layouts.footer')
@endsection
