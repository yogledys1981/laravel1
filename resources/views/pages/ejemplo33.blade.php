 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo33/ejemplo33.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
  <div id="myDiv">E</strong>jemplo 33<br/> Manipulando elementos DOM<br/>Parte V</div><br/>
 <div id="myDiv1">
    <strong>Ir directo a padres y a los hijos</strong><br/><br/>
      
        Podemos demostrar mediante la recuperaci&oacute;n del primer elemento 
        de la etiqueta: ul, que hace rol de padre de la lista contenido,
        mediante el m&eacute;todo parent de la clase Ext.Element.<br/><br/>
        
        Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo33/ejemplo33.js.<br/>
         
     
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
