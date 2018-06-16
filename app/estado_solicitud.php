<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_solicitud extends Model
{
    //
    
       protected $table = 'estado_solicituds';
     protected $fillable = ['id', 'nombre','descripcion'];
    
     //solicidud
    public function solicitudE()
        {
          
         return $this->hasMany('App\solicitud_elemento');
       
        }
    
    
    public function solicitudl()
        {
          
         return $this->hasMany('App\solicitud_laboratorio');
       
        }
    
    
    public function solicitudp()
        {
          
         return $this->hasMany('App\solicitud_promedia');
       
        }
    
}
