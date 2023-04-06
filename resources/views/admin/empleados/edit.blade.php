@extends('admin.template')
@section('views_content')
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="h4 mb-0">Agregar Empleado</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{route('adminempleados.update', $Empleado->id)}}" method="POST"> 
                      	@csrf
                        @method('PUT')
                        <div class="row">
                          <label class="col-sm-3 form-label">Nombre del empleado</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="nombre_empleado" value="{{ $Empleado->nombre_empleado}}" >
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Apellidos</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="apellidos" value="{{ $Empleado->apellidos}}">
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Telefono</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="telefono" pattern="[0-9]+" value="{{ $Empleado->telefono}}">
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Correo</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="email" name="correo" value="{{ $Empleado->correo}}">
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Dirección</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="direccion" value="{{ $Empleado->direccion}}">
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Fecha de nacimiento</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="date" name="fecha_nacimiento" value="{{ $Empleado->fecha_nacimiento}}">
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Edad</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="number" name="edad" value="{{ $Empleado->edad}}" >
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Sexo</label>
                          <div class="col-sm-9">
                            <select class="form-select mb-3" name="sexo" value="{{ $Empleado->sexo}}">
                              <option>Masculino</option>
                              <option>Femenino</option>
                            </select>
                          </div>
                        </div>

                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">Cargo</label>
                          <div class="col-sm-9">
                            <select class="form-select mb-3" name="cargo" value="{{ $Empleado->cargo}}">
                              <option>Capturista</option>
                              <option>Carpintero</option>
                            </select>
                          </div>
                        </div>


                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <div class="col-sm-9 ms-auto">
                            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
@stop