<div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Moodle</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">{{ __('Kezdőlap') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @guest
                    <li class="nav-item active">
                        <a class="btn btn-dark nav-link mr-1" href="{{ route('login') }}">{{ __('Bejelentkezés')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Regisztráció') }}</a>
                    </li>    
                @endguest
                @auth
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                  </form> 
                @endauth
                 
            </ul>
          </form>
        </div>
      </nav>
</div>