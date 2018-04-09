<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <title>Room4Rent</title>

</head>
<body>

  @include('layouts.nav')

  @include('layouts.navigatie')

  <div class="about">

    <h2> @lang('phrases.about') </h2>

    <p> @lang('phrases.abouttext')</p>

  </div>

  <div class= "contact">

      <a href="{{ route('register') }}" class="button1">@lang('phrases.registerCTA')</a>

  </div>

  @include('layouts.footer')

</body>
</html>
