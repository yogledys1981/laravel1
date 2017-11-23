 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo14/ejemplo14.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 14<br/><br/>
 		 Usando Herencia M&uacute;ltiple a trav&eacute;s de <strong>mixins</strong>:<br/><br/>
 		 <strong>//Agregamos una nueva habilidad, herencia multiple o mixins<br/>
	     mixins: {<br/>
	      presionAtmosferica: 'Extjsbasico.DetectordePresionAtmosferica'<br/>
	     },</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo14/ejemplo14.js.<br/>		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
