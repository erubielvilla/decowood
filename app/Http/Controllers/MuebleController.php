<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mueble;
class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        //
        $Muebles=Mueble::all();
        return view('admin.muebles.index', compact('Muebles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.muebles.create');
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
        $muebles = new Mueble;
            $muebles->tipo_mueble=$request->mueble;
            $muebles->descripcion=$request->descripcion;
            $muebles->url=$request->url;
            $muebles->save();

        return redirect()->route('adminmuebles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mueble=Mueble::findOrFail($id);
        return view('admin.muebles.edit', compact('Mueble'));
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
        $muebles=Mueble::findOrFail($id);
        $muebles->tipo_mueble=$request->mueble;
            $muebles->descripcion=$request->descripcion;
            $muebles->url=$request->url;
            $muebles->save();

        return redirect()->route('adminmuebles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $mueble=Mueble::findOrFail($id);
       $mueble->delete();
       return redirect()->route('adminmuebles.index');
    }
}
