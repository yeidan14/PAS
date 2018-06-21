<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\persona;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers, ThrottlesLogins;


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

       protected function getLogin()
    {
        return view("login");
    }


       

        public function postLogin(Request $request)
   {


        $user = $request->name;
        $email = $request->email;

        $count = App\persona::where('user', '=', $user);


        return $count;
    // $this->validate($request, [
    //     'email' => 'required',
    //     'password' => 'required',
    // ]);



    // $credentials = $request->only('email', 'password');

    // if ($this->auth->attempt($credentials, $request->has('remember')))
    // {
    //     return view("user");
    // }

    // return view()->with("msjerror","credenciales incorrectas");

    }


//login

 //registro   


        protected function getRegister()
    {
        return view("registro");
    }


        

        protected function postRegister(Request $request)

   {
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);


    $data = $request;


    $user=new User;
    $user->name=$data['name'];
    $user->email=$data['email'];
    $user->password=bcrypt($data['password']);


    if($user->save()){

         return "se ha registrado correctamente el usuario";
               
    }
   

   

}

//registro

protected function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('login');
    }






}
