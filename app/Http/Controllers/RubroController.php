<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Http\Request;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubro = Rubro::all()->sortBy("nombre");
        return view('Rubro.index',['rubro'=>$rubro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rubro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubro = new Rubro();
        $rubro->nombre = $request->input('nombre');
        $rubro->descripcion = $request->input('descripcion');
        $rubro->vida_util = $request->input('vida_util');
        $rubro->coeficiente = $request->input('coeficiente');
        $rubro->depreciar = $request->input('depreciar');
        $rubro->actualiza = $request->input('actualiza');
        $rubro->save();
        return redirect()->route('rubros.index');
        //return dd($request->input('nombre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubro = Rubro::findOrFail($id);
        return view('Rubro.show',['rubro'=>$rubro]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $rubro = Rubro::findOrFail($id);
        $rubro->nombre = $request->input('nombre');
        $rubro->descripcion = $request->input('descripcion');
        $rubro->vida_util = $request->input('vida_util');
        $rubro->coeficiente = $request->input('coeficiente');
        $rubro->depreciar = $request->input('depreciar');
        $rubro->actualiza = $request->input('actualiza');
        $rubro->save();
        return redirect()->route('rubros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rubro = Rubro::findOrFail($id);
        $rubro->delete();
        return redirect()->route('rubros.index');
    }
}
