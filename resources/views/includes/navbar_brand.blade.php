
<div class="container-fluid px-0">
  <nav class="navbar navbar-expand-sm navbar-dark bg-black py-0 px-0"> <a class="navbar-brand" href="#"><img id="logo" src="https://i.imgur.com/K7Nwq4V.jpg"> &nbsp;&nbsp;&nbsp;Acme Inc</a> <span class="v-line"></span> <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item active"> <a class="nav-link" href="#">Programs</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Users</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Coaching</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Analytics</a> </li>
          </ul>
          <ul class="navbar-nav d-flex flex-row-reverse">
            @guest
              <li class="pr-3">
                <a href="{{ url('/register') }}" class="btn btn-outline-danger">Sign up</a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/login') }}" class="text-white">Sign in</a>
              </li>
            @endguest

            @auth()
              <li class="nav-item">
                <div class="dropdown">
                  <span class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Session::get('user_info'))
                      {{ Session::get('user_info')['name'] }}
                    @else
                    @endif
                  </span>
                  <div class="dropdown-menu pull-left-dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    <a class="dropdown-item" href="{{ url('/profile') }}">Your Profile</a>
                  </div>
                </div>
              </li>
            @endauth
          </ul>
      </div>
  </nav>
</div>