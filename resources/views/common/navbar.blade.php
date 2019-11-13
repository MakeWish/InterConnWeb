<header id="header">
  <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="
    background-color: #0e7d04!important; height: inherit;">
    <div class="container">
      <a class="navbar-brand text-white" href="{{ url('/') }}">
        {{ config('app.name', 'Interconn') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

          <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          <!-- <a href="#">Inbox <span class="badge">42</span></a> -->
          <li class="nav-item">
            <a class="nav-link text-white" href="">{{ __('Home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">{{ __('About') }}</a>
          </li>
          @guest
            <li class="nav-item">
              <a class="nav-link text-white" href="">{{ __('Services') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item">
              <a class="nav-link text-white" href="">{{ __('Orders') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="">{{ __('Stock') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="">{{ __('Notifications') }}
                <span class="badge badge-notify" style="background-color: red;">3</span>
              </a>
            </li>

            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right bg-green" aria-labelledby="navbarDropdown" style="background-color: green;">
                <a class="dropdown-item text-white" href="">{{ __('profile') }}</a>
                <a class="dropdown-item text-white" href="{{ route('logout') }}"
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
      </div>
    </div>
  </nav>
</header>