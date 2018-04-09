@extends('layouts.layout')

@section('content')

  @include('layouts.nav')


  <div class="container">
    <div class="panel panel-primary" align="center">
      <div>@lang('phrases.rooms') <small>({{ $rooms->count() }})</small></div>
          <form class="form-wrapper cf" action="{{ url('search') }}" method="get">
            <input name="q" type="text" placeholder="Zoek op straatnaam en/of postcode.." value="{{ request('q') }}">
            <button type="submit">Zoek</button>
          </form>
      </div>
      <button type="button" class="btn btn-light">Geef kamers weer op kaart</button>

      <div id="map" style="width: 100%; height:80%; margin-top: 2%;" class="mw-80 hidden">
      </div><br><hr>

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
