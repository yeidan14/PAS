<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
    //
    
    
         protected $table = 'laboratorios';
     protected $fillable = ['id', 'sn','nombre','descripcion'];
    
    
    public function elemento()
        {
        return $this->hasMany('App\elemento');
       
        } 
    
    public function solicitudl()
        {
        return $this->hasMany('App\solicitud_laboratorio');
       
        } 
    
}
