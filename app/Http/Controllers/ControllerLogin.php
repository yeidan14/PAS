<?php

namespace App\Http\Controllers;

use App\User;
use App\persona;
use App\elemento;
use App\admin;
use app\solicitud_elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Eloquent\update;
// use Illuminate\Database\Eloquent\Builder\where;
use Validator;

class ControllerLogin extends Controller
{

public function postLogin(Request $request)
   {

        $user = $request->email;
        $email=$request->email;
        $usepass=$request->password;
        $password=$request->password;
       

         $users = DB::select('select * from personas where email = ?', [$user]);
         $pass=DB::select('select * from personas where password = ?', [$usepass]);

         $name = DB::table('personas')->where('email', $user)->value('nombre');
         $lastname = DB::table('personas')->where('email', $user)->value('apellidos');

           if(!empty($users)){

            if(!empty($pass)){


                return view('user' , ['name' => $name], ['lastname' => $lastname]);
                
                //['correo_e' => $users[]]

            }

            else{
                return view('alertalogin');
                
                
                            }

            
         }

         else{

            return view('alertalogin');
         }
         
     

      
   

    }

    public function logout()
    {
return view('welcome');

    }


    public function logoutadmin()
    {
return view('admin');

    }

    public function registrar(Request $request){
 
        $nomb = $request->nombre;
        $nombre = $request->nombre;
        $ape=$request->apellidos;
        $apellidos=$request->apellidos;
        $cod=$request->codigo;
        $codigo=$request->codigo;
        $pass=$request->password;
        $password=$request->password;
        $em=$request->email;
        $email=$request->email;
        $tipo_per=$request->tipo;
        $tipo=$request->tipo;

$users = DB::select('select * from personas where codigo = ?', [$cod]);
if(empty($users)){
DB::table('personas')->insert([
    ['nombre' => $nomb,
     'apellidos' => $ape,
     'codigo'=>$cod,
     'password'=>$pass,
     'email'=>$em,
     'tipo_persona'=>$tipo,]
]);
return view('alertregistersucces');

}
else{

    return view ('registererror');
}

    }

   
public function consultaElemento(Request $request)
   {

        $elem = $request->tipoelemento;
        $tipoelemento=$request->tipoelemento;
        $fecha=$request->dia;
        $dia=$request->dia;
        $inicio=$request->ini;
        $ini=$request->ini;
        $finf=$request->fin;
        $fin=$request->fin;
       
        //  $consulta= DB::table('solicitud_elementos')
        // ->join('elementos', function($join)
        // {
        //     $join->on('solicitud_elementos.id_elemento', '=', 'elementos.id')
        //          ->where('nombre', $elem)->value('nombre');
        // })
        // ->get();

        // return $consulta;


         $users = DB::select('select * from solicitud_elementos where email = ?', [$user]);
         $pass=DB::select('select * from personas where password = ?', [$usepass]);

         $name = DB::table('personas')->where('email', $user)->value('nombre');
         $lastname = DB::table('personas')->where('email', $user)->value('apellidos');

           if(!empty($users)){

            if(!empty($pass)){


                return view('user' , ['name' => $name], ['lastname' => $lastname]);
                
                //['correo_e' => $users[]]

            }

            else{
                return view('alertalogin');
                
                
                            }

            
         }

         else{

            return view('alertalogin');
         }
         
     }

      
public function registrarsolicitudElemento(Request $request){
        
          $cod=$request->codigo;
        $codigo=$request->codigo;

$users = DB::select('select * from personas where codigo = ?', [$cod]);

 $id = DB::table('personas')->where('codigo', $cod)->value('id');


        $elem = $request->tipoelemento;
        $tipoelemento=$request->tipoelemento;

        $fecha=$request->dia;
        $dia=$request->dia;

        $inicio=$request->ini;
        $ini=$request->ini;

        $finf=$request->fin;
        $fin=$request->fin;

         $jut=$request->jutifica;
        $justifica=$request->justifica;

         $number=$request->nume;
        $nume=$request->nume;


if(!empty($users)){
DB::table('solicitud_elementos')->insert([
    [
        'id_elemento'=>$elem,
        'id_persona'=>$id,
        'justificacion'=>$jut,
        'fecha'=>$dia,
        'cantidad_elemento'=>$number,
        'hora_inicio'=>$ini,
        'hora_fin'=>$finf,
        'id_esolicitud'=>'1',

        ]
]);
return view('solicitudregistro');

}
else{

    return view ('solicituderror');
}

    }

    



    public function exito()
    {
        return view("resultado_consulta");
    }


public function postLoginadmin(Request $request)
   {

        $user = $request->email;
        $email=$request->email;
        $usepass=$request->password;
        $password=$request->password;
       

         $users = DB::select('select * from admins where correo = ?', [$user]);
         $pass=DB::select('select * from admins where clave = ?', [$usepass]);

       
           if(!empty($users)){

            if(!empty($pass)){


                return view('useradmin' );
                
                //['correo_e' => $users[]]

            }

            else{
                return view('alertaloginadmin');
                
                
                            }

            
         }

         else{

            return view('alertaloginadmin');
         }
         
     

      }



}


