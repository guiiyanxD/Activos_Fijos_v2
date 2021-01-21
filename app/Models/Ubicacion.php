<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicaciones';
    protected $primaryKey='id_ubicacion';
    protected $fillable = [
        'edificio','ciudad','pais','estado',
    ];

    public function departamento(){
        return $this->hasMany(Departamento::class, 'ubicacion_id');
    }
}
