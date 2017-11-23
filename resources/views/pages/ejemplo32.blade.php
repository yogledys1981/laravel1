 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo32/ejemplo32.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
  <div id="myDiv">E</strong>jemplo 32<br/> Manipulando elementos DOM<br/>Parte IV</div><br/> <div id="myDiv1">
    <strong>Recorriendo a elementos DOM</strong><br/><br/>
      
      Es importante ser capaz de movernos por el DOM en funci&oacute;n<br/> 
      del contexto actual y recuperar referencias a los elementos<br/>
      que lo rodean. En este ejemplo, vamos a descubrir c&oacute;mo<br/> 
      utilizar Ext JS para recorrer el DOM y a los elementos de<br/>
      acceso, basado en el contexto del elemento actual que se<br/>
      est&aacute; trabajando.<br/><br/>
      
      Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo32/ejemplo32.js.<br/>
          
     
 </div>
 <h1 id="institucion">Gerecia Virtual-Divisi&oacute;n de Software</h1>
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
