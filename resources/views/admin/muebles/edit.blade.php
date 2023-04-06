@extends('admin.template')
@section('views_content')
<div class="container text-center">
	<h1>MUEBLES<small>[Agregar mueble]</small></h1>
		<div class="row">
			<div class="col-md-8">
				<div class="page">
					<form method="POST" action="{{route('adminmuebles.update', $Mueble->id)}}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="mueble">mueble</label>
							<input type="text" name="mueble" class="form-control" value="{{$Mueble->tipo_mueble}}" required>
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" name="descripcion" class="form-control" value="{{$Mueble->descripcion}}">
						</div>
						<div class="form-group">
							<label for="url">Foto</label>
							<input type="text " name="url" class="form-control" value="{{$Mueble->url}}" >
						</div>
						<div class="form-group">
							<button class="btn btn-info" type="submit">Guardar</button>
							<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
@stop