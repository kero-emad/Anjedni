<nav class="navbar navbar-expand-sm navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img class="logo" src="{{ asset('uploads/images/logo1.png') }}" alt="" width="100" height="60">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home Page</a>
        </li>
        @if (Auth::user()->isadmin == 'no')
          @if (Auth::user()->role=='customer')
             <li class="nav-item">
               <a class="nav-link" href="{{ route('requests.create') }}">Requests</a>
             </li>
          @endif
          @if (Auth::user()->role=='serviceProvider')
             <li class="nav-item">
               <a class="nav-link" href="{{ route('requests.store') }}">Requests</a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="/times/create">Times</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/portfolio">Portfolio</a>
            </li>
          @endif
          @endif
        @if (Auth::user()->isadmin == 'yes')
          <li class="nav-item">
            <a class="nav-link" href="/users">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allrequests">Service Requests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/offers">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allappointments">Appointments</a>
          </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>