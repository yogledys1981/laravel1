 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo31/ejemplo31.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
 <div id="myDiv">E</strong>jemplo 31<br/> Manipulando elementos DOM<br/>Parte III</div><br/>
 <div id="myDiv1">
    <strong>Ext.query</strong><br/><br/>
          Ext.query, un alias para Ext.DomQuery.select, el mismo, selecciona<br/>
          un conjunto de nodos DOM basados en el selector:<br/><br/><br/>
    
                        <div align="center"/>CSS/XPath<br/><br/><br/> 
    
          Este m&eacute;todo es ideal cuando se requiere un rendimiento<br/> 
          r&aacute;pido y s&oacute;lo tendr&aacute; que acceder a los nodos DOM directamente <br/>
          sin usar una clase de tipo envoltura dentro de un marco y/o funcionalidad.<br/><br/>
    
          Este ejemplo puede reescribirse utilizando Ext.DomQuery.select<br/><br/>
          y la salida usando cualquiera de las dos ser&aacute; por consola de<br/> 
          javascript, mostrando una gran variedad de referencias de nodos DOM.<br/><br/>
          
          Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo31.js.<br/>
     
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

</div>
@include('includes.footer')
</body>
</html>
