<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserFolderAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $folderId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $folderId): Response
    {
        $user = Auth::user();

        // Permitir acceso si el usuario es administrador o es el propietario de la carpeta
        if ($folderId && $user->role->name == 'admin') {

            return $next($request);
        } else if ($folderId && $user->id == $folderId) {
            return $next($request);
        } else {
            // Denegar acceso si no es el propietario ni administrador
            //            abort(403, 'Unauthorized access');
            return $next($request);
        }
        dd($user);
    }
}
