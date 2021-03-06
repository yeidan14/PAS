<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ControllerSite extends Controller
{
    public function showSite()
    {
        return view('vistas.site');
    }

    public function logoutUser()
    {

        Auth::logout();
        return redirect()->route("auth_index_path");

    }

}
