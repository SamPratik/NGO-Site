<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">
    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
    WNA Foundation
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse links" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="{{ route('home') }}" class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">About US</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('achievemetns.index') }}" class="nav-link">Achievements</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Our Work</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('news.index') }}" class="nav-link">News</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Notice</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Contact</a>
      </li>
      @auth
      <li class="nav-item">
        <a href="{{ route('admin.logout') }}" class="nav-link">Logout</a>
      </li>
      @endauth
    </ul>
  </div>
</nav>
