<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'home' ? 'active' : null}}" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'about' ? 'active' : null}}" href="{{url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'user' ? 'active' : null}}" href="{{url('/user')}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ session('activeNav') === 'student' ? 'active' : null}}" href="{{url('/students')}}">Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>