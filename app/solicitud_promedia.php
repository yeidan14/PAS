<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud_promedia extends Model
{
    //
    
    protected $table = 'solicitud_promedias';
     protected $fillable = ['id','id_persona', 'nombres','apellidos','codigo','descripcion','fecha','hora_inicio','hora_fin','palabras_clave','materia','entidad','id_esolicitud'];
    
    
    public function persona()
        {
        return $this->belongsTo('App\persona');
       
        }
    
    public function estados()
        {
        return $this->belongsTo('App\estado_solicitud');
       
        } 
}
