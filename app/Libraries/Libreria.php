<?php
/*********************************************************************************/
/*                 Libreria.php                                                  */
/*********************************************************************************/
/*
  Autor  : Edgar Gonzalez
  Version: 1.0 en PHP5
  Fecha  : 05 de agosto del 2015
*/

namespace App\Http\Controllers;

use Fpdf;

/*
 * Emula un vector como el Vector de JAVA
 */
class Vector {
  private $v;
  
  function __construct() {
    $this->v=array();
  }
  
  function setV($j,$valor) {
    $this->v[$j]=$valor;
  }
  
  function getV($j) {
    $valor = "";
    if ($j<$this->countV()) {
     $valor = $this->v[$j];
    }
    return $valor;
  }
  
  function clearV() {
    $this->v = array();
  }
  
   function countV() {
    return count($this->v);
  }
  
  function getVector() {
   return $this->v;
  }
  
  function setVector($the_vector) {
   $this->v = $the_vector;
  }
  
}

/*
 * Emula un vector de 2d como el Vector de JAVA
 */
class Vector2d {
  private $v;

  function __construct() {
    $this->v=array();
  }

  function setV($i,$j,$valor) {
    $this->v[$i][$j]=$valor;
  }

  function getV($i,$j) {
    $valor = "";
    if ($i<$this->countV()) {
     $valor = $this->v[$i][$j];
    }
    return $valor;
  }

  function clearV() {
    $this->v = array();
  }
  
  function countV() {
    return count($this->v);
  }
  
  function countVC($i) {
    return count($this->v[$i]);
  }
  
  function getVector() {
   return $this->v;
  }
  
  function setVector($the_vector) {
   $this->v = $the_vector;
  }
}



/*********************************************************************************/
/* composer require anouar/fpdf                                                  */
/* https://packagist.org/packages/anouar/fpdf                                    */
/* Basado en: http://amijaya.net/how-to-export-pdf-in-laravel-using-anouar-fpdf/ */
/*********************************************************************************/
class PDF extends Fpdf
{
 //Encabezado de Pagina
 function Header($objPdf)
 {
  //Logos
  $objPdf::Image(base_path(). '//public//images//gv.jpg',10,5,30,13);
  $objPdf::Image(base_path(). '//public//images//egonzale.org.jpg',160,5,30,13);
  //Arial bold 15
  $objPdf::SetFont('Arial','B',15);
  //Movernos a la derecha
  $objPdf::Cell(80);
  //Titulo
  $objPdf::Cell(40,10,__('labels.title4'),0,0,'C');
  //Salto de linea
  $objPdf::Ln(20);
 }

 //Pie de pagina
 function Footer($objPdf)
 {
  //Posicion: a 3,5 cm del final
  $objPdf::SetY(-35);
  //Arial italic 8
  $objPdf::SetFont('Arial','I',8);
  //Numero de pagina
  $objPdf::Cell(0,10,'Pagina: '.$objPdf::PageNo().'/{nb}',0,0,'C');
 }

//Cargar los datos
function LoadData($file)
{
 //Leer las lineas del fichero
 $lines=file($file);
 $data=array();
 foreach($lines as $line)
  $data[]=explode(';',chop($line));
 return $data;
}

//Tabla simple
function BasicTable($objPdf,$header,$data)
{
 //Llamar encabezado
 $objPdf->Header($objPdf);
 //Cabecera
 foreach($header as $col)
  $objPdf::Cell(40,7,$col,1);
 $objPdf::Ln();
 //Datos
 foreach($data as $row)
 {
  foreach($row as $col)
   $objPdf::Cell(40,6,$col,1);
  $objPdf::Ln();
 }
 //Llamar pie de pagina
 $objPdf->Footer($objPdf);
}

//Una tabla mas completa
function ImprovedTable($objPdf,$header,$data)
{
 //Llamar encabezado
 $objPdf->Header($objPdf);
 //Anchuras de las columnas
 $w=array(40,35,40,45);
 //Cabeceras
 for($i=0;$i<count($header);$i++)
  $objPdf::Cell($w[$i],7,$header[$i],1,0,'C');
 $objPdf::Ln();
 //Datos
 foreach($data as $row)
 {
  $objPdf::Cell($w[0],6,$row[0],'LR');
  $objPdf::Cell($w[1],6,$row[1],'LR');
  $objPdf::Cell($w[2],6,number_format($row[2]),'LR',0,'R');
  $objPdf::Ln();
 }
 //Linea de cierre
 $objPdf::Cell(array_sum($w),0,'','T');
 //Llamar pie de pagina
 $objPdf->Footer($objPdf);
}

//Tabla coloreada
function FancyTable($objPdf,$header,$data)
{
 //Llamar encabezado
 $objPdf->Header($objPdf);
 //Colores, ancho de linea y fuente en negrita
 $objPdf::SetFillColor(62,174,177);
 $objPdf::SetTextColor(255);
 $objPdf::SetDrawColor(0,0,0);
 $objPdf::SetLineWidth(.3);
 $objPdf::SetFont('','B');
 //Cabecera
 $w=array(40,35,40,45);
 for($i=0;$i<count($header);$i++)
  $objPdf::Cell($w[$i],7,$header[$i],1,0,'C',1);
 $objPdf::Ln();
 //Restauracion de colores y fuentes
 $objPdf::SetFillColor(224,235,255);
 $objPdf::SetTextColor(0);
 $objPdf::SetFont('');
 //Datos
 $fill=0;
 foreach($data as $row)
 {
  $objPdf::Cell($w[0],6,$row[0],'LR',0,'L',$fill);
  $objPdf::Cell($w[1],6,$row[1],'LR',0,'L',$fill);
  //if ($row[2]=="") {
  if (gettype($row[2])=="string") {
   $objPdf::Cell($w[2],6,$row[2],'LR',0,'R',$fill);
  } else {
     $objPdf::Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
    }
  $objPdf::Ln();
  $fill=!$fill;
 }
 //Linea de cierre
 $objPdf::Cell(array_sum($w),0,'','T');
 //Llamar pie de pagina
 $objPdf->Footer($objPdf);
}

}

/***
* Clase que permite manipular la Localizacion dinamicamente
* No trabaja persistentemente para toda la app, funciona para cada metodo de
* cada controlador
* Basado en:
* -https://stackoverflow.com/questions/34566492/laravel-appsetlocale-doesnt-work
* -https://stackoverflow.com/questions/41265880/laravel-change-locale-not-working
* -https://mydnic.be/post/laravel-5-and-his-fcking-non-persistent-app-setlocale
***/
class Changelocalizacion {

  public function __construct() {}

  public function update() {
    $primeravez = "false";
     if (session()->exists('localizacion_sesion')) {
       // Se asigna la localizacion que ya existe en una Sesion
       $primeravez = "false";
       $locale = session()->get('localizacion_sesion');
       //\App::setLocale($locale);
       \Lang::setLocale($locale);
      } else {
         // Se asigna la localizacion por primera vez en una Sesion
         $locale = "en";
         session()->put('localizacion_sesion', "en");
         $primeravez = "true";
         //\App::setLocale($locale);
         \Lang::setLocale($locale);
        }
      return $primeravez;
  }

}
?>
