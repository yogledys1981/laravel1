 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo26/ejemplo26.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03</div><br/>
<div id="myDiv1">
 		<strong>E</strong>jemplo 26<br/><br/>
 		 Introducci&oacute;n a Contenedores o Layouts: Fit Layout<br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo26/ejemplo26.js.<br/>		 
 </div>
 <img src="images/ejemplo18-layout.jpg"/>

 @include('includes.footer')

</div>
</body>
</html>
