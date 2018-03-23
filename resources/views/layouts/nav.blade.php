<!--Navbar-->
<nav class="navbar navbar-light navbar-1 white">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <span><img src="Room4Rent.png"></span>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">Over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Inschrijven</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Storing melden</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li> -->
        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->

</nav>
