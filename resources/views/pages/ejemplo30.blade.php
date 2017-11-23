 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo30/ejemplo30.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
<div id="myDiv">E</strong>jemplo 30<br/> Manipulando elementos DOM<br/>Parte II</div><br/>
 <div id="myDiv1">
 		<strong>U</strong>so de <strong>Ext.select</strong><br/><br/>
 		 Este m&eacute;todo nos permite seleccionar una colecci&oacute;n de<br/>
 		 nodos DOM basado en el selector CSS.<br/><br/>
 		 Este retornar&aacute; un objeto de tipo <strong>Ext.CompositeElement</strong> o <strong>Ext.CompositeElementLite</strong>.<br/><br/>
 		 Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo30/ejemplo30.js.<br/>
 		 
 </div>
 <h1 id="institucion">Gerencia Virtual-Divisi&oacute;n de Software</h1>
  <h2>Profesores</h2>
   <ul id="profesores">
    <li>Rodolfo Canel&oacute;n</li>
    <li>Edgar Gonz&aacute;lez</li>
   </ul></div>
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
