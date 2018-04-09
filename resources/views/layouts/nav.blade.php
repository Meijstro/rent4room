<!--Navbar-->
<nav class="navbar navbar-light navbar-1 white">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div id="logo"><a href="/"><img src="/Room4Rent.png"></a></div>
<div>
  <ul id="menu-standard" class="languagepicker roundborders">

       <a href="/nl"><li><img src="http://i65.tinypic.com/2d0kyno.png"/>Nederlands</li></a>
       <a href="/en"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
  </ul>
</div>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">@lang('phrases.about')</a>
            </li>
            <li class="nav-item">
      @guest
                <a class="nav-link" href="{{ route('register') }}">@lang('phrases.register')</a>
      @else
                <a class="nav-link" href="/dashboard">Dashboard</a>
      @endguest
            </li>
      @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
      @else

            <li class="nav-item dropdown">
              <a class="nav-link" href="/message/0">@lang('phrases.messages')</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
              </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
              </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar -->
