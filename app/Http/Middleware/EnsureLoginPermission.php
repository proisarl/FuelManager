<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureLoginPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $permission=Auth::user()->can("login");
        if (!$permission) {
            Auth::logout();
            return redirect()->to('login')->with('status',"Vous n'avez Pas la Permission Pour L'Instant");
        }
        return $next($request);
    }
}
