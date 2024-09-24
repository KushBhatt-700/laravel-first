<nav class="navbar navbar-expand-lg navbar-light" id="navBar" style="box-shadow: 0px 0px 17px black, 0 0 79px #455889, 0 0 0px darkblue; background-color: #285ad9d4;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
        </li>
      </ul>
    </div>
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle bg-dark text-white" style="box-shadow: 0px 0px 2px 0px black, 0 0 10px #455889" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
      <div class="dropdown-menu mt-1 w-10" style="min-width: 70px;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item w-10" href="{{ url('/translated-page') }}" data-lang="en">en</a>
          <a class="dropdown-item w-10" href="{{ url('/translated-page/hi') }}" data-lang="hi">hi</a>
          <a class="dropdown-item w-10" href="{{ url('/translated-page/gu') }}" data-lang="gu">gu</a>
          <a class="dropdown-item w-10" href="{{ url('/translated-page/es') }}" data-lang="es">es</a>
      </div>
    </div>
  </div>
</nav>