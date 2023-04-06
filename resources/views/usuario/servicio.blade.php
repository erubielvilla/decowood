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
                <h4>Servicios que te brindamos</h4>
                <div class="col-md-7">
                  <div class="map">
                    <a href="reparacion">
                        <img src="{{asset('imagen/Servicios.jpg')}}">
                    </a>
                  </div>
                </div>
                <div class="col-md-5">
                    <a href="mantenimiento">
                        <img src="{{asset('imagen/Mantenimiento.jpg')}}" height="420px" width="420px">
                    </a>
                </div>
            </div>
            
         </div>
       </div>
      </div>
     
</body> 
</html>
@stop