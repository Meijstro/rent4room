@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @include ('layouts.alerts')
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
                  @if (Auth::user()->role == 'Verhuurder')
                    @include ('layouts.addroom')
                  @elseif (Auth::user()->role == 'Huurder')
                    @include ('layouts.messages')
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
