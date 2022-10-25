<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Marca extends Model
{
    use HasFactory, softDeletes;

    //indicar la tabla asociada a este model
    protected $table = 'marcas';

    //def un método p obt todos los autos asociados a la marca
    public function autos(){
        return this->HasMany(Auto::class);
    }

}
