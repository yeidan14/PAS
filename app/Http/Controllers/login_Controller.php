<?php

namespace App\Http\Controllers;

use App\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Database\Eloquent\update;
// use Illuminate\Database\Eloquent\Builder\where;
use Validator;

class login_Controller extends Controller
{
     public function showLoginForm()
    {
        return view("welcome");
    }

    public function showSite()
    {
        return view("home");
    }

   
    public function site(Request $request)
    {

        $messages = [
            'codigo.required' => 'Por favor complete el campo codigo',
            'password.required'  => 'Por favor ingrese una contraseña',
            'email.exists'   => 'El correo ingresado no se encuentra en nuestra base de datos, por favor verifique si está correcto',
            'pass.exists'    => 'La contraseña asociada a ese correo no es correcta',

        ];

        $validator = Validator::make($request->all(), ['codigo' => 'required', 'password' => 'required'], $messages);

        if ($validator->fails()) {

            return redirect()->route('auth_index_path')
                ->withErrors($validator)
                ->withInput();

        } else {

            $validatorEmail = Validator::make($request->all(), ['email' => 'exists:users,email'], $messages);

            if ($validatorEmail->fails()) {

                return redirect()->route('auth_index_path')
                    ->withErrors($validatorEmail)
                    ->withInput();

            } else {

                if (Auth::attempt(['email' => $request->email, 'password' => $request->pass])) {

                    return view('vistas.site');

                } else {

                    return redirect()->route('auth_index_path')
                        ->withErrors('Los datos no coinciden por favor verifique el email o la contraseña')
                        ->withInput();

                }

            }

        }

    }
}
