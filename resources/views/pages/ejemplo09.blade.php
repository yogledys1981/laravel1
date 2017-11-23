 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo09/ejemplo09.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 09<br/><br/>
 		 Definiendo clases con la funci&oacute;n: <strong>Ext.define('Extjsbasico.Vehiculo', {</strong><br/>
 		 Se definen las propiedades al comienzo de la clase:<br/><br/> 
 		 <strong><br/>
		  Fabricante: 'Chevrolet',<br/>
		  Modelo: 'Optra',<br/>
		 </strong><br/><br/>
		 Se define el constructor:<br/><br/> 
 		 <strong>constructor: function(Fabricante, Modelo) {},</strong><br/><br/>
 		 Y se define el m&eacute;todo getDetalles:<br/><br/> 
 		 <strong>getDetalles function() {},</strong><br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo09/ejemplo09.js.<br/>		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
