@extends('layouts.layout')


@section('content')
  @include('layouts.nav')

  @include('layouts.navigatie')

  <div class="welcome">

    <p>Ga je studeren in de mooiste studentenstad, schrijf je dan nu <br>
      gratis in op onze website en vind de woonruimte die bij je past. </p>

    <a href="/kamers" class="button2">@lang('phrases.roomsCTA')</a>

      <br> <br> <br> <br>

    <a href="{{ route('register') }}" class="button2">@lang('phrases.registerCTA')</a>

  </div>

  @include('layouts.footer')

@endsection
