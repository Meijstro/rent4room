@extends('layouts.app')

@include('layouts.nav')

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

                  Je bent ingelogd als {{Auth::user()->role}}
                  <hr>
              </div>
              <div class="card-body">
                @include ('layouts.alerts')
                <a href="/message/0"><h5>Berichten</h5></a>
                @if (Auth::user()->role == 'Verhuurder')
                  @include ('layouts.addroom')
                @elseif (Auth::user()->role == 'Huurder')
                @endif
              </div>

      </div>

</div>
@endsection
