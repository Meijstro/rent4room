@extends('layouts.layout')
      <title>{{$room->street}}&nbsp;{{$room->housenumber}} op Room4Rent</title>
      <style>
      * {box-sizing: border-box}
      body {font-family: Verdana, sans-serif; margin:0}
      .mySlides {display: none}
      img {vertical-align: middle;}

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }

      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }

      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }
      </style>
@section('content')

  @include('layouts.nav')
    @include('layouts.navigatie')
  <hr>

  <div class="container">
      <div class="row my-4">
          <div class="col-lg-8">

            <div class="slideshow-container">

              @foreach ($room->photos as $photo)

              <div class="mySlides fade">

                <img class="img-fluid rounded" width="100%" src="{{asset($photo->filename)}}"
                alt="Foto niet gevonden!" onerror="this.onerror=null;this.src='/defaultroom.jpg';" />

              </div>

              @endforeach

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

              </div>
              <br>

              <div style="text-align:center">
                @foreach ($room->photos as $key => $value)
                <span class="dot" onclick="currentSlide({{$key+1}})"></span>
                @endforeach
              </div>

          </div>

          <div class="col-lg-4">
                <h4 class="card-title">{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>
                <h5>Grootte: <small>{{$room->square_meter}} m</small><sup>2</sup></h5>
                <h5>Huur: <small>{{$room->price}} € p/m</small></h5>
                <h5>Aanbieder: <small>{{$room->user->name}}</small></h5>
                <h5>Locatie: </h5>

                  @include('layouts.googlemap')
                <br><br>
                @if (Auth::check() && $room->user->id == Auth::user()->id)
                <p><strong> <a href="/kamer/{{$room->id}}/aanpassen">Update deze kamer</a></strong></p>
                @elseif (Auth::check() && Auth::user()->premium == '1')
                  <p><strong><a href="/message/{{$room->user->id}}/{{$room->id}}">Reageer op deze kamer</a></strong></p>
                @elseif (Auth::check())
                <p><strong><a href="/dashboard">Upgrade je Account </a> om te kunnen reageren</strong></p>
                @else
                <p><strong> <a href="/login">Log in</a> of <a href="/register">registeer</a></strong></p>
                @endif
          </div>
        </div>

        <div class="card-footer">
          <small class="text-muted">Online since: {{$room->created_at->diffForHumans()}}</small>
            <h5>Beschikbaar vanaf: <small>{{$room->date_available}}</small></h5><hr>
            <p>{{$room->description}}</p>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('footer')
  @include('layouts.footer')
@endsection
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
