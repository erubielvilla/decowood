@extends('admin.template')
@section('views_content')
<div class="container text-center">
	<h1>PEDIDOS<small>[Agregar pedido]</small></h1>
		<div class="row">
			<div class="col-md-8">
				<div class="page">
					<form method="POST" action="{{route('adminpedidos.store')}}">
						@csrf
						<div class="form-group">
							<label for="nombre_cliente">Nombre del cliente</label>
							<input type="text" name="nombre_cliente" class="form-control" placeholder="Jocab" required>
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" name="apellidos" class="form-control" placeholder="" required>
						</div>
						<div class="form-group">
							<label for="correo">correo</label>
							<input type="email" name="correo" class="form-control" placeholder="ejemplo@gmail.com" required>
						</div>
						<div class="form-group">
							<label for="mueble">Mueble</label>
							<input type="text" name="mueble" class="form-control" placeholder="Cama" required>
						</div>
                        <div class="form-group">
							<label for="direccion">Dirección</label>
							<input type="text" name="direccion" class="form-control" placeholder="calle morelos" required>
						</div>
						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="numeber" name="telefono" class="form-control" placeholder="" required>
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