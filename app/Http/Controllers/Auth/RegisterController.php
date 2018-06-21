<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected $redirectTo = '/site';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
             'codigo'    => 'required|string|max:255',
             'nombre'    => 'required|string|max:255',
             'apellidos'    => 'required|string|max:255',
             'email'    => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'tipo_persona' => 'required|integer|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([

            'codigo'     => $data['codigo'],
            'nombre'     => $data['nombre'],
            'apellidos'     => $data['apellidos'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'tipo_persona'    => $data['tipo_persona'],

        ]);
    }
}
