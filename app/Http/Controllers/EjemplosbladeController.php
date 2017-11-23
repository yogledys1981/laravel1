<?php
/****************************************************************************/
/*                   EjemplosbladeController.php                                    */
/*                   basado en Laravel Framework 5 para php                 */
/****************************************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Laravel: version 5
  Fecha  : 14 de septiembre del 2016
  Documentacion de Blande:
   • https://laravel.com/docs/5.4/blade
   • https://github.com/bminer/node-blade
  Documentacion de ExtJS: 
   • http://docs.sencha.com/extjs/6.2.0/
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class EjemplosbladeController extends Controller
{
  private $mensaje; // Atributo o propiedad de la clase.

  //Constructor de la clase.
  public function __construct()
    {
       //Inicializamos el atributo o propiedad.
       $this->mensaje[0] = "Bienvenidos a los ejemplos: Blade";
    }
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       return View::make('pages.ejemplosblade', ['mensaje' => $this->mensaje]); 
    }
    
    public function ejemploif()
    {
       $this->mensaje[1] = "Ejemplo @if: ";
       // Variable local al metodo ejemploif
       $contador = 2;
       return View::make('pages.ejemplosbladeif', ['mensaje'  => $this->mensaje,
                                                   'contador' => $contador]); 
    }

    public function ejemplobucle()
    {
       $this->mensaje[1] = "Ejemplo bucle @for @endfor : ";
       $this->mensaje[2] = "Ejemplo bucle @foreach @endforeach : ";
       $this->mensaje[3] = "Ejemplo bucle @while @endwhile : ";
       //Variable local al metodo ejemplobucle
       $edades = array("Paola"=>"24", "Camila"=>"17", "Edgar"=>"21");
       $pagos = array("7.500", "21.594", "48.586");
       $tamano=count($pagos);
       return View::make('pages.ejemplosbladebucle', ['mensaje' => $this->mensaje,
                                                      'edades'  => $edades,
                                                      'pagos'   => $pagos,
                                                      'j'       => $tamano]); 
    }
}

?>