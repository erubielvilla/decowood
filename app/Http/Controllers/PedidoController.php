<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     

    public function _construct(){
        $this->middleware('can:adminpedidos.index')->only('index');
    }
   */

    public function index()
    {
        //
        $Pedidos=Pedido::all();
        return view('admin.pedidos.index', compact('Pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pedidos.create');
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
        $pedido = new Pedido;
        $pedido->nombre_cliente=$request->nombre_cliente;
        $pedido->apellidos=$request->apellidos;
        $pedido->correo=$request->correo;
        $pedido->mueble=$request->mueble;
        $pedido->direccion=$request->direccion;
        $pedido->telefono=$request->telefono;
        $pedido->save();

        /**
        return view('admin.pedidos.index');
        */

        return redirect()->route('adminpedidos.index');

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
        $Pedido=Pedido::findOrFail($id);
        return view('admin.pedidos.edit', compact('Pedido'));
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
        $pedido=Pedido::findOrFail($id);
        $pedido->nombre_cliente=$request->nombre_cliente;
        $pedido->apellidos=$request->apellidos;
        $pedido->correo=$request->correo;
        $pedido->mueble=$request->mueble;
        $pedido->direccion=$request->direccion;
        $pedido->telefono=$request->telefono;
        $pedido->save();

        return redirect()->route('adminpedidos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pedido=Pedido::findOrFail($id);
       $pedido->delete();
       return redirect()->route('adminpedidos.index');
    }
}
