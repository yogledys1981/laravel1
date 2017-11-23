 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo34/ejemplo34.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
 <div id="myDiv">E</strong>jemplo 34<br/> Manipulando elementos DOM<br/>Parte VI</div><br/>
 <div id="myDiv1">
    <strong>Creando un nuevo elemento DOM</strong><br/><br/>
        
    Despu&eacute;s de trabajar a trav&eacute;s de ejemplos de selecci&oacute;n,<br/>
      recorrido y manipulaci&oacute;n de elementos DOM, ahora vamos a<br/>
      pasar a la creaci&oacute;n de un elemento DOM en nuestro dise&ntilde;o.<br/><br/>
  
        Inicialmente, vamos a demostrar c&oacute;mo crear un elemento<br/>
        simple a la lista de contenido con una configuraci&oacute;n b&aacute;sica.<br/><br/>
    
        Para ello, vamos a pasar a explorar c&oacute;mo controlar la<br/>
        posici&oacute;n de nuestro nuevo elemento para luego agregarlo.<br/><br/>
        
        Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo34/ejemplo34.js.<br/>
         
     
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
