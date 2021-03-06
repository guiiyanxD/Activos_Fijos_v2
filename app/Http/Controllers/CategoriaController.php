<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Rubro;
use App\Traits\HasBitacora;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    use HasBitacora;
    public function __construct()
    {
        $this->middleware(['can:categorias.index'])->only('index');
        $this->middleware(['can:categorias.create'])->only('create');
        $this->middleware(['can:categorias.edit'])->only('edit');
        $this->middleware(['can:categorias.destroy'])->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::paginate(10);
        return  view('Categoria.index',['categoria'=>$categoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubro = Rubro::all();
        return view('Categoria.create',['rubro'=>$rubro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cat = new Categoria();
        $cat->nombre = $request->input('nombre');
        $cat->descripcion = $request->input('descripcion');
        $cat->rubro_id = $request->input('rubro_id');
        $cat->depreciar = $request->input('depreciar');
        $cat->actualiza = $request->input('actualiza');
        $cat->save();


        $modelo = class_basename($cat);
        HasBitacora::Created($modelo,$cat->id_categoria);

        return redirect()->route('categorias.index')->with('success','Categoria registrada correctamente');

        //return dd($request)->with('success','Categoria registrada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Categoria::findOrFail($id);
        return view('Categoria.show',['cat'=>$cat]);
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
        $cat = Categoria::findOrFail($id);
        $cat->nombre = $request->input('nombre');
        $cat->descripcion = $request->input('descripcion');
        $cat->rubro_id = $request->input('rubro_id');
        $cat->depreciar = $request->input('depreciar');
        $cat->actualiza = $request->input('actualiza');
        $cat->save();


        $modelo = class_basename($cat);
        HasBitacora::Edited($modelo,$cat->id_categoria);

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::findOrFail($id);

        $modelo = class_basename($cat);
        HasBitacora::Edited($modelo,$cat->id_almacen);
        $cat->delete();
        return redirect()->route('categorias.index');
    }
}
