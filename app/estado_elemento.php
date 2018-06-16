<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_elemento extends Model
{
    //  
    protected $table = 'estado_elementos';
     protected $fillable = ['id', 'nombre'];
    
    
    
    public function elemento()
        {
        return $this->hasMany('App\elemento');
       
        } 
    
    
   
}
