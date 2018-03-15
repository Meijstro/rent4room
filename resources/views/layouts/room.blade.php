<a href="/kamer/{{$room->id}}">
<div class="card">
  <div class="card-text">
    @if ($room->photos || $room->photos > 0)
      <img height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
      alt="Image not found" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
    @endif
    <h3>{{$room->street}}, {{$room->housenumber}}</h3>
    <h3>{{$room->city->name}}, {{$room->postcode}}</h3>
    <h3>{{$room->square_meter}} m<sup>2</sup></h3>
    <h3>{{$room->price}} € p/m</h3>
    <h3>Aanbieder: {{$room->user->name}}</h3>
    <p>{{$room->created_at->diffForHumans()}}</p>
  </div>
</div>
</a>
