<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';
    protected $primaryKey = 'id_departamento';
    protected $fillable = [
        'nombre','descripcion','ubicacion_id','user_id', 'estado',
    ];

    public function activo(){
        return $this->hasMany(Activo_Fijo::class,'departamento_id');
    }

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class,'ubicacion_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function movimiento(){
        return $this->hasMany(Movimiento::class,'departamento_id');
    }
}
