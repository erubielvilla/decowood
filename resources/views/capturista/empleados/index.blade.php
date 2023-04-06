@extends('capturista.template')
@section('views_content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header z-index-50">
        


      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <div >
            <div class="ms-3 title">
               <!-- autenticacion    -->
                <li class="nav-item">
                  <a class="nav-link" href="/perfil">{{auth()->user()->name}}</a>
                </li>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled py-4">
            <li class="sidebar-item "><a class="sidebar-link" href="/captablero"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"> </use>
                </svg> Inicio </a></li>
            <li class="sidebar-item active"><a class="sidebar-link" href="/capempleados"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#user-1"></use>
                </svg> Empleados </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="/cappedidos"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#survey-1"> </use>
                </svg> Pedidos </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="/capmuebles"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"></use>
                </svg> Muebles </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="/capcorreos"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#envelope-1"> </use>
                </svg> Correos </a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="/capclientes"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                 <use xlink:href="#man-1"></use>
                </svg> Clientes </a>
            <li class="sidebar-item "><a class="sidebar-link" href="{{url('user/password')}}"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#security-1"></use>
                </svg>Contraseña </a></li>
            </li>
          </ul>
        </nav>
        <div class="content-inner w-100">
          <!-- Page Header-->
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">TABLERO</h2>
            </div>
          </header>
          <section class="pb-0">
            <div class="container-fluid">
              <div class="container text-center">
		<div class="page-header">
        <h1>Empleados <a href="{{ route('capempleados.create') }}" class="btn btn-succes">Agregar</a></h1>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
		</div>
		<div class="page">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
          
              <th>Nombre del empleado</th>
              <th>Apellidos</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Dirección</th>
              <th>Fecha de nacimiento</th>
              <th>Edad</th>
              <th>Sexo</th>
              <th>Cargo</th>
              <th>Editar</th>
              <th>Eliminar</th>

            </tr>
          </thead>
          <tbody>
            @foreach($Empleados as $Empleado)
            <tr>
              <td>
                {{ $Empleado->nombre_empleado }}
              </td>
              <td>
                {{ $Empleado->apellidos }}
              </td>
              <td>
                {{ $Empleado->telefono }}
              </td>
              <td>
                {{ $Empleado->correo }}
              </td>
              <td>
                {{ $Empleado->direccion }}
              </td>   
              <td>
                {{ $Empleado->fecha_nacimiento }}
              </td> 
              <td>
                {{ $Empleado->edad }}
              </td>        
              <td>
                {{ $Empleado->sexo }}
              </td> 
              <td>
                {{ $Empleado->cargo }}
              </td>               
              <td>
               <a href="{{route('capempleados.edit', $Empleado->id)}}" class="btn btn-warning"><i class=" fa fa-pencil-square"></i></a>
              </td>
              <td>
                <form action="{{ route('capempleados.destroy', $Empleado->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('¿Desea eliminar?')" class="btn btn-danger" value="Eliminar"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
	</div>
            </div>
          </section>
          
          <!-- Page Footer-->
          <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid">
              <div class="row gy-2">
                <div class="col-sm-6 text-sm-start">
                  <p class="mb-0">Your company &copy; 2017-2021</p>
                </div>
                <div class="col-sm-6 text-sm-end">
                  <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template" class="text-white text-decoration-none">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
@stop