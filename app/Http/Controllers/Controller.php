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
        return view('index');
    }
    public function expired()
    {
        $status = (is_null(Auth::user()->password_changed_at))?"default":"expired";
        return view('auth.expired',compact("status"));
    }
}
