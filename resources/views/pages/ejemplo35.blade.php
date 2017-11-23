 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo35/ejemplo35.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
 <div id="myDiv">E</strong>jemplo 35<br/> Manipulando elementos DOM<br/>Parte VII</div><br/>
 <div id="myDiv1">
    <strong>Insertando un nuevo elemento antes o despu&eacute;s de un elemento existente</strong><br/><br/>
            
        El m&eacute;todo insertBefore de Ext.core.DomHelper nos permite insertar un nuevo<br/>
        elemento antes de un elemento existente, como un hermano a el. Por ejemplo, <br/>
        podemos insertar una nueva unidad a la lista de contenido en la parte superior<br/> 
        de la lista (es decir, antes de la primera unidad existente que es<br/>
        Fundamentos de Linux, la nueva unidad se llamara Introducci&oacute;n a la Asignatura.)<br/><br/>
         
    Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo35/ejemplo35.js.<br/> 
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
