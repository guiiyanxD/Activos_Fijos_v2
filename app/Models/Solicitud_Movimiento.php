<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Movimiento extends Model
{
    use HasFactory;
    protected $table = 'solicitudes_movimientos';
    protected $primaryKey='id_sol_mov';
    protected $fillable = [
        'destino_dpto','origen_dpto','af_id','cantidad','solicitud_id',
    ];

    public function activo(){
        return $this->belongsTo(Activo_Fijo::class,'af_id');
    }

    public function departamento(){
        return $this->belongsTo(Departamento::class,'destino_dpto');
    }

    public function solicitud(){
        return $this->belongsTo(Solicitud::class,'solicitud_id');
    }
}
