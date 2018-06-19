<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

      protected $table = 'personas';
    
     protected $fillable = ['id','codigo','nombre','apellidos','email','password','tipo_persona'];
    //relacion tipo_persona

}
