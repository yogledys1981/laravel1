<?php
/****************************************************************************/
/*                   AccesoController.php                                   */
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
  Para ejecutarlo en el navagador: http://192.168.1.100:8000/acceso
  Test de Ajax: 192.168.1.100:8000/accesocrud?funcion=enviar&usuario=21000000&clave=yiyi

  Por el error: Middleware\VerifyCsrfToken.php line 67" ondblclick="var
  Crear una variable _token global  y usarla o pasarlas en los posts o gets de Ext.Ajax.Request, ver acceso.js
  Basado en: http://stackoverflow.com/questions/30257229/laravel-post-token-missmatch-exception-file-upload
  Equivale en RoR para cada controlador: skip_before_filter :verify_authenticity_token
  O tambien agregar excepciones del URI en el archivo: VerifyCsrfToken.php que se encuentra en: app/Http/Middleware
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuarios;
use App\Productos;

use View;

/* En Windows */
//require_once app_path() . '\Libraries\Libreria.php';
/* En Linux */
require_once app_path() . '/Libraries/Libreria.php';

class AccesoController extends Controller
{
  private $primeravez;
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $obj = new Changelocalizacion();
       $this->primeravez = $obj->update();
       return View::make('pages.acceso', ['primeravez' => $this->primeravez]);
    }

    function setLocalizacion()
    {
     // Se asigna la localizacion escogida por el usuario y guardada en una Sesion
     $this->primeravez = "false";
     $locale = $_REQUEST["locale"];
     session()->put('localizacion_sesion', $locale);
     //\App::setLocale($locale);
     \Lang::setLocale($locale);
     return View::make('pages.acceso', ['primeravez' => $this->primeravez]);
    }

    function enviar()
    {
     $obj = new Changelocalizacion();
     $this->primeravez = $obj->update();
     $urlejemplo38 = "ejemplo38";
     $urlproductos = "productos";
     $usuario = $_REQUEST["usuario"];
     $clave = $_REQUEST["clave"];
     $Datos = new Vector();
     $Datos->setV(0,$usuario);
     $Datos->setV(1,$clave);
     $objusuario = new Usuarios();
     $valor = $objusuario->Buscar($Datos);
     if ($valor==1) {
      if (!session()->exists('usuario_sesion') && !session()->exists('clave_sesion')) {
       //
       session()->put('usuario_sesion', $Datos->getV(0));
       session()->put('clave_sesion', $Datos->getV(1));
      }
      $tirajson = '{"success": "true", "exito": "true", "usuario": "'.$Datos->getV(0).'", "clave": "'.$Datos->getV(1).'", "nivel": "'.$Datos->getV(2).'", "msg": "'. __('messages.msg12') .'", "url":"'.$urlproductos.'" }';
     } else {
        $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg13') .'." }';
     }
     echo $tirajson;
    }

    public function crud()
    {
     if (isset($_REQUEST["funcion"])) {
      switch ($_REQUEST["funcion"]) {
       case 'buscar':
        $this->enviar();
        break;

       default:
       break;
      }
     }
    }
}
?>