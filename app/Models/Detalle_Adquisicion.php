<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Adquisicion extends Model
{
    use HasFactory;
    protected $table='detalles_de_adquisiciones';
    protected $primaryKey='id_det_adquisicion';
    protected $fillable=[
        'nombre','adquisicion_id','categoria_id',
    ];

    public function adquisicion(){
        return $this->belongsTo(Adquisicion::class,'adquisicion_id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
}
