<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lab_controller extends Controller
{
    //
    
    public function registro()
    { return view('registrar'); 
    
    }
    public function laboratorio()
    { return view('laboratorio');
        
                           }
    public function home()
    { return view('home');
        
                           }
    
    public function elemento()
    { return view('elemento');
        
                           }
    
     public function promedia()
    { return view('promedia');
        
                           }
      public function politicas()
    { return view('politicas');
        
                           }
    
      public function contacto()
    { return view('contacto');
        
                           }
    
    
    
}
