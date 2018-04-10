@extends ('layouts.app')

@section ('content')

<div class="container">
  @include('layouts.alerts')
  <h2> @lang('phrases.editRoom') </h2><br>

  <form action="/update/{{$id}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-group">
      <label for="street">@lang('phrases.street')</label>
      <input type="text" class="form-control" name="street" id="street" placeholder="bijv. Straatweg" value="{{ $room->street }}">
    </div>

    <div class="form-group">
      <label for="number">@lang('phrases.housenumber')</label>
      <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="bijv. 11" value="{{ $room->housenumber }}">
    </div>

    <div class="form-group">
      <label for="dateavailable">@lang('phrases.available')</label>
      <input type="text" class="form-control" name="date_available" id="datepicker" value="{{ $room->date_available }}">
    </div>

    <div class="form-group">
      <label for="postcode">Postcode</label>
      <input type="text" class="form-control" name="postcode" id="postcode" placeholder="bijv. 1234 AB" value="{{ $room->postcode }}">
    </div>

    <div class="form-group">
      <label class="form-check-label" for="meters">@lang('phrases.squareMeter')</label><br>
      <input type="text" class="form-control" name="square_meter" id="square_meter" placeholder="bijv. 16" value="{{ $room->square_meter }}">
   </div>

   <div class="form-group">
     <label class="form-check-label" for="price">@lang('phrases.monthPrice')</label><br>
     <input type="text" class="form-control" name="price" id="price" placeholder="bijv. 300" value="{{ $room->price }}">
   </div>

   <div class="form-group">
     <label class="form-check-label" for="description">@lang('phrases.optional'):@lang('phrases.description')/extra info</label><br>
     <textarea id="description" class="form-control" rows="10" name="description" type="text">{{$room->description}}</textarea>
    </div>

   <div class="form-group">
     Nieuwe foto's toevoegen:<br>
     <input type="file" id="image" name="images[]" multiple ><br>
   </div>
    <button type="submit" class="btn btn-success">@lang('phrases.editSubmit')</button>
  </form>
  <hr>
  <div class="container-fluid">
<form method="post" action="{{action('RoomController@destroy', $room->id)}}" style="float:right">
  {{csrf_field()}}

  <input name="_method" type="hidden" value="DELETE">

  <span><strong><em>Let op</strong></em>: kamer zal permanent worden verwijderd.</span>
  <button class='btn btn-danger' type="submit" >Delete</button>
</form>
</div>
</div>
<br><br>
@endsection
