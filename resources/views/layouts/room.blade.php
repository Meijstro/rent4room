<div class="row">
  <div class="card">
    <div class="card-text">
<h3>{{$room->street}}, {{$room->housenumber}}</h3>
<h3>{{$room->city->name}}, {{$room->postcode}}</h3>
<h3>{{$room->square_meter}} m<sup>2</sup></h3>
<h3>{{$room->price}} € p/m</h3>
<h3>Aanbieder: {{$room->user->name}}</h3>
<p>{{$room->created_at}}</p>
</div>
</div>
</div>
