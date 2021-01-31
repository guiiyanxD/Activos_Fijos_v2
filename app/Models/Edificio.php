<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Edificio extends Model
{
    use HasFactory;
    protected $table='edificio';
    protected $primaryKey='id_edificio';
    protected $fillable=[
        'nombre','direccion','ciudad_id',
    ];


    public function departamento(){
        return $this->hasMany(Departamento::class,'edificio_id');
    }

    public function ciudad(){
        return $this->belongsTo(Ciudad::class,'ciudad_id');
    }

}
