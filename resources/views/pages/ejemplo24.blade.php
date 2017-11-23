 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo24/ejemplo24.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 24<br/><br/>
 		 Introducci&oacute;n a Contenedores o Layouts: Column Layout<br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo24/ejemplo24.js.<br/>		 
 </div>
 <img src="images/ejemplo18-layout.jpg"/>

 @include('includes.footer')

</div>
</body>
</html>
