<h2> Plaats een nieuwe kamer</h2><br>
<form action="/newroom" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="street">Straat</label>
    <input type="text" class="form-control" name="street" id="street" placeholder="bijv. Straatweg" value="{{ old('street') }}">
  </div>
  <div class="form-group">
      <label for="number">Huisnummer</label>
    <input type="text" class="form-control" name="housenumber" id="street" placeholder="bijv. 11" value="{{ old('housenumber') }}">
  </div>

  <div class="form-group">
    <label for="city">Selecteer stad</label> <br>
  <input type="text" class="form-control" name="city_id">
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
  <button type="submit" class="btn btn-success">Plaats Kamer</button>
</form>
