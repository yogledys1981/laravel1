 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo10/ejemplo10.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 10<br/><br/>
 		 Definiendo clases con la funci&oacute;n: <strong>Ext.define('Extjsbasico.Vehiculo', {</strong><br/>
 		 Se definen los m&eacute;todos:<strong>setModelo y setFrabricante</strong>, expl&iacute;citamente.<br/>
 		 Se definen los m&eacute;todos:<strong>aplicarModelo y aplicarFrabricante</strong>, para actualizar elementos DOM:<br/><br/>
 		 <strong>Muestra las actualizaciones en los elementos Dom span<br/>
	      miVehiculo.aplicarFabricante(miVehiculo.getFabricante());<br/>
	      miVehiculo.aplicarModelo(miVehiculo.getModelo());</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo10/ejemplo10.js.<br/>		 
 </div>
 <span id="Fabricante"></span>
 <span id="Modelo"></span>

 @include('includes.footer')

</div>
</body>
</html>
