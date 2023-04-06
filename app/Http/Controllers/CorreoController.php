<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use App\Http\Requests\StoreCorreoRequest;
use App\Http\Requests\UpdateCorreoRequest;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        //
        $Correos =Correo::all();
        return view('admin.correos.index', compact('Correos'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCorreoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCorreoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Correo  $correo
     * @return \Illuminate\Http\Response
     */
    public function show(Correo $correo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Correo  $correo
     * @return \Illuminate\Http\Response
     */
    public function edit(Correo $correo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCorreoRequest  $request
     * @param  \App\Models\Correo  $correo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCorreoRequest $request, Correo $correo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Correo  $correo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Correo $correo)
    {
        //
    }
}
