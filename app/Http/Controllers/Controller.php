<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $permission=Auth::user()->can("login");
        if (!$permission) {
            Auth::logout();
            return redirect()->to('login')->with('status',"Vous N'etes Pas Autorisé");
        }
        return view('index');
    }
}
