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
                <h4>Reparacion de muebele</h4>
                <div class="col-md-7">
                  <div class="map">
                    <a href="reparacion">
                        <img src="{{asset('imagen/Servicios.jpg')}}">
                    </a>
                  </div>
                </div>
                <div class="col-md-5">
                    <p>
                        Tu mueble se daño, tu mesa se tambale o tu
                        silla se quebro y te sale mas caro comprar
                        una, ponte en contacto con nosotros. 
                        Vamos hasta a tu puerta de tu casa por el
                        mueble o en ese mismo momento se hace la 
                        reparacion. Envianos un mensaje para poder 
                        atenderlo.
                    </p>
                    <input type="email" name="email" placeholder="ejemplo@gmai.com" required>
                    <button type="submit" class="btn btn-primary">enviar</button>
                </div>
                <div class="form-group">
                            <a class="btn btn-danger" href="{{ URL::previous() }}">Regresar</a>
                </div>
            </div>
            
         </div>
       </div>
      </div>
     
</body> 
</html>
@stop