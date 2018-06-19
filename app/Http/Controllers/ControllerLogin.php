<?php

namespace App\Http\Controllers;

use App\Persona;
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
        return view("user");
    }

    public function forgottenPass()
    {
        return view('vistas.forgottenPass');
    }

    public function site(Request $request)
    {

        $messages = [
            'email.required' => 'Por favor complete el campo email',
            'password.required'  => 'Por favor ingrese una contraseña',
            'email.exists'   => 'El correo ingresado no se encuentra en nuestra base de datos, por favor verifique si está correcto',
            'password.exists'    => 'La contraseña asociada a ese correo no es correcta',

        ];

        $validator = Validator::make($request->all(), ['email' => 'required', 'password' => 'required'], $messages);

        if ($validator->fails()) {

            return redirect()->route('auth_index_path')
                ->withErrors($validator)
                ->withInput();

        } else {

            $validatorEmail = Validator::make($request->all(), ['email' => 'exists:personas,email'], $messages);

            if ($validatorEmail->fails()) {

                return redirect()->route('auth_index_path')
                    ->withErrors($validatorEmail)
                    ->withInput();

            } else {

                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                    return view('user');

                } else {

                    return redirect()->route('auth_index_path')
                        ->withErrors('Los datos no coinciden por favor verifique el email o la contraseña')
                        ->withInput();

                }

            }

        }

    }

    public function renewUser(Request $request)
    {

        $userRenew = Persona::where('email', $request->email);
        $userRenew->update(['password' => bcrypt($request->pass_new)]);
        return view('user');
    }

}
