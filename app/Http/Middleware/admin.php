<?php

namespace proyectoLesny\Http\Middleware;

use Closure;

class admin
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
       // aqui lo que validamos es que el usuario sea un aministrador
       if(1==1){
           //permite iniciar como administrador
        return $next($request);

       }else {
           dd("no eres el aministrador");
       }
        
    }
}
