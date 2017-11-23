<?php
/****************************************************************************/
/*                   ErrorController.php                                    */
/*                   basado en Laravel Framework 5 para php                 */
/****************************************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Laravel: version 5
  Fecha  : 14 de septiembre del 2016
  Documentacion: http://docs.sencha.com/extjs/6.2.0/
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class ErrorController extends Controller
{
  private $msgerror; // Atributo o propiedad de la clase.

  //Constructor de la clase.
  public function __construct()
    {
       $this->msgerror = "Error no definido."; //Inicializamos el atributo o propiedad.
    }
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $this->msgerror = $_REQUEST["msgerror"]; //Recibimos como parametro via GET o POST a msgerror
       return View::make('pages.error', ['msgerror' => $this->msgerror]); // Llamamos a la vista para mostrar el error.
    }
}

?>