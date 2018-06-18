<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud_elemento extends Model
{
    //
         protected $table = 'solicitud_elementos';
     protected $fillable = ['id', 'id_elemento','id_persona','justificacion','fecha','cantidad_elemento','hora_inicio','hora_fin','id_esolicitud'];
    
    //relacion persona
    public function persona()
        {
          return $this->belongsTo('App\persona');
       
        } 
    
    //relacion elemento
    public function elemento()
        {
          
          return $this->belongsTo('App\elemento');
       
        }
    
    //relacion elemento
    public function estadosolicitud()
        {
          
          return $this->belongsTo('App\estado_solicitud');
       
        }
    
    
    
}
