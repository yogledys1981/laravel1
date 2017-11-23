<?php
/****************************************************************************/
/*                   Ejemplo37Controller.php                                */
/*                   basado en Laravel Framework 5 para php                 */
/****************************************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : egonzale@ucla.edu.ve
  Laravel: version 5
  Fecha  : 14 de septiembre del 2016
  Documentacion: http://docs.sencha.com/extjs/6.2.0/
  Para ejecutar el server:
  - Abrir un terminal
  - Ir al directorio: cd c:\wamp\www\Laravel5-ExtjsBasico6
  - Ejecutar: php artisan serve --host=192.168.1.100
  Para ejecutarlo en el navagador: http://192.168.1.100:8000/ejemplo37
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

class Ejemplo37Controller extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       return View::make('pages.ejemplo37');
    }
}

?>