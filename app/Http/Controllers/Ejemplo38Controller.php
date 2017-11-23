<?php
/****************************************************************************/
/*                   Ejemplo38Controller.php                                */
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
  Para ejecutarlo en el navagador: http://192.168.1.100:8000/ejemplo38
  Test de Ajax: 192.168.1.100:8000/ejemplo38crud?funcion=buscar&usuario=21000000&clave=yiyi

  Por el error: Middleware\VerifyCsrfToken.php line 67" ondblclick="var
  Crear una variable _token global  y usarla o pasarlas en los posts o gets de Ext.Ajax.Request, ver ejemplo38.js
  Basado en: http://stackoverflow.com/questions/30257229/laravel-post-token-missmatch-exception-file-upload
  Equivale en RoR para cada controlador: skip_before_filter :verify_authenticity_token
  O tambien agregar excepciones del URI en el archivo: VerifyCsrfToken.php que se encuentra en: app/Http/Middleware
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Usuarios;

use View;

use Fpdf;

/* En Windows */
//require_once app_path() . '\Libraries\Libreria.php';
/* En Linux */
require_once app_path() . '/Libraries/Libreria.php';

class Ejemplo38Controller extends Controller
{
   private $usuario;
   private $clave;
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      // Se asigna la localizacion
      $obj = new Changelocalizacion();
      $obj->update();
      if (session()->exists('usuario_sesion') && session()->exists('clave_sesion')) {
       // Se asigna la localizacion
       $locale = session()->get('localizacion_sesion');
       \App::setLocale($locale);
       //Se asigna a las variables de la clase
       $this->usuario = session()->get('usuario_sesion');
       $this->clave   = session()->get('clave_sesion');
       return View::make('pages.ejemplo38', ['usuario' => $this->usuario]);
      } else {
        return redirect('/error?msgerror="'. __('messages.msg01') .'"');
      }
       
    }

    function buscar()
    {
     // Se asigna la localizacion
     $obj = new Changelocalizacion();
     $obj->update();
     $usuario = $_REQUEST["usuario"];
     $clave = $_REQUEST["clave"];
     $Datos = new Vector();
     $Datos->setV(0,$usuario);
     $Datos->setV(1,$clave);
     $objusuario = new Usuarios();
     $valor = $objusuario->Buscar($Datos);
     if ($valor==1) {
      $tirajson = '{"success": "true", "exito": "true", "usuario": "'.$Datos->getV(0).'", "clave": "'.$Datos->getV(1).'", "nivel": "'.$Datos->getV(2).'", "msg": "'. __('messages.msg02') .'." }';
     } else {
        $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg03') .'." }';
     }
     echo $tirajson;
    }
 
    function grabar()
    {
     // Se asigna la localizacion
     $obj = new Changelocalizacion();
     $obj->update();
     $usuario = $_REQUEST["usuario"];
     $clave = $_REQUEST["clave"];
     $nivel = $_REQUEST["nivel"];
     $Datos = new Vector();
     $Datos->setV(0,$usuario);
     $Datos->setV(1,$clave);
     $Datos->setV(2,$nivel);
     $objusuario = new Usuarios();
     $valor = $objusuario->Grabar($Datos);
     if ($valor==1) {
      $tirajson = '{"success": "true", "exito": "true", "msg": "'. __('messages.msg04') .'" }';
     }
     else {
       $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg05') .'" }';
     }
     echo $tirajson;
    }
 
    function eliminar()
    {
     // Se asigna la localizacion
     $obj = new Changelocalizacion();
     $obj->update();
     $usuario = $_REQUEST["usuario"];
     $clave = $_REQUEST["clave"];
     $Datos = new Vector();
     $Datos->setV(0,$usuario);
     $Datos->setV(1,$clave);
     $objusuario = new Usuarios();
     $valor = $objusuario->Buscar($Datos);
     if ($valor==1) {
      $valor = $objusuario->Eliminar($Datos);
      if ($valor==1) {
       $tirajson = '{"success": "true", "exito": "true", "msg": "'. __('messages.msg06') .'" }';
      }
      else {
       $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg07') .'" }';
      }
     }
     echo $tirajson;
    }

    function imprimir()
    {
     // Se asigna la localizacion
     $obj = new Changelocalizacion();
     $obj->update();
     $Datos = new Vector2D();
     $objusuarios = new Usuarios();
     $valor = $objusuarios->BuscarTodos($Datos);
     if ($valor==1) {
      $pdf=new PDF();
      $pdf::AliasNbPages();
      $header = array(__('labels.user'),__('labels.pwd'),__('labels.level'));
      $data = $Datos->getVector();
      $pdf::SetFont('Arial','',14);
      $pdf::AddPage();
      //$pdf->BasicTable($pdf,$header,$data);
      //$pdf->ImprovedTable($pdf,$header,$data);
      $pdf->FancyTable($pdf,$header,$data);
      $pdf::Output(base_path()."//public//pdfs//usuarios.pdf","F");
      $tirajson = '{"success": "true", "exito": "true", "msg": "'. __('messages.msg08') .'" }';   
     } else {
        $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg09') .'" }';   
     }
     echo $tirajson;
    }

    function cerrar()
    {
     // Se asigna la localizacion
     $obj = new Changelocalizacion();
     $obj->update();
     try {
      $urlacceso = "acceso";
      session()->forget('usuario_sesion');
      session()->forget('clave_sesion');
      $tirajson = '{"success": "true", "exito": "true", "msg": "'. __('messages.msg10') .'", "url":"'.$urlacceso.'" }';
     } catch(Exception $e) {
       $tirajson = '{"success": "true", "exito": "false", "msg": "'. __('messages.msg11') .'" }';
     }
     echo $tirajson;
    }

    public function crud()
    {
     if (isset($_REQUEST["funcion"])) {
      switch ($_REQUEST["funcion"]) {
       case 'buscar':
        $this->buscar();
        break;
       case 'grabar':
        $this->grabar();
        break;
       case 'eliminar':
        $this->eliminar();
        break;
       case 'imprimir':
        $this->imprimir();
        break;
       case 'cerrar':
        $this->cerrar();
        break;

       default:
       break;
      }
     }
    }
}
?>