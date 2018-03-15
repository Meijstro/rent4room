<a href="/kamer/{{$room->id}}">
<div class="card">
  <div class="card-text">
    @if ($room->photos || $room->photos > 0)
      <img height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
      alt="Image not found" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
    @endif
<<<<<<< HEAD
    <h4>{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>
    <h5>Grootte: {{$room->square_meter}} m<sup>2</sup></h5>
    <h5>Huur: {{$room->price}} € p/m</h5>
    <h5>Aanbieder: {{$room->user->name}}</h5>
    <p>{{$room->created_at}}</p>
=======
    <h3>{{$room->street}}, {{$room->housenumber}}</h3>
    <h3>{{$room->city->name}}, {{$room->postcode}}</h3>
    <h3>{{$room->square_meter}} m<sup>2</sup></h3>
    <h3>{{$room->price}} € p/m</h3>
    <h3>Aanbieder: {{$room->user->name}}</h3>
    <p>{{$room->created_at->diffForHumans()}}</p>
>>>>>>> d66d00936dc3d7b8e03227aec0e7ec2eeb5ea29a
  </div>
</div>
</a>
