<h3> Plaats een nieuwe kamer</h3><br>

<form action="/newroom" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="street">Straat</label>
    <input type="text" class="form-control" name="street" id="street" placeholder="bijv. Straatweg" value="{{ old('street') }}">
  </div>

  <div class="form-group">
    <label for="number">Huisnummer</label>
    <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="bijv. 11" value="{{ old('housenumber') }}">
  </div>

  <div class="form-group">
    <label for="dateavailable">Beschikbaar vanaf</label>
    <input type="text" class="form-control" name="date_available" id="datepicker" value="{{ old('date_available') }}">
  </div>

  <div class="form-group">
    <label for="city">Selecteer stad</label> <br>
    <select name="city_id">
      @foreach ($cities as $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="postcode">Postcode</label>
    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="bijv. 1234 AB" value="{{ old('postcode') }}">
  </div>

  <div class="form-group">
    <label class="form-check-label" for="meters">Oppervlakte</label><br>
    <input type="text" class="form-control" name="square_meter" id="square_meter" placeholder="bijv. 16" value="{{ old('square_meter') }}">
 </div>

 <div class="form-group">
   <label class="form-check-label" for="price">Huurprijs per maand (in Euro)</label><br>
   <input type="text" class="form-control" name="price" id="price" placeholder="bijv. 300" value="{{ old('price') }}">
 </div>

 <div class="form-group">
   Selecteer foto's:<br>
   <input type="file" id="image" name="images[]" multiple ><br>
 </div>
  <button type="submit" class="btn btn-success">Plaats Kamer</button>
</form>
