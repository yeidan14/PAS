<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_persona extends Model
{
    //
     protected $table = 'tipo_personas';
     protected $fillable = ['id', 'nombre'];
    
    
    //relacion de persona
    public function personas()
        {
           return $this->hasMany('App\persona');
        }   
    
   
    
    
    
}
