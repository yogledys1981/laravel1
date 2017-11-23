<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* En Windows */
//require_once app_path() . '\Libraries\Libreria.php';
/* En Linux */
//require_once app_path() . '/Libraries/Libreria.php';
use app\Libreria;

class Productos extends Model
{
 function Buscar($Datos)
 {
  $Codigo = $Datos->getV(0);
  $Valor = 0;
  $userRecord = Productos::where('Codigo', '=', $Codigo)->first();
  if ($userRecord!="")
  { 
   $Datos->setV(2,$userRecord->Stock);
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
    $Datos->setV($j,0,$registro->Codigo);
    $Datos->setV($j,1,$registro->Nombres);
    $Datos->setV($j,2,$registro->Stock;
    $j=$j+1;
  }
  return $Valor;
 } 

  function Grabar($Datos)
 {
  $Codigo = $Datos->getV(0);
  $Nombres = $Datos->getV(1);
  $Stock = $Datos->getV(2);
  $Valor = 0;
  $userRecord = Productos::where('Codigo', '=', $Codigo)->first();
  if ($userRecord!="")
  { 
   $userRecord->Nombres = $Nombre;
   $userRecord->Stock = $Stock;
   $userRecord->save();
   $Valor = 1;
  }
  else
  { 
   $objProductos = new Productos;
   $objProductos->Codigo = $Codigo;
   $objProductos->Nombres = $Nombres;
   $objProductos>Stock = $Stock;
   $objProductos->save();
   $Valor = 1;
  }
  return $Valor;
 }

 function Eliminar($Datos)
 {
  $Codigo = $Datos->getV(0);
   $Valor = 0;
  $userRecord = Productos:where('Codigo', '=', $Codigo)->first();
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
