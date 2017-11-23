 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo12/ejemplo12.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 12<br/><br/>
 		 Usando Herencia con el modificador:<br/><br/>
 		 <strong>Ext.define('Extjsbasico.Avion', {<br/>
	       extend: 'Extjsbasico.Vehiculo',</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo12/ejemplo12.js.<br/>		 
 </div>
 <span id="Fabricante"></span>
 <span id="Modelo"></span>
 <div id="myDiv2">
 		<strong id="myDiv3">Ejercicio</strong><br/><br/>
 		 Defina 2 nuevos atributos en la clase Vehiculo llamados:<br/>
 		 Componentes incializado con 100<br/> 
 		 Accesorios incializado con 12<br/><br/>
 		 En la clase Avion que herede de Vehiculo, crear un atributo llamado:<br/>
 		 Totalelementos inicializado con 0<br/><br/>
 		 En el constructor de la clase Avion, actualizar el atributo Totalelementos<br/>
 		 con la suma de los atributos heredados: Componentes y Accesorios.<br/><br/>
 		 Despu&eacute;s que se instancie la clase Avion, mostrar el total de elementos a trav&eacute;s de un<br/>
 		 m&eacute;todo de la clase Avion llamado: <strong>avion.getTotalelementos()</strong>.<br/>		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
