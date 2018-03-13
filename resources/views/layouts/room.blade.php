<div>
<h1>{{$room->street}}, {{$room->housenumber}}</h1>
<h1>{{$room->city->name}}, {{$room->postcode}}</h1>
<h1>{{$room->square_meter}} m<sup>2</sup></h1>
<h1>{{$room->price}} € p/m</h1>
<h1>Aanbieder: {{$room->user->name}}</h1>
<p><strong>{{$room->created_at}}</strong></p>
<hr>
</div>
