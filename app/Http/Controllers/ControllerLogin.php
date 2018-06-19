<?php

namespace App\Http\Controllers;

use App\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Database\Eloquent\update;
// use Illuminate\Database\Eloquent\Builder\where;
use Validator;

class ControllerLogin extends Controller
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
            'clave.required'  => 'Por favor ingrese una contraseña',
            'email.exists'   => 'El correo ingresado no se encuentra en nuestra base de datos, por favor verifique si está correcto',
            'clave.exists'    => 'La contraseña asociada a ese correo no es correcta',

        ];

        $validator = Validator::make($request->all(), ['codigo' => 'required', 'clave' => 'required'], $messages);

        if ($validator->fails()) {

            return redirect()->route('auth_index_path')
                ->withErrors($validator)
                ->withInput();

        } else {

            $validatorEmail = Validator::make($request->all(), ['codigo' => 'exists:personas,codigo'], $messages);

            if ($validatorEmail->fails()) {

                return redirect()->route('auth_index_path')
                    ->withErrors($validatorEmail)
                    ->withInput();

            } else {

                if (Auth::attempt(['codigo' => $request->email, 'clave' => $request->pass])) {

                    return view('home');

                } else {

                    return redirect()->route('auth_index_path')
                        ->withErrors('Los datos no coinciden por favor verifique el codigo o la contraseña')
                        ->withInput();

                }

            }

        }

    }

    public function renewUser(Request $request)
    {

        $userRenew = User::where('email', $request->email);
        $userRenew->update(['password' => bcrypt($request->pass_new)]);
        return view('vistas.site');
    }

}
