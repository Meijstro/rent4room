  <div class="card mb-4">
      <a href="/kamer/{{$room->id}}">

      @if ($room->photos || $room->photos > 0)
        <img class="card-img-top img-fluid"  height="100%" width="100%" src="{{asset($room->photos->first()['filename'])}}"
        alt="Image not found" onerror="this.onerror=null;this.src='http://goo.gl/5uVMCa';" />
      @endif

      <div class="card-body">
        <h4 class="card-title">{{$room->street}} {{$room->housenumber}}, {{$room->city->name}}<hr></h4>  </a>
        <h5>@lang('phrases.size'): {{$room->square_meter}} m<sup>2</sup></h5>
        <h5>{{$room->price}} € p/m</h5>
        <h5>@lang('phrases.owner'): {{$room->user->name}}</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">@lang('phrases.submitted'): {{$room->created_at->diffForHumans()}}</small><br />
        <small class="text-muted">@lang('phrases.available'): {{$room->date_available}}</small>
      </div>

  </div>
