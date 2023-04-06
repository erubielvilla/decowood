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
                <h4>Contactanos</h4>
				<div class="col-md-7">
				  <div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.0135927457636!2d-97.09205224877945!3d20.46463488623937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dbb353a157b003%3A0x2df3c8f1ce29be2d!2sUniversidad%20Tecnologica%20De%20Gutierrez%20Zamora.!5e0!3m2!1ses-419!2smx!4v1597109642329!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				  </div>
				</div>
				<div class="col-md-5">
                        <p>Mandanos tu correo electronico para poder contactarte y asesorarte pora la adquisision de un mueble</p>
                        <input type="text" class="text" placeholder="ejemplo.gamil.com">
                        <button class="btn btn-primary">Enviar</button>
				</div>
			</div>
			
	     </div>
	   </div>
	  </div>
	 
</body>	
</html>
@stop