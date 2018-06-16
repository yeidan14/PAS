<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class elemento extends Model
{
    //
     protected $table = 'elementos';
     protected $fillable = ['id', 'sn','nombre','descripcion','id_laboratorio','id_estado'];
    
    
    public function Solicitud()
        {
        return $this->hasMany('App\solicitud_elemento');
       
        } 
    
    
    public function estadoE()
        {
        return $this->belongsTo('App\estado_elemento');
       
        } 
    
    
     public function laboratorio()
        {
        return $this->belongsTo('App\laboratorio');
       
        } 
    
    
    
    
}
