 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo01/ejemplo01.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
 <h1><?php echo Config::get('constants.version_curso'); ?></h1>
 <div id="intro">Sesi&oacute;n 02</div><br/>
 <div id="myDiv1">
 		<strong>E</strong>jemplo 01<br/><br/>
 		 En este ejemplo estamos haciendo un Test para comprobar que el framework Extjs<br/>
 		 (al lado del cliente) est&aacute; bien instalado o ubicado.<br/><br/>
 		 A trav&eacute;s de la funci&oacute;n Ext.onReady(),  hacemos el test con el c&oacute;digo del javascript<br/>
 		 ubicado en public/js/ejemplo01.js<br/><br/>
 		 Al lado del servidor estamos usando el Framework Laravel 5.<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo01/ejemplo01.js.
 		 
 </div>

 @include('includes.footer')

</div>
</body>
</html>
