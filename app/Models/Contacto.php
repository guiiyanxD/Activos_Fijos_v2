<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $primaryKey = 'id_contacto';
    protected $fillable = [
        'user_id',
        'direccion',
        'celular',
        'telefono',
        'email_personal',
    ];
//TODO: relacion entre usuario y contacto esta al reves. corregir.
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function proveedor(){
        return $this->hasOne(Proveedor::class,'contacto_id');
    }
}
