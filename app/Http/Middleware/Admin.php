<?php

namespace Codered\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //validar si usuario es un administrador
        if(1 == 1) {
            return $next($request);    
        } else {
            //Lógica para redireccionar a un usuario no autorizado
            dd('No eres administrador');
        }
        
    }
}
