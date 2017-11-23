<?php
/****************************************************************************/
/*                   CheckEjemplo01.php                                     */
/*                   basado en Laravel Framework 5 para php                 */
/****************************************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Laravel: version 5
  Fecha  : 14 de septiembre del 2016

  Documentacion: https://laravel.com/docs/5.4/middleware
  Para crear el middleware:
  - Abrir un terminal
  - Ir al directorio 
    En Windows: cd c:\wamp\www\Laravel5.4-Extjs6.2-Basico
    En Linux  : cd /var/www/html/Laravel5.4-Extjs6.2-basico
  - Ejecutar: php artisan make:middleware CheckEjemplo01
*/

namespace App\Http\Middleware;

use Closure;

class CheckEjemplo01
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
        $paso = false; // A futuro, se hara el llamado a una clase de autenticacion
        if ($paso) {
         return $next($request);
        } else {
            //return response("No autorizado", 401); //Valido
            //return redirect('/'); //Valido
            return redirect('/error?msgerror="No autorizado para acceder Ejemplo01"'); //Valido
            //redirect('/'); //NO Valido
        }
        redirect('/');
    }
}
