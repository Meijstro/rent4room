<h3> @lang('phrases.newRoom')</h3><br>

<form action="/newroom" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="street">@lang('phrases.street')</label>
    <input type="text" class="form-control" name="street" id="street" placeholder="@lang('phrases.example') Straatweg" value="{{ old('street') }}">
  </div>

  <div class="form-group">
    <label for="number">@lang('phrases.housenumber')</label>
    <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="@lang('phrases.example') 11" value="{{ old('housenumber') }}">
  </div>

  <div class="form-group">
    <label for="dateavailable">@lang('phrases.available')</label>
    <input type="text" class="form-control" name="date_available" id="datepicker" value="{{ old('date_available') }}">
  </div>

  <input name=city_id type="hidden" value="1">

  <div class="form-group">
    <label for="postcode">Postcode</label>
    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="@lang('phrases.example') 1234 AB" value="{{ old('postcode') }}">
  </div>

  <div class="form-group">
    <label class="form-check-label" for="meters">@lang('phrases.squareMeter')</label><br>
    <input type="text" class="form-control" name="square_meter" id="square_meter" placeholder="@lang('phrases.example') 16" value="{{ old('square_meter') }}">
 </div>

 <div class="form-group">
   <label class="form-check-label" for="price">@lang('phrases.monthPrice')</label><br>
   <input type="text" class="form-control" name="price" id="price" placeholder="@lang('phrases.example') 300" value="{{ old('price') }}">
 </div>

 <div class="form-group">
   <label class="form-check-label" for="description">@lang('phrases.optional'):@lang('phrases.description')/extra info</label><br>
   <textarea id="description" class="form-control" rows="5" name="description" type="text">{{ old('description') }}</textarea>
  </div>

 <div class="form-group">
   @lang('phrases.images'):<br>
   <input type="file" id="image" name="images[]" multiple ><br>
 </div>
  <button type="submit" class="btn btn-success">@lang('phrases.submit')</button>
</form>
