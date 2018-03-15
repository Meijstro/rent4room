<a href="/kamer/{{$room->id}}">
<div class="card">
  <div class="card-text">
    @if ($room->photos || $room->photos > 0)
      <img height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
      alt="Image not found" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
    @endif

    <h4>{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>
    <h5>Grootte: {{$room->square_meter}} m<sup>2</sup></h5>
    <h5>Huur: {{$room->price}} € p/m</h5>
    <h5>Aanbieder: {{$room->user->name}}</h5>
    <p>{{$room->created_at->diffForHumans()}}</p>

  </div>
</div>
</a>
