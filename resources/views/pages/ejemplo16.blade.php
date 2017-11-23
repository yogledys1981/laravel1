 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo16/ejemplo16.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
 <div id="myDiv1">
 		<strong>E</strong>jemplo 16<br/><br/>
 		 Modificando el comportamiento de un bot&oacute;n a trav&eacute;s de <strong>Ext.bind y scope</strong>:<br/><br/>
 		 <strong>
	      click: Ext.bind(function(button, e, options) {<br/>
	      scope: textObjscope</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo16/ejemplo16.js.<br/>		 
 </div>
 <table>
  <tr>
   <td><span id="boton1"></span><br/></td>
   <td><span id="boton2"></span><br/></td>
   <td><span id="boton3"></td>
  </tr>
 </table>

 @include('includes.footer')

</div>
</body>
</html>
