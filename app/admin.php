<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    
    
     protected $table = 'admins';
    
     protected $fillable = ['id','codigo','nombre','apellidos','correo','dependencia','telefono','direccion','clave','tipo_persona'];
}
