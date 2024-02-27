<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        // Alert::alert('Title', 'Message', 'Type');
        // toast('Warning Toast','warning');
        // toast('Question Toast','question');
        // toast('Question Toast','question');
        // toast('Error Toast','error');
        $permission=Auth::user()->can("login");
        if (!$permission) {
            Auth::logout();
            return redirect()->to('login')->with('status',"Vous n'avez Pas la Permission Pour L'Instant");
        }
        return view('index');
    }
}
