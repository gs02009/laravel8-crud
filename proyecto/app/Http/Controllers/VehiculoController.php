<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Placa;



class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     //   return view('vehiculo.index');

     $placas = Placa::all();
        $vehiculos = Vehiculo::all();
    
        return view('vehiculo.index',compact('placas','vehiculos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placas = Placa::all();
        return view('vehiculo.create')->with('placas',$placas);

        //return view('vehiculo.create');

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

        $vehiculo = new Vehiculo();
        $vehiculo->IDPLACAS = $request->get('idplacas');
        $vehiculo->PROPIETARIO = $request->get('propietario');
        $vehiculo->NUMPLACA = $request->get('numplaca');
        $vehiculo->MARCA = $request->get('marca');
        
        $vehiculo->save();

        return redirect('/vehiculos');




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
        $vehiculo = Vehiculo::find($id);
        $placas = Placa::all();

        return view('vehiculo.show',compact('placas','vehiculo'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $placas = Placa::all();

        return view('vehiculo.edit',compact('placas','vehiculo'));

        //return view('vehiculo.edit')->with('vehiculo',$vehiculo);     

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
        $vehiculo = Vehiculo::findOrFail($id);

        $vehiculo->IDPLACAS = $request->input('idplacas');
        $vehiculo->PROPIETARIO = $request->input('propietario');
        $vehiculo->NUMPLACA = $request->input('numplaca');
        $vehiculo->MARCA = $request->input('marca');
        
        $vehiculo->save();

        return redirect('/vehiculos');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('/vehiculos');
        
    }
}
