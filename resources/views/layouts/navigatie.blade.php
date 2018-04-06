<div class="nav">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">@lang('phrases.about')</a></li>
    @guest
    <li><a href="{{ route('register') }}">@lang('phrases.register')</a></li>
    @else
    <li><a href="/dashboard">Dashboard</a></li>
    @endguest
    <li><a href="/en">English</a></li>
    <li><a href="/nl">Nederlands</a></li>
  </ul>
</div>
