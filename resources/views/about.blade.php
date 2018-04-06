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

    <p style font-weight="bold">Sinds 2018 is Room4Rent Vastgoed actief op de kamermarkt.
      Door de hoge vraag van studentenkamers in Groningen is er besloten
      om uitsluitend te focussen op de kamermarkt in de stad Groningen. Met een team bestaande uit drie mensen
      wordt er dag en nacht hard gewerkt om aan de wensen van de klant te voldoen. </p>

    <p>Room4Rent onderscheidt zich van andere kameraanbieders door een gerichte doelgroep te kiezen
      en daarbij lage kosten in rekening te brengen. Wij brengen eenmalig 12,50 in rekening waarmee de klant premium wordt
       en zo de kamers kan verhuren of huren. </p>

    <p>We blijven als bedrijf niet stilstaan en investeren in het zoeken
       naar potentiele huurder en verhuurders om zo een divers mogelijk
        aanbod aan te kunnen bieden. </p>

    <p>Dit beleid zetten wij voort! </p>

    <p>Namens het team van Room4Rent wensen wij je veel succes bij het vinden
      van jou ideale studentenkamer. </p>

  </div>

  <div class= "contact">

      <a href="{{ route('register') }}" class="button1">Schrijf je nu gratis in!</a>

  </div>

  @include('layouts.footer')

</body>
</html>
