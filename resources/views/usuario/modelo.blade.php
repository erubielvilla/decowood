@extends('usuario.template')
@section('views_content')

<!DOCTYPE HTML>
<html>
<head>
<title>Contactanos</title>
<link href="css1/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<script src="js1/jquery.min.js"></script>

 </head>
<body>
     <div class="main">
      <div class="shop_top">
        <div class="container">
            <div class="row">
                <h4>Cama</h4>
                <div class="col-md-7">
                  <div class="">
                        <img id="madera" src="{{asset('imagen/Cama.jpg')}}" height="250px" width="250px">
                        <img src="{{asset('imagen/Guardar.jpg')}}" height="50px" width="50px">
                        <span ondblclick="alert('El tamaño del mueble puede variar conforme a su necesidad')"><img src="{{asset('imagen/Interrogacion.png')}}" height="25px" width="25px"></span>
                  </div>
                </div>
                <div class="col-md-5">
                    <p>
                        Disfruta de esa comoda cama individual, hay demasiados colores que puedes adquirir con este modelo.
                    </p>

                    <p>Tipo de madera</p>
                    <button onclick="tipo(1)">
                      <img src="{{asset('imagen/Pino.jpg')}}" height="30px" width="30px">
                    </button>
                    <button onclick="tipo(0)">
                      <img src="{{asset('imagen/Cedro.jpg')}}" height="30px" width="30px">
                    </button>

                    
                    <p>Colores</p>
                    <button onclick="color(0)">
                      <img id="color" src="{{asset('imagen/Nogal.jpg')}}" height="30px" width="30px">
                    </button>
                    <button onclick="color(1)">
                    <img id="color" src="{{asset('imagen/Caoba.jpg')}}" height="30px" width="30px">
                    </button>
                    <button onclick="color(2)">
                    <img id="color" src="{{asset('imagen/Cedrocolor.jpg')}}" height="30px" width="30px">
                    </button>
                    <button onclick="color(3)">
                      <img id="color" src="{{asset('imagen/Blanco.jpg')}}" height="30px" width="30px">
                    </button> 
                    <button onclick="color(4)">
                    <img id="color" src="{{asset('imagen/Cedro.jpg')}}" height="30px" width="30px">
                    </button>

                </div>
                <div class="form-group"></br>
                            <a class="btn btn-danger" href="{{ URL::previous() }}">Regresar</a>
                </div>
            </div>
         </div>
       </div>
      </div>
     
</body> 
</html>
@stop