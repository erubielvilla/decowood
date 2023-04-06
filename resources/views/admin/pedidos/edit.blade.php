@extends('admin.template')
@section('views_content')
<div class="container text-center">
	<h1>PEDIDOS<small>[Agregar pedido]</small></h1>
		<div class="row">
			<div class="col-md-8">
				<div class="page">
					<form method="POST" action="{{route('adminpedidos.update', $Pedido->id)}}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="nombre_cliente">Nombre del cliente</label>
							<input type="text" name="nombre_cliente" class="form-control" value="{{ $Pedido->nombre_cliente}}" required>
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" name="apellidos" class="form-control" value="{{ $Pedido->apellidos}}" required>
						</div>
						<div class="form-group">
							<label for="correo">correo</label>
							<input type="email" name="correo" class="form-control" value="{{ $Pedido->correo}}" required>
						</div>
						<div class="form-group">
							<label for="mueble">Mueble</label>
							<input type="text" name="mueble" class="form-control" value="{{ $Pedido->mueble}}"required>
						</div>
                        <div class="form-group">
							<label for="direccion">Dirección</label>
							<input type="text" name="direccion" class="form-control" value="{{ $Pedido->direccion}}" required>
						</div>
						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="numeber" name="telefono" class="form-control" value="{{ $Pedido->telefono}}"required>
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