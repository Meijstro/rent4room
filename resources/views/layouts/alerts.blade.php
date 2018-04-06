@if ($message = Session::get('success'))

  <div class="alert alert-success">
      <p>{!! $message !!}</p>
  </div>

  @endif

  @if ($message = Session::get('alert'))

    <div class="alert alert-info">
        <p>{!! $message !!}</p>
    </div>

    @endif

  @if (count($errors))

  <div class="form-group">

    <div class="alert alert-warning">

      <ul>

        @foreach ($errors->all() as $error)

          <li>{{$error}}</li>

        @endforeach

      </ul>

    </div>

  </div>

  @endif
