 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo36/ejemplo36.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
 <div id="myDiv">E</strong>jemplo 36<br/> Manipulando elementos DOM<br/>Parte VIII</div><br/>
 <div id="myDiv1">
    <strong>Uso de plantillas para insertar elementos</strong><br/><br/>
  
  Las plantillas nos permiten crear cadenas de HTML que contienen<br/> 
  marcadores de posicion de datos. Estas plantillas se pueden combinar<br/>
  con un objeto de datos que nos de una cadena HTML con sus marcadores<br/>
  de posicion reemplazados con los valores del objeto de datos.<br/><br/>
  
  La clase Ext.Template se puede usar para anadir<br/>
  (insertBefore / InsertAfter) la salida de este proceso de combinacion<br/>
  de un elemento existente. Podemos utilizar el metodo:<br/><br/>
  
   <strong align="center">Ext.core.DomHelper.createTemplate</strong><br/><br/>
  
  para generar inicialmente esta plantilla. Comenzamos creando una<br/> 
  plantilla usando la misma sintaxis de objeto de configuracion que<br/> 
  hemos utilizado anteriormente. Nuestra plantilla tiene un marcador<br/> 
  de posicion, llamada: nuevaUnidad.<br/><br/>
         
  Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo36/ejemplo36.js.<br/>     
 </div>
 <h1 id="institucion">Gerencia Virtual-Divisi&oacute;n de Software</h1>
  <h2>Profesores</h2>
   <ul id="profesores">
    <li>Rodolfo Canel&oacute;n</li>
    <li>Edgar Gonz&aacute;lez</li>
   </ul>
  <h2>Diplomado DWEL</h2>
   <ul id="contenido">
    <li>Fundamentos de Linux</li>
    <li>Metodolog&iacute;as &Aacute;gil y UML</li>
    <li>Fundamentos de Desarrollo Web en PHP</li>
    <li>Marcos de Trabajos en PHP y Web 2.0</li>
    <li>Introducci&oacute;n a SOA</li>
   </ul>


 @include('includes.footer')

</div>
</body>
</html>
