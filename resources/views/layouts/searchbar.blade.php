<div class="panel panel-primary" align="center">
  <div>@lang('phrases.rooms') <small>({{ $rooms->count() }})</small></div>
      <form class="form-wrapper cf" action="{{ url('search') }}" method="get">
        <input name="q" type="text" placeholder="@lang('phrases.searchPlaceholder')" value="{{ request('q') }}">
        <button type="submit">@lang('phrases.search')</button>
      </form>
  </div>
