<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    
 */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $Empleados=Empleado::all();
        return view('admin.empleados.empleados', compact('Empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $empleados = new Empleado;
            $empleados->nombre_empleado=$request->nombre_empleado;
            $empleados->apellidos=$request->apellidos;
            $empleados->telefono=$request->telefono;
            $empleados->correo=$request->correo;
            $empleados->direccion=$request->direccion;
            $empleados->fecha_nacimiento=$request->fecha_nacimiento;
            $empleados->edad=$request->edad;
            $empleados->sexo=$request->sexo;
            $empleados->cargo=$request->cargo;
            $empleados->save();

        return redirect()->route('adminempleados.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Empleado=Empleado::findOrFail($id);
        return view('admin.empleados.edit', compact('Empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleados=Empleado::findOrFail($id);
        $empleados->nombre_empleado=$request->nombre_empleado;
            $empleados->apellidos=$request->apellidos;
            $empleados->telefono=$request->telefono;
            $empleados->correo=$request->correo;
            $empleados->direccion=$request->direccion;
            $empleados->fecha_nacimiento=$request->fecha_nacimiento;
            $empleados->edad=$request->edad;
            $empleados->sexo=$request->sexo;
            $empleados->cargo=$request->cargo;
            $empleados->save();

        return redirect()->route('adminempleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('adminempleados.index');
    }
}
