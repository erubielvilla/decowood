@extends('usuario.template')
@section('views_content')

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
</head>
<body>
     <div class="main">
      <div class="shop_top">
        <div class="container">
            <div class="row">
                <h4>Mantenimiento de muebele</h4>
                <div class="col-md-7">
                  <div class="map">
                    <a href="reparacion">
                        <img src="{{asset('imagen/Mantenimiento.jpg')}}" height="420px" width="420px">
                    </a>
                  </div>
                </div>
                <div class="col-md-5">
                   <p>Tu mueble ya se encuentra en un mal estado, su color ya es muy desgastado, envianos tu correo para podernos comunicar con usted y darle una buena atención.
                    </p>
                    <input type="email" name="email" placeholder="ejemplo@gmai.com" required>
                    <button onclick="modificar" type="submit" class="btn btn-primary">enviar</button>
                    <div id="nuevo">
                      
                    </div>
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