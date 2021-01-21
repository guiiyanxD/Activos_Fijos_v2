<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_categoria';
    protected $table = 'categorias';
    protected $fillable = [
        'nombre',
        'descripcion',
        'rubro_id',
    ];

    public function activo(){
        return $this->hasOne(Activo_Fijo::class, 'categoria_id');
    }

    public function rubro(){
        return $this->belongsTo(Rubro::class,'rubro_id');
    }

    public function det_adquisicion(){
        return $this->hasOne(Detalle_Adquisicion::class,'categoria_id');
    }

    public function det_solicitud(){
        return $this->hasOne(Detalle_Solicitud::class,'categoria_id');
    }
}
