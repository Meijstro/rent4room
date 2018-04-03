@extends('layouts.layout')

@section('content')

  @include('layouts.nav')

  @include('layouts.navigatie')

  @include('layouts.searchbar')


  <div class="container">
    <div class="panel panel-primary" align="center">

          <form class="form-wrapper cf" action="{{ url('search') }}" method="get">
            <input name="q" type="text" placeholder="Zoek op straatnaam en/of postcode.." value="{{ request('q') }}">
            <button type="submit">Zoek</button>
          </form>
          <div>@lang('phrases.rooms') <small>({{ $rooms->count() }}) |</small>
          <button type="button" class="btn btn-light"><a href="kamers/kaart">Geef kamers weer op kaart</a></button>
          </div>
      </div>

    <br><hr>

    <script>
$(document).ready(function(){
    $("button").click(function(){
        $("#map").toggle();
    });
});
</script>

      <div class="card-deck">

        @foreach ($rooms as $room)

          @include ('layouts.room')

        @endforeach

      </div>
  </div>
</div>
@endsection

@section('footer')
  @include('layouts.footer')
@endsection

<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {lat: 53.216595, lng: 6.567264}
    });
    var geocoder = new google.maps.Geocoder();

    var locations = <?php echo $units; ?>

    var infowindow = new google.maps.InfoWindow();
    var bounds = new google.maps.LatLngBounds();
    var marker, i;
    for (i = 0; i < locations.length; i++) {
      codeAddress(locations[i]);
    }

    function codeAddress(location) {
    geocoder.geocode({
        'address': location[1]
      }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                title: 'Klik voor meer info; dubbelklik om de kamer te bekijken',
                url: locations[0],
                position: results[0].geometry.location
            });
            bounds.extend(marker.getPosition());
            map.fitBounds(bounds);
            google.maps.event.addListener(marker, 'dblclick', function () {
                window.location.href = '/kamer/'+ location[0];
            });
            google.maps.event.addListener(marker, 'click', (function (marker, location) {
                return function () {
                  infowindow.setContent(location[2]);
                  infowindow.open(map, marker);
                };
            })(marker, location));
          } else {
            console.log("Geocode was not successful for the following reason: " + status);
            }
          });
        }
      }
  </script>
