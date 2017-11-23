 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo27/ejemplo27.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
 <div id="myDiv1">
 		<strong>E</strong>jemplo 27<br/><br/>
 		 Introducci&oacute;n a Contenedores o Layouts: Border Layout<br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo27/ejemplo27.js.<br/>		 
 </div>
 <img src="images/ejemplo18-layout.jpg"/>

 @include('includes.footer')

</div>
</body>
</html>
