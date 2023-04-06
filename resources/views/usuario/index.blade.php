@extends('usuario.template')
@section('views_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecoWOOD</title>
</head>
<body>
    <section id="baner">
		<img src="{{ asset('imagen/index.jpg') }}">
	</section>
  <div id="container">
  <div id="box"> bienvenido </div>
</div>
    <div>
        <h2>DecoWOOD</h2>
        <p class="lead">
            Es una carpintería 100% confiable, brindamos varios serivicios para mejorar la experiencia suya.
            Navege entre las diferentes vistas y conoce más, si te un diseño especifico tiene la opción de 
            guardarlo en su perfil, para poder llevar acabo su modelo de su a grado.
            Puede dejar su comentario para decirnos que tal fue su experiencia al usar este sitio web  y decir
            como fue la atención que se le brindo.
        </p>
    </div>

    <div style="align-content: center;" id="opciones" >
      <img src="{{asset('imagen/Contactanos.jpg')}}" height="200px" width="20px">
      <img src="{{asset('imagen/Servicios.jpg')}}" height="200px" width="20px">
      <img src="{{asset('imagen/Mesas.jpg')}}" height="200px" width="20px">
    </div>

    <section id="contacto">
        <div>
            <img src="{{ asset('imagen/index1.jpg') }}">
                <div class="contenedor">
                    <h1>
                        Necesitas personalizar tu hogar o espacio de trabajo
                    </h1>
                    <p class="lead">
                        Nosotros te ayudamos con eso, todos los muebls son de calidad y duraderos,
                        tu eliges el diseño y nosotros lo realizamos. Ponte en contacto con nosotros.
                        Envia tu correo para poder atenderte.s
                    </p>
                </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Remodela tu comedor</h2>
        <p class="lead">Remodela tu comedor para que se vea más bonito y te sientas 
        cómodo a la hora de la comida estando con la familia. Hay demasiados
        modelos para que elijas el que mas te guste o el que se vea mejor en 
        tu comedor.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('imagen/comedor.jpg')}}" height="500px" width="500px">
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Remodela tu cuarto</h2>
        <p class="lead">Ten tu cuarto como siempre lo has querido, con un
        espacio para guardar toda tu ropa y calzado que tengas
        o puedas añadir un espacio para hacer todas tus tareas.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('imagen/Cuarto.jpg')}}" height="500px" width="500px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Remodela tu cocina.</h2>
        <p class="lead">Eres fan de la cocina y te la pasas todo el tiempo cocinando?,
        remodela tu espacio de trabajo para que te sientas mas cómodo 
        a la hora de preparar la comida o un postre.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('imagen/Cocina.jpg')}}"  height="500px" width="500px">
      </div>
    </div>

    <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Remodela tu oficnia</h2>
    <p class="lead">Tu espacio de trabajo ya no te resulta cómodo, ya es hora de 
    renovar tu oficina para que tengas un mejor desempeño y 
    puedas hacer todos los trabajos que tu jefe te mande a hacer.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="{{asset('imagen/Oficina.jpg')}}" height="500px" width="500px">
  </div>
</div>


</body>
</html>
@stop