<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdm
{

     public function handle($request, Closure $next)
    {
        $usuario=session("Usuario");
        if($usuario->perfil < 3){
            return redirect()->route('/');
        }
        return $next($request);
    }
}
