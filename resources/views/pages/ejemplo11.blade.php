 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo11/ejemplo11.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 11<br/><br/>
 		 Definiendo clases con la funci&oacute;n: <strong>Ext.define('Extjsbasico.Vehiculo', {</strong><br/>
 		 Se definen las propiedades de la clase con el modificador:<br/><br/> 
 		 <strong>config: {<br/>
		  Fabricante: 'Chevrolet',<br/>
		  Modelo: 'Optra'<br/>
		 },</strong><br/><br/>
		 Y se define el constructor con el modificador:<br/><br/> 
 		 <strong>constructor: function(config){
		  //inicializa nuestro objeto con el config (las propiedades del objeto)
		  this.initConfig(config);
		  },</strong><br/><br/>
		  Como definimos las propiedades de la clase con el modificador:<br/><br/> 
 		 <strong>config:</strong><br/><br/>
 		 Podemos usar los m&eacute;todos:<strong>setModelo y setFrabricante</strong>, autom&aacute;ticamente estan definidos impl&iacute;citamente:<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo11/ejemplo11.js.<br/>		 
 </div>
 <span id="Fabricante"></span>
 <span id="Modelo"></span>

 @include('includes.footer')

</div>
</body>
</html>
