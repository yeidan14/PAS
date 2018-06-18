<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitie_Controller extends Controller
{
    public function showSite()
    {
        return view('home');
    }

    public function logoutUser()
    {

        Auth::logout();
        return redirect()->route("auth_index_path");

    }
}
