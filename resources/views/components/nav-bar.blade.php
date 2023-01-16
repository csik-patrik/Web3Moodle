<div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="{{route('/')}}"><img height="30" src="{{ url('..\images\school-svgrepo-com.svg') }}" alt="Logo"></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('/')}}">{{ __('Kezdőlap') }}<span class="sr-only">(current)</span></a>
            </li>
            @can('is_student')
              <li class="nav-item">
                <a class="nav-link" href="{{route('student.course-members.index')}}">{{ __('Kurzusaim') }}</a>
              </li>
            @endcan
            @can('is_admin')
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">{{ __('Karbantartás') }}</a>
              </li>
            @endcan
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @guest
                    <li class="nav-item active">
                        <a class="btn btn-dark nav-link mr-1" href="{{ route('login') }}">{{ __('Bejelentkezés')}}</a>
                    </li>  
                @endguest
                @auth
                <li class="nav-item d-flex justify-content-end">
                  <img class="w-50" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&rounded=true&background=eda828&color=ffffff">
                <li>
                <li class="nav-item">
                  <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                <li>
                <li class="nav-item">
                  <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="btn btn-dark">{{ __('Kijelentkezés') }}</button>
                  </form>
                </li>
                @endauth
                 
            </ul>
          </form>
        </div>
      </nav>
</div>