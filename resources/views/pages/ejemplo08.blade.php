 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo08/ejemplo08.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 08<br/><br/>
 		 Definiendo clases con la funci&oacute;n: <strong>Ext.define('Extjsbasico.Vehiculo', {</strong><br/>
 		 Y creando una instancia con la funci&oacute;n:<br/><br/> 
 		 <strong>var miVehiculo = Ext.create('Extjsbasico.Vehiculo');</strong><br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo08/ejemplo08.js.<br/>		 
 </div>
 <div id="myDiv2">
  <img src="images/ejemplo08.jpg"/>
 </div>

 @include('includes.footer')

</div>
</body>
</html>
