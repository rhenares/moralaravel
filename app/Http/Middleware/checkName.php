<?php

namespace App\Http\Middleware;

use Closure;

class checkName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
      public function handle($request, Closure $next, $name)
      {

     if (\Auth::chek&& \Auth::user(->===$name){
          return $next($request);
      }
      return redirect('/');
}
// Nos preparamos el middleware agregandole un parámetro más,
// llamado `$name` y luego checkeamos a través de un `if`,
// si el usuario está logueado y si el nombre recibido es el mismo al que tiene el usuario.
//  De ser así, va a correr la linea `return $next($request);`.
//  Esta linea permite que el flujo siga, en cambio, si no fuera el nombre que esperamos,
//  lo redirigimos a la ruta `'/'`.
