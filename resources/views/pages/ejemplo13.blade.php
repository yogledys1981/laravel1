 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo13/ejemplo13.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 13<br/><br/>
 		 Usando Polimorfismo en Extjs. Sobre escribiremos el m&eacute;todo: <strong>Viajes</strong>.<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo13/ejemplo13.js.<br/>		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
