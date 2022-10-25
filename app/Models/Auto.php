<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    //tabla a usar
    protected $table = 'autos';
    //no usamos los timestamps
    public $timestamps = false;
    //la clave primaria es la patente
    protected $primaryKey= 'patente';
    //no autoincrementa
    protected $incrementing = false;
    //el tipo de clave primaria
    protected $keyType = 'string';

    //fc p/ obt la marca a la cual pertenece un auto. vínculo 1->m 
    public function marca(){
        return this->belongsTo(Marca::class);
    }

}
