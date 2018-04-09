@extends('layouts.layout')

@section('content')

  @include('layouts.nav')

  @include('layouts.navigatie')


  <div class="container">
    <div class="panel panel-primary" align="center">

          <form class="form-wrapper cf" action="{{ url('search') }}" method="get">
            <input name="q" type="text" placeholder="Zoek op straatnaam en/of postcode.." value="{{ request('q') }}">
            <button type="submit">Zoek</button>
          </form>
          <div>@lang('phrases.rooms') <small>({{ $rooms->count() }}) |</small>
          <button type="button" class="btn btn-light"><a href="kamers/kaart">Geef kamers weer op kaart</a></button>
          </div>
      </div>

    <br><hr>

    <script>
$(document).ready(function(){
    $("button").click(function(){
        $("#map").toggle();
    });
});
</script>

      <div class="card-deck">

        @foreach ($rooms as $room)

          @include ('layouts.room')

        @endforeach

      </div>
  </div>
</div>
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
