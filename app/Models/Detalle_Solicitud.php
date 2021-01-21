<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Solicitud extends Model
{
    use HasFactory;
    protected $table='detalles_solicitudes';
    protected $primaryKey='id_detalle_solicitud';
    protected $fillable=[
        'solicitud_id','categoria_id','descripcion','cantidad',
    ];

    public function solicitud(){
        return $this->belongsTo(Solicitud::class, 'solicitud_id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
