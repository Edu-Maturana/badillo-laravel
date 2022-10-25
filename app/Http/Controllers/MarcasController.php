<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cuando se invoque, entregue el listado de marcas
        return Marca::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //al insertar una nueva marca
        $marca = new Marca();
        //al atributo nombre de la tabla se el asigna lo q viene en el atributo nombre del request
        $marca->nombre =$request->nombre;
        $marca->save();
        return $marca;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //mostrar los datos de una marca 
        return $marca;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        //actualizar es similar al store, pero sin crear el objeto
        //al atributo nombre de la tabla se el asigna lo q viene en el atributo nombre del request
        $marca->nombre =$request->nombre;
        $marca->save();
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //eliminar una marca
        $marca->delete();
    }
}
