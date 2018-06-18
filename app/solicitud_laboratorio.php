<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud_laboratorio extends Model
{
    //
    
    
         protected $table = 'solicitud_laboratorios';
     protected $fillable = ['id','id_persona','justificacion','fecha','hora_inicio','hora_fin','id_esolicitud'];
    
    
    public function laboratorio()
        {
        return $this->belongsTo('App\laboratorio');
       
        } 
    
    
    public function persona()
        {
        return $this->belongsTo('App\persona');
       
        }
    
    public function estados()
        {
        return $this->belongsTo('App\estado_solicitud');
       
        } 
    
}
