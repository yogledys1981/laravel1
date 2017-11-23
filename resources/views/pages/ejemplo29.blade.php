 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo29/ejemplo29.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
<div id="myDiv">E</strong>jemplo 29<br/> Manipulando elementos DOM<br/>Parte I</div><br/>
 <div id="myDiv1">
 		<strong>A</strong>l crear aplicaciones web interactivas y sensibles, es vital poder<br/>
 		 acceder elementos DOM para la manipulaci&oacute;n y procesamiento.<br/><br/>
 		 
 		 Ext JS ofrece m&uacute;ltiples m&eacute;todos para recuperar referencias<br/>
 		 a los elementos DOM, que vamos a explorar en esta sesi&oacute;n.<br/><br/>
 		 
		Ext JS envuelve elementos b&aacute;sicos DOM en una clase llamada Ext.Element,<br/>
		y es la que	generalmente se usa para recuperar elementos DOM y manipularlos.<br/><br/>
		
		La misma, proporciona un gran n&uacute;mero de m&eacute;todos &uacute;tiles<br/>
		que hace la vida m&aacute;s f&aacute;cil para nosotros.<br/><br/>
		
		Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo29/ejemplo29.js.<br/>
 </div>

 @include('includes.footer')

</div>
</body>
</html>
