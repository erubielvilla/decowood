<head>
    <meta charset="UTF-8">
    <title>DecoWOOD</title>
    <link rel="stylesheet" href=" ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        <img src="{{asset('imagen/Logo_carpinteria.png')}}" high='70px' width='70px' >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/catalogo">Catalogo</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/servicios">Servicios</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactanos">Contactanos</a>
        </li>

        <li class="nav-item">
            <button class="button">Descargar catalogo</button>
        </li>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        @if(auth()->check())

        <li class="nav-item">
          <a class="nav-link" href="/perfil">{{auth()->user()->name}}</a>
        </li>
        @else

        <li class="mx-6">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md" href="/login">Iniciar sesión</a>
        </li>
        <li class="mx-6">
          <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md"  href="/register">Registrarse</a>
        </li>

        @endif
      </ul>
    </div>
  </div>
</nav>