@extends('layouts.app')

@section('content')
<div class="container">

      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Dashboard</div>
              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  @lang('phrases.loggedInAs') @if (Auth::user()->premium == '1')  Premium @endif {{Auth::user()->role}}
                  <hr>
              </div>
              <div class="card-body">
                @if (Auth::user()->premium == '0')
                @include('layouts.upgrade')
                @else
                @include ('layouts.alerts')
                <h5><a href="/message/0">@lang('phrases.messages')</a></h5><br>
                <hr>
                  @if (Auth::user()->role == 'Verhuurder')
                    @include ('layouts.addroom')
                  @elseif (Auth::user()->role == 'Huurder')
                  <h5><a href="/kamers">@lang('phrases.roomsCTA')</a></h5><br>
                  @endif
                @endif
              </div>

      </div>

</div>
@endsection
