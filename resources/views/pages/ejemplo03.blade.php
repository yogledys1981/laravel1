 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo03/ejemplo03.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
 <h1><?php echo Config::get('constants.version_curso'); ?></h1>
 <div id="intro">Sesi&oacute;n 02</div><br/>
 <div id="myDiv1">
 		<strong>E</strong>jemplo 03<br/><br/>
 		 En este ejemplo manejamos un id de un bot&oacute;n y su evento click a trav&eacute;s de:<br/>
 		 Ext.get('myButton').on('click', function(){<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo03/ejemplo03.js.<br/><br/>
         Presiona el bot&oacute;n: Mi Boton, para hacer el test.
 		 
 </div>
 <div id="myDiv">Haciendo un test a div</div>
 <input type="button" id="myButton" value="Mi Boton" />

 @include('includes.footer')

</div>
</body>
</html>
