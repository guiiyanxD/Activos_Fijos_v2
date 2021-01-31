<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    protected $primaryKey= 'id_solicitud';
    protected $fillable = [
        'fecha', 'user_id',
    ];

    public function activo(){
        return $this->hasMany(Activo_Fijo::class,'solicitud_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Solicitud_movimiento(){
        return $this->hasOne(Solicitud_Movimiento::class,'solicitud_id');
    }
    public function Solicitud_compra(){
        return $this->hasOne(Solicitud_Compra::class,'solicitud_id');
    }

}
