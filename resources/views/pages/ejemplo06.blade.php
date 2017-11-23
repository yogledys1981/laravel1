 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo06/ejemplo06.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 06<br/><br/>
 		 En este ejemplo manejamos la funci&oacute;n: <strong>Ext.MessageBox.show()</strong> en vez de la funci&oacute;n<br/>
 		 est&aacute;ndar de javascript: <strong>alert()</strong>.<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo06/ejemplo06.js.<br/><br/>
         Presiona en los p&aacute;rrafos, para hacer el test.
 		 
 </div>
 <div id="myDiv">Haciendo un test a div</div>
 <input type="button" id="myButton" value="Mi Boton" />
 <p id="p1">Este es el p&aacute;rrafo: 1, haz clic en el texto</p>
 <p id="p2">Este es el p&aacute;rrafo: 2, haz clic en el texto</p>

 @include('includes.footer')

</div>
</body>
</html>
