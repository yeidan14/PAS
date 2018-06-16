<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    
     protected $table = 'personas';
    
     protected $fillable = ['id','codigo','nombre','apellidos','correo','clave','tipo_persona'];
    //relacion tipo_persona
    public function tipopersona()
        {
          return $this->belongsTo('App\tipo_persona');
       
        }
    //relacion solicitudelementos
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
