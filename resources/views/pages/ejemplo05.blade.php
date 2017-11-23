 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo05/ejemplo05.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 05<br/><br/>
 		 En este ejemplo manejamos la etiqueta "p" d&aacute;ndole un id a cada etiqueta "p":<br/>
 		 Ext.get(e.target) y as&iacute; indicamos cual p&aacute;rrafo presion&oacute;.<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo05/ejemplo05.js.<br/><br/>
 		 
 </div>
 <div id="myDiv">Haciendo un test a div</div>
 <input type="button" id="myButton" value="Mi Boton" />
 <p id="p1">Este es el p&aacute;rrafo: 1, haz clic en el texto</p>
 <p id="p2">Este es el p&aacute;rrafo: 2, haz clic en el texto</p>

 @include('includes.footer')

</div>
</body>
</html>
