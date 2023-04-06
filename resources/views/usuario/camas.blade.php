@extends('usuario.template')
@section('views_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos de camas</title>
</head>
<body>
<main>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('imagen/cama.jpg')}}" >
          <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="modelo_1">
                    <button type="button" class="btn btn-sm btn-outline-secondary"">Detalles</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        

</main>
  <div class="form-group">
   <a class="btn btn-danger" href="{{ URL::previous() }}">Regresar</a>
  </div>
</body>
</html>

@stop