 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo02/ejemplo02.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
 <h1><?php echo Config::get('constants.version_curso'); ?></h1>
 <div id="intro">Sesi&oacute;n 02</div><br/>
 <div id="myDiv1">
 		<strong>E</strong>jemplo 02<br/><br/>
 		 En este ejemplo manejamos un id y lo obtenemos con la funci&oacute;n Ext.get('myDiv')<br/>
 		 Luego manejamos sus propiedades a trav&eacute;s de los m&eacute;todos:<br/><br/>
 		 myDiv.highlight(); <br/>
         myDiv.setStyle("color","#aa0000",true);<br/> 
         myDiv.center();<br/>
         myDiv.setOpacity<br/><br/>
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo02/ejemplo02.js.
 		 
 </div>
 <div id="myDiv">Haciendo un test a div</div>

 @include('includes.footer')

</div>
</body>
</html>
