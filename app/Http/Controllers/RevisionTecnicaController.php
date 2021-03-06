<?php

namespace App\Http\Controllers;

use App\Models\Activo_Fijo;
use App\Models\Estado;
use App\Models\Mantenimiento;
use App\Models\Revision_Tecnica;
use App\Traits\HasBitacora;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

class RevisionTecnicaController extends Controller
{
    use HasBitacora;

    public function __construct(){
        $this->middleware('can:revisiones_tecnicas.index')->only('index');
        $this->middleware('can:revisiones_tecnicas.create')->only('create');
        $this->middleware('can:revisiones_tecnicas.show')->only('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revision = Revision_Tecnica::paginate(10);
        return view('revisiones_tecnicas.index',['revisiones'=>$revision]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activos = Activo_Fijo::all();
        $estados = Estado::all();
        return view('revisiones_tecnicas.create',['afs'=>$activos,'estados'=>$estados]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $revision = new Revision_Tecnica();
        $revision->fecha = Carbon::now('America/Caracas');
        $revision->user_id = auth()->user()->id;
        $revision->estado_id =  $request->input('estado_id');
        $revision->AF_id =  $request->input('activo_id');
        $revision->conclusion =  0;
        $revision->save();


        $mantenimiento = new Mantenimiento();
        $mantenimiento->revision_id = $revision->id_revision;
        $mantenimiento->problema = $request->input('problema');
        $mantenimiento->fecha_inicio =$request->input('fecha_inicio');
        $mantenimiento->save();

        $modelo = class_basename($revision);
        HasBitacora::Created($modelo,$revision->id_revision);

        //return dd($revision,$mantenimiento);
        return redirect()->route('revisiones_tecnicas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revisiones = Revision_Tecnica::findOrFail($id);
        return view('revisiones_tecnicas.show',['revisiones'=>$revisiones]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rev = Revision_Tecnica::findOrFail($id);
        $modelo = class_basename($rev);
        HasBitacora::Created($modelo,$rev->id_revision);
        $rev->delete();
        return redirect()->route('revisiones_tecnicas.index')->with('success','la revision tecnica se ha eliminado');
    }
}
