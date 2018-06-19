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
    public function user()
    { return view('user');
        
                           }
    
    public function elemento()
    { return view('elemento');
        
                           }
    
     public function promedia()
    { return view('promedia');
        
                           }
      public function prestamo()
    { return view('prestamo');
        
                           }
    
      public function contacto()
    { return view('contacto');
        
                           }
    
       public function admin()
    { return view('admin');
        
                           }
    
      public function adminpanel()
    { return view('useradmin');
        
                           }

    public function useradmin()
    { return view('useradmin');
        
                           }

 public function adminsolicitud()
    { return view('solicitudes');
        
                           } 


 public function correoadmin()
    { return view('correo');
        
                           }    
    
    
}
