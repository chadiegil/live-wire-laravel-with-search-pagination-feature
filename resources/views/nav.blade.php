<nav class="navbar navbar-expand-lg text-white bg-dark mb-2">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Weather Update</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link text-white " href="/dashboard">Dashboard</a>
          <a class="nav-link text-white" href="/logs">Logs</a>

          <a class="nav-link text-white" href="{{'/logout'}}">Logout</a>
          @else
          <a class="nav-link text-white" href="/register">Register</a>
          <a class="nav-link text-white" href="/">Login</a>

          @endif

        </div>
      </div>
    </div>
  </nav>
