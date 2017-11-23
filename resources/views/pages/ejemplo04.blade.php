 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo04/ejemplo04.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 04<br/><br/>
 		 En este ejemplo manejamos la etiqueta "p" haciendo click a trav&eacute;s de:<br/>
 		 Ext.select('p').on('click', function() {<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo04/ejemplo04.js.<br/><br/>
 		 
 </div>
 <div id="myDiv">Haciendo un test a div</div>
 <input type="button" id="myButton" value="Mi Boton" />
 <p>Este es el p&aacute;rrafo: 1, haz clic en el texto</p>
 <p>Este es el p&aacute;rrafo: 2, haz clic en el texto</p>

 @include('includes.footer')

</div>
</body>
</html>
