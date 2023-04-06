<?php

namespace App\Http\Controllers\Cap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        $Pedidos=Pedido::all();
        return view('capturista.pedidos.index', compact('Pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capturista.pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido;
        $pedido->nombre_cliente=$request->nombre_cliente;
        $pedido->apellidos=$request->apellidos;
        $pedido->correo=$request->correo;
        $pedido->mueble=$request->mueble;
        $pedido->direccion=$request->direccion;
        $pedido->telefono=$request->telefono;
        $pedido->save();

        return redirect()->route('cappedidos.index');
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
        return view('capturista.pedidos.edit', compact('Pedido'));
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

        return redirect()->route('cappedidos.index');
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
       return redirect()->route('cappedidos.index');
    }
}
