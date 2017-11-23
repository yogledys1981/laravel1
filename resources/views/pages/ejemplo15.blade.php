 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo15/ejemplo15.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 15<br/><br/>
 		 Modificando el comportamiento de un m&eacute;todo a trav&eacute;s de <strong>Ext.bind</strong>:<br/><br/>
 		 <strong>
	      Ext.bind(perro.dice, gato)(); //Imprime el perro maulla</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo15/ejemplo15.js.<br/>		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
