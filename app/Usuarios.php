<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* En Windows */
//require_once app_path() . '\Libraries\Libreria.php';
/* En Linux */
//require_once app_path() . '/Libraries/Libreria.php';
use app\Libreria;

class Usuarios extends Model
{
 function Buscar($Datos)
 {
  $Usuario = $Datos->getV(0);
  $Clave = $Datos->getV(1);
  $Valor = 0;
  $userRecord = Usuarios::where('usuario', '=', $Usuario)->where('clave', '=', $Clave)->first();
  if ($userRecord!="")
  { 
   $Datos->setV(2,$userRecord->nivel);
   $Valor = 1;
  }
  else
  { 
   $Valor = 0;
  }
  return $Valor;
 }

 function BuscarTodos($Datos)
 {
  $Valor = 0;
  $registros = Usuarios::all();
  $j=0;
  foreach ($registros as $registro) {
    if ($j==0) { $Valor = 1; }
    $Datos->setV($j,0,$registro->usuario);
    $Datos->setV($j,1,$registro->clave);
    $Datos->setV($j,2,$registro->nivel);
    $j=$j+1;
  }
  return $Valor;
 } 

  function Grabar($Datos)
 {
  $Usuario = $Datos->getV(0);
  $Clave = $Datos->getV(1);
  $Nivel = $Datos->getV(2);
  $Valor = 0;
  $userRecord = Usuarios::where('usuario', '=', $Usuario)->where('clave', '=', $Clave)->first();
  if ($userRecord!="")
  { 
   $userRecord->nivel = $Nivel;
   $userRecord->save();
   $Valor = 1;
  }
  else
  { 
   $objUsuario = new Usuarios;
   $objUsuario->usuario = $Usuario;
   $objUsuario->clave = $Clave;
   $objUsuario->nivel = $Nivel;
   $objUsuario->save();
   $Valor = 1;
  }
  return $Valor;
 }

 function Eliminar($Datos)
 {
  $Usuario = $Datos->getV(0);
  $Clave = $Datos->getV(1);
  $Valor = 0;
  $userRecord = Usuarios::where('usuario', '=', $Usuario)->where('clave', '=', $Clave)->first();
  if ($userRecord!="")
  { 
   $userRecord->delete();
   $Valor = 1;
  }
  else
  { 
   $Valor = 0;
  }
  return $Valor;
 }  
}
