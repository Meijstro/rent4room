<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

        <title>Room4Rent</title>

</head>
<body>

  @include('layouts.nav')

  <div class="about">

    <p>Sinds 2018 is Room4Rent Vastgoed actief op de kamermarkt.
      Door de hoge vraag van studentenkamers in Groningen is er besloten
      om te focussen op kamers in de stad Groningen. Met een team van drie mensen
      wordt er dag en nacht hard gewerkt om aan de wensen van de klant te voldoen. </p>

    <p>Room4Rent onderscheidt zich van andere kameraanbieders door een gerichte doelgroep te kiezen
      en daarbij lage kosten in rekening te brengen. Wij vragen eenmalig 20% van de huurprijs
      wanneer er een kamer is verhuurd. </p>


Als eerste een vergunning
Dit resulteerde in dat wij als eerste kamerverhuurbedrijf een kamerverhuur vergunning kregen uitgereikt door de gemeente Groningen!

Schaalvergroting met behoud van kwaliteit
Na deze investering heeft ons bedrijf natuurlijk niet stilgestaan, wel hebben we gekozen voor een beheerste schaalvergroting zodat we de kwaliteit van ons vastgoed  hoog weten te houden.

Dit beleid zetten wij voort! </p>

  </div>

  <div class= "contact">

      <a href="{{ route('register') }}" class="button1">Schrijf je nu gratis in!</a>

  </div>

  @include('layouts.footer')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
