<div class="panel panel-primary" align="center">
  <div>@lang('phrases.rooms') <small>({{ $rooms->count() }})</small></div>
      <form class="form-wrapper cf" action="{{ url('search') }}" method="get">
        <input name="q" type="text" placeholder="Search here..." value="{{ request('q') }}">

        <button type="submit">Search</button>
        <!-- <select>
          <option value="{{ request('0') }}">Oppervlakte:</option>
          <option "{{ request('1') }}"> <6m2</option>
        </select>
        <select>
          <option value="0">Prijs:</option>
          <option value="1"> <100€</option>
        </select> -->

      </form>
  </div>
