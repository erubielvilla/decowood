<head>
    <meta charset="UTF-8">
    <title>DecoWOOD</title>
    <link rel="stylesheet" href=" ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
          <!-- Search Box-->
          <div class="search-box shadow-sm">
            <button class="dismiss d-flex align-items-center">
              <svg class="svg-icon svg-icon-heavy">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
            <form id="searchForm" action="#" role="search">
              <input class="form-control shadow-0" type="text" placeholder="Qué estás buscando...">
            </form>
          </div>

          <div class="container-fluid w-100">
            <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="#">
                  <div class="brand-text d-none d-lg-inline-block"><span>Tablero </span><strong>CARPINTERO</strong></div>
                  
                
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#find-1"> </use>
                    </svg></a></li>
                <!-- autenticacion    -->
                <li class="nav-item">
                  <a class="nav-link" href="/carperfil">{{auth()->user()->name}}</a>
                </li>
                <!-- Logout    -->
                    <form method="POST" action="{{ route('logout') }}">
                     @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   this.closest('form').submit();">
                   <p class="nav-link text-white">Cerrar sesión</p>
                   </x-jet-dropdown-link>
            </form>
              </ul>
            </div>
          </div>
        </nav>