@extends('layouts.layout')

@section('content')

  @include('layouts.nav')

  @include('layouts.searchbar')


  <div class="container">
      <div class="card-deck">

        @foreach ($rooms as $room)

          @include ('layouts.room')

        @endforeach

      </div>
    </div>

@endsection

@section('footer')
  @include('layouts.footer')
@endsection
