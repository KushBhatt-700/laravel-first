<nav class="navbar navbar-expand-lg navbar-dark" id="navBar" style="box-shadow: 0px 0px 17px black, 0 0 79px #455889, 0 0 0px darkblue; background-color: #c40b12;">
  <div class="container-fluid">
    <a class="navbar-brand text-lite" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enquire-Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">User-Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
        </li>
        <li class="nav-item dropdown end-0 mx-3 position-absolute" style="background-color: #000000"`>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            en
          </a>
          <ul id="dropdown-menu" class="dropdown-menu" style="min-width: 0rem; box-shadow: 0px 0px 2px 0px black, 0 0 10px #455889;" aria-labelledby="navbarDropdownMenuLink">
            <li><a id="dropdown-item" class="dropdown-item" data-lang="en " href="{{ url('/translated-page') }}">en</a></li>
            <li><a id="dropdown-item" class="dropdown-item" data-lang="hi " href="{{ url('/translated-page/hi') }}">hi</a></li>
            <li><a id="dropdown-item" class="dropdown-item" data-lang="gu " href="{{ url('/translated-page/gu') }}">gu</a></li>
            <li><a id="dropdown-item" class="dropdown-item" data-lang="es " href="{{ url('/translated-page/es') }}">es</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>