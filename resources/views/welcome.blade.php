@extends('layouts.layout')


@section('content')
  @include('layouts.nav')

  @include('layouts.navigatie')

  <div class="welcome">
    
    <p>@lang('phrases.intro') </p>
    <a href="/kamers" class="button2">@lang('phrases.roomsCTA')</a>

      <br> <br> <br> <br>

    <a href="{{ route('register') }}" class="button2">@lang('phrases.registerCTA')</a>

  </div>

  @include('layouts.footer')

@endsection
