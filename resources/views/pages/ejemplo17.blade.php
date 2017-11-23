 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo17/ejemplo17.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 02</div><br/>
 <div id="myDiv1">
    <strong>E</strong>jemplo 17<br/><br/>
     Definiendo clases en otro fuente (*.js) e import&aacute;ndola a trav&eacute;s de <strong>Ext.require('Extjsbasico.Vehiculo', function() {</strong>:<br/><br/>
     Y configurando el path con: <strong>Ext.Loader.setConfig({</strong><br/><br/> 
         Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo17/ejemplo17.js.<br/>    
 </div>

 @include('includes.footer')

</div>
</body>
</html>
